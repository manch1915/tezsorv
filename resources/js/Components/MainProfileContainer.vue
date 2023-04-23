<template>
    <div class="mainContainer">
        <div class="mainContent">
            <div v-if="member" class="userInfo">
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
                            <li>{{ member.created_at }}</li>
                            <li>{{ member.sex.name }}</li>
                            <li>{{ member.status.name }}</li>
                            <li>{{ member.country }}</li>
                            <li>{{ member.city }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="themes pt-5">
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
</template>

<script setup>
import {useMainStore} from "@/stores/main";
import {computed, onMounted} from "vue";
import {NButton} from "naive-ui";
import { mdiNoteMultipleOutline } from '@mdi/js';
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
</script>

<style scoped>
@media (min-width: 1025px) {
    .mainContainer {
        width: 821px;
    }
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
