<script setup>
import {useMainStore} from "@/stores/main";
import {computed, onMounted} from "vue";
import {NButton, NIcon} from "naive-ui";
import {mdiNoteMultipleOutline, mdiInstagram, mdiSendCircleOutline} from '@mdi/js';

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

<template>
    <section class="lg:mt-0 mt-4">
        <div class="mainContainer">
            <div class="mainContent">
                <div v-if="member" class="userInfo flex flex-col">
                    <div class="username"><p>{{ member.username }}</p></div>
                    <div class="inline-grid grid-cols-2 mt-4">
                        <div class="pr-10 text-mainText">
                            <ul>
                                <li v-if="member.first_name">Անուն:</li>
                                <li v-if="member.last_name">Ազգանուն:</li>
                                <li v-if="memberCreatedAt ">Գրանցվել է:</li>
                                <li v-if="member.sex.name">Սեռ:</li>
                                <li v-if="member.role">Դեր:</li>
                                <li v-if="member.country">Երկիր:</li>
                                <li v-if="member.city">Քաղաք:</li>
                            </ul>
                        </div>
                        <div class="text-white">
                            <ul>
                                <li>{{ member.first_name }}</li>
                                <li>{{ member.last_name }}</li>
                                <li>{{ memberCreatedAt }}</li>
                                <li>{{ member.sex.name }}</li>
                                <li>{{ member.role }}</li>
                                <li>{{ member.country }}</li>
                                <li>{{ member.city }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex gap-x-3">
                        <a v-if="member.instagram" :href="`https://www.instagram.com/${member.instagram}`"
                           class=" mt-4" target="_blank">
                            <BaseIcon :path="mdiInstagram" class="instagram__logo" fill="#949494" size="50"/>
                        </a>
                        <a v-if="member.telegram" :href="`https://www.t.me/${member.telegram}`" class="w-2 mt-4"
                           target="_blank">
                            <BaseIcon :path="mdiSendCircleOutline" class="telegram__logo" fill="#949494" size="50"/>
                        </a></div>

                </div>
                <div class="themes pt-5 flex justify-start items-start content-start flex-col">
                    <n-button class="text-gray-500" icon-placement="left" text>
                        <template #icon>
                            <n-icon>
                                <BaseIcon :path="mdiNoteMultipleOutline"/>
                            </n-icon>
                        </template>
                        Темы от {{ member?.username ?? '' }}
                    </n-button>
                </div>
                <div class="counts_module mt-2" v-if="member">
                    <div class="page_counter">
                        <div class="count">{{ member.likes_count }}</div>
                        <div class="label text-mainText">Սիմպատյա</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainContainer mt-2">
            <div class="mainContent">

            </div>
        </div>
    </section>
</template>

<style>

.mainContainer, section {
    width: 100%;
}

.mainContent {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}

.username {
    padding: 0 0 15px;
}

.username p {
    color: rgb(148, 148, 148);
    font-size: 20px;
}

@keyframes instagram {
    0% {
        filter: drop-shadow(0px 0px 8px #5851db)
    }
    25% {
        filter: drop-shadow(0px 0px 8px #405de6)
    }
    50% {
        filter: drop-shadow(0px 0px 8px #833ab4)
    }
    75% {
        filter: drop-shadow(0px 0px 8px #c13584)
    }
    100% {
        filter: drop-shadow(0px 0px 8px #5851db)
    }
}

.instagram__logo {
    filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));
}

.instagram__logo svg {
    opacity: 0.4;
    animation-name: instagram;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    transition: all 0.5s;
}

.instagram__logo svg {
    opacity: 0.4;
    animation-name: instagram;
    animation-duration: 10s;
    animation-iteration-count: infinite;
}

.instagram__logo svg:hover {
    opacity: 1;
    filter: drop-shadow(0px 0px 4px #c13584)
}

@keyframes telegram {
    0% {
        filter: drop-shadow(0px 0px 0px #229ED9)
    }
    50% {
        filter: drop-shadow(0px 0px 8px #229ED9)
    }
    100% {
        filter: drop-shadow(0px 0px 0px #229ED9)
    }
}

.telegram__logo {
    filter: drop-shadow(3px 5px 2px rgb(0 0 0 / 0.4));
}

.telegram__logo svg {
    opacity: 0.4;
    animation-name: telegram;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    transition: all 0.5s;
}

.telegram__logo svg:hover {
    opacity: 1;
    filter: drop-shadow(0px 0px 4px #229ED9)
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
    text-shadow: 1px 0px 7px rgb(42, 183, 51);
}

.page_counter .count {
    font-size: 19px;
    color: rgb(0, 186, 120);
    padding-bottom: 3px;
    line-height: 21px;
}
</style>
