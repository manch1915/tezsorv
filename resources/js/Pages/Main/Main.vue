<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import DiscussionList from "@/Components/DiscussionList.vue";
import MainHeader from "@/Components/MainHeader.vue";
import NavSidebar from "@/Components/NavSidebar.vue";
import { Head } from '@inertiajs/vue3'
const props = defineProps({
    auth: Object
})
</script>

<template>
    <Head title="Main"/>
    <main>
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

<style>
main{
    background-color: #303030;
}
</style>
