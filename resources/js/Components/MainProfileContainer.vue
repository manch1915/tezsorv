<template>
    <section class="lg:mt-0 mt-4">
    <div class="mainContainer">
        <div class="mainContent">
            <div v-if="member" class="userInfo flex flex-col">
                <div class="username"><p>{{ member.username }}</p></div>
                <div class="inline-grid grid-cols-2">
                    <div class="pr-10 text-mainText">
                        <ul>
                            <li>Имя:</li>
                            <li>Фамилия:</li>
                            <li>Регистрация:</li>
                            <li>Пол:</li>
                            <li>Статус:</li>
                            <li>Страна:</li>
                            <li>Город:</li>
                        </ul>
                    </div>
                    <div class="text-white">
                        <ul>
                            <li>{{ member.first_name }}</li>
                            <li>{{ member.last_name }}</li>
                            <li>{{ memberCreatedAt }}</li>
                            <li>{{ member.sex.name }}</li>
                            <li>{{ member.status.name }}</li>
                            <li>{{ member.country }}</li>
                            <li>{{ member.city }}</li>
                        </ul>
                    </div>
                </div>
                <a :href="`https://www.instagram.com/${member.instagram}`" target="_blank" class="w-2 mt-4">
                    <n-button dashed icon-placement="left" class="text-gray-500">
                        <template #icon>
                            <n-icon>
                                <BaseIcon :path="mdiInstagram"/>
                            </n-icon>
                        </template>
                        Insta {{ member?.username ?? '' }}
                    </n-button>
                </a>
                <a :href="`https://www.t.me/${member.instagram}`" target="_blank" class="w-2 mt-4">
                    <n-button dashed icon-placement="left" class="text-gray-500">
                        <template #icon>
                            <n-icon>
                                <BaseIcon :path="mdiSendCircleOutline"/>
                            </n-icon>
                        </template>
                        Tg {{ member?.username ?? '' }}
                    </n-button>
                </a>
            </div>
            <div class="themes pt-5 flex justify-start items-start content-start flex-col">
                <n-button quaternary  class="text-gray-500 my-2">
                    <template #icon>
                        <n-icon size="40">
                            <BaseIcon size="30" w="w-full" h="h-full" :path="mdiHeartBoxOutline"/>
                        </n-icon>
                    </template>
                </n-button>
                <n-button icon-placement="left" text class="text-gray-500">
                    <template #icon>
                        <n-icon>
                            <BaseIcon :path="mdiNoteMultipleOutline"/>
                        </n-icon>
                    </template>
                    Темы от {{ member?.username ?? '' }}
                </n-button>
            </div>
        </div>
    </div>
    <div class="mainContainer mt-2">
        <div class="mainContent">

        </div>
    </div>
    </section>
</template>

<script setup>
import {useMainStore} from "@/stores/main";
import {computed, onMounted} from "vue";
import {NButton, NIcon} from "naive-ui";
import { mdiNoteMultipleOutline,mdiInstagram,  mdiSendCircleOutline,mdiHeartBoxOutline } from '@mdi/js';
import BaseIcon from "@/Components/BaseIcon.vue";

const store = useMainStore();

const memberId = computed(() => {
    const url = window.location.href;
    const regex = /\/(\d+)$/;
    const match = url.match(regex);

    if (!match) {
        throw new Error('Invalid URL');
    }

    return parseInt(match[1], 10);
});

onMounted(() => {
    store.fetchMember(memberId.value);
});

const loading = computed(() => store.loading);
const member = computed(() => store.member);

const memberCreatedAt = computed(() =>
    new Date(member.value.created_at).toLocaleString()
)
</script>

<style scoped>

.mainContainer, section {
    width:100%;
}
.mainContent {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}

.username {
    padding: 0 0 15px;
    border-bottom: 1px solid rgb(45, 45, 45);
}

.username p {
    color: rgb(148, 148, 148);
    font-size: 20px;
}

</style>
