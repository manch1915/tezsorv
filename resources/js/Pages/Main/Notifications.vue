<template>
    <Head title="Main"/>
    <main class="main-container">
        <MainHeader :auth="props.auth"/>
        <div class="headerMover min-h-screen">
            <div class="breadBoxTop"></div>
            <div class="pageContent">
                <div class="mainContainer lg:mr-2 mr-0 lg:mt-0 mt-4">
                    <div class="mainContent text-white">
                        <template v-for="notification in notifications">
                            <NotificationItem :title="notification.data.data" :created_at="notification.created_at"/>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
import {computed, defineProps} from 'vue';
import {Head} from '@inertiajs/vue3';

import MainHeader from '@/Components/MainHeader.vue';
import NotificationItem from "@/Components/NotificationItem.vue";

const props = defineProps({
    auth: Object,
    notifications: Object
})


</script>

<style scoped>
.main-container {
    background-color: #303030;
}

.pageContent {
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
}

.headerMover {
    max-width: 1076px;
    margin: 0 auto;
    position: relative;
    zoom: 1;
    box-sizing: border-box;
}

.breadBoxTop {
    width: 1076px;
    overflow: hidden;
    zoom: 1;
    position: relative;
    clear: both;
    box-sizing: border-box;
}

.breadBoxTop {
    margin: 1em auto 1em;
}

@media only screen and (max-width: 1122px) {
    .pageContent {
        display: flex;
        flex-direction: column-reverse;
        justify-content: center;
        align-items: center;
        align-content: center;
    }
}

.mainContainer {
    width: 100%;
}

.mainContent,
.discussionList {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}

@media screen and (max-width: 768px) {
    .discussionList {
        padding: 15px 0;
    }
}

.aboveThreadList {
    margin-bottom: 15px;
    box-sizing: border-box;
    width: 100%;
}
</style>
