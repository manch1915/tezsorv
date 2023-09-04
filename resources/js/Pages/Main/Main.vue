<script setup>
import {defineProps, onMounted, onUnmounted, ref} from 'vue';
import {Head} from '@inertiajs/vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import DiscussionList from '@/Components/DiscussionList.vue';
import MainHeader from '@/Components/MainHeader.vue';
import NavSidebar from '@/Components/NavSidebar.vue';

const props = defineProps({
    auth: Object,
    notifications: Object
});

const ws = ref(null);

onMounted(() => {
    ws.value = new WebSocket('ws://localhost:8080');

    ws.value.onmessage = (event) => {
        const data = JSON.parse(event.data);
        // handle user connected/disconnected notification
        switch (data.type) {
            case 'user_connect':
                // logic when user is connected
                break;
            case 'user_disconnect':
                // logic when user is disconnected
                break;
        }
    };

    ws.value.onopen = () => {
        // User just connected send init message to WebSocket server
        ws.value.send(JSON.stringify({type: 'init', user_id: props.auth.id}));
    };
});

onUnmounted(() => {
    if (ws.value) {
        ws.value.close();
    }
});
</script>

<template>
    <Head title="Main"/>
    <main class="main-container">
        <MainHeader :auth="props.auth"/>
        <MainLayout>
            <template #main>
                <DiscussionList/>
            </template>
            <template #sidebar>
                <NavSidebar/>
            </template>
        </MainLayout>
    </main>
</template>

<style scoped>
.main-container {
    background-color: #303030;
}
</style>
