<script setup>
// Vue related imports
import {computed, onMounted, ref, watch} from "vue";

// UI Components imports
import {NButton, NIcon, NSpace} from "naive-ui";

// Other imports
import axios from "axios";
import {mdiNoteMultipleOutline} from '@mdi/js';

// Local components and functions imports
import {useMainStore} from "@/stores/main";
import {getWalls, postWall} from '@/api/wall';
import BaseIcon from "@/Components/BaseIcon.vue";
import NeoEditor from "@/Components/NeoEditor.vue";
import MainProfileWallItem from "@/Components/MainProfileWallItem.vue";
import UsernameComponent from "@/Components/username-component.vue";
import UserInfo from "@/Components/user-info.vue";
import SocialHandle from "@/Components/social-handle.vue";

const store = useMainStore();

const memberUsername = computed(() => {
    const url = window.location.href;
    const regex = /\/(\w+)$/;
    const match = url.match(regex);

    if (!match) {
        throw new Error('Invalid URL');
    }

    return match[1];
});

// Function to fetch data and fill ref 'walls'
async function fetchWalls(id) {
  try {
    const response = await getWalls(id);
    walls.value = response.data;
  } catch (error) {
    console.error(error);
  }
}

// Function to post a wall and log the response
async function postAWall(input) {
  try {
    const response = await postWall(input);
    console.log(response);
  } catch (error) {
    console.error(error);
  }
}

onMounted(() => {
    store.fetchMember(memberUsername.value);
});

// Computed properties and refs
const member = computed(() => store.member);
const memberId = computed(() => member.value.data.id);
const body = ref({});
const walls = ref({});

// Watch for changes in member 'ref' and fetch walls accordingly
watch(member, (newMember) => {
  if (newMember.data && newMember.data.id) {
    fetchWalls(newMember.data.id)
    }
});

const addWall = () => {
  postAWall({
        'wall_user_id': memberId.value,
        'body': JSON.stringify(body.value)
  });
}

const memberCreatedAt = computed(() => new Date(member.value.created_at).toLocaleString());

// Computed property to create soundcloud link
const soundcloudLink = computed(() => {
  if (!member.value || !/https:\/\/w\..+&visual=true/.test(store.member.soundcloud_track)) {
        return null;
    }

  let url = new URL(/https:\/\/w\..+&visual=true/.exec(store.member.soundcloud_track)[0]);

  ['hide_related', 'show_comments', 'show_user', 'show_teaser'].forEach(item => {
    url.searchParams.set(item, 'false');
  });

  return url.toString() + '&amp;';
});
</script>

<template>
    <section class="lg:mt-0 mt-4">
        <div class="mainContainer">
            <div class="mainContent">
              <template v-if="member">
                <div class="userInfo flex flex-col">
                  <username-component :username="member.data.username"/>
                  <user-info :member="member.data"/>
                  <social-handle :member="member.data"/>
                </div>
                <div class="themes pt-5 flex justify-start items-start content-start flex-col">
                  <n-button class="text-gray-500" icon-placement="left" text>
                    <template #icon>
                      <n-icon>
                        <BaseIcon :path="mdiNoteMultipleOutline"/>
                      </n-icon>
                    </template>
                    Темы от {{ member.username ?? '' }}
                  </n-button>
                </div>
                <div class="counts_module mt-2">
                  <div class="page_counter">
                    <div class="count">{{ member.likes_count }}</div>
                    <div class="label text-mainText">Սիմպատյա</div>
                  </div>
                </div>
              </template>
            </div>
        </div>
      <div class="mainContainer mt-2" v-if="soundcloudLink">
        <div class="mainContent">
          <iframe width="100%" height="166" scrolling="no" frameborder="no" :src='soundcloudLink'></iframe>
        </div>
      </div>

      <div class="mainContainer mt-2">
        <div class="mainContent">
          <n-space vertical>
            <div class="bg-gray-700 rounded">
              <NeoEditor v-model="body" type="bubble"/>
            </div>
            <n-button @click.prevent="addWall">addWall</n-button>
          </n-space>
        </div>
      </div>

      <div class="mainContainer mt-2" v-for="wall in walls" :key="wall.id">
        <div class="mainContent">
          <main-profile-wall-item :wall="wall"/>
        </div>
      </div>
    </section>
</template>

<style>
.mainContainer,
section {
  width: 100%;
}

.mainContent {
  border-radius: 10px;
  padding: 15px 20px;
  background: rgb(39, 39, 39);
}

.username {
  padding-bottom: 15px;
}

.username p {
  color: rgb(148, 148, 148);
  font-size: 20px;
}

.instagram__logo,
.telegram__logo {
  filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));
}

.instagram__logo svg,
.telegram__logo svg {
  opacity: 0.4;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  transition: all 0.5s;
}

.instagram__logo svg:hover {
  opacity: 1;
  filter: drop-shadow(0px 0px 4px #c13584);
}

.telegram__logo svg:hover {
  opacity: 1;
  filter: drop-shadow(0px 0px 4px #229ED9);
}

.counts_module {
  text-align: center;
  border-top: 1px solid rgb(45, 45, 45);
  max-height: 69px;
  overflow: hidden;
}

.page_counter {
  display: inline-block;
  padding: 15px;
}

.page_counter .count {
  text-shadow: 1px 0 7px rgb(42, 183, 51);
  font-size: 19px;
  color: rgb(0, 186, 120);
  padding-bottom: 3px;
  line-height: 21px;
}

@keyframes instagram {
  0%,
  100% {
    filter: drop-shadow(0px 0px 8px #5851db);
  }
  25% {
    filter: drop-shadow(0px 0px 8px #405de6);
  }
  50% {
    filter: drop-shadow(0px 0px 8px #833ab4);
  }
  75% {
    filter: drop-shadow(0px 0px 8px #c13584);
  }
}

@keyframes telegram {
  0%,
  100% {
    filter: drop-shadow(0px 0px 0px #229ED9);
  }
  50% {
    filter: drop-shadow(0px 0px 8px #229ED9);
  }
}
</style>
