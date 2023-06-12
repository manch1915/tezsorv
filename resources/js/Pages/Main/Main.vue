<script setup>
import {defineProps} from 'vue';
import {Head} from '@inertiajs/vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import DiscussionList from '@/Components/DiscussionList.vue';
import MainHeader from '@/Components/MainHeader.vue';
import NavSidebar from '@/Components/NavSidebar.vue';

const props = defineProps({
    auth: Object,
    notifications: Object
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
