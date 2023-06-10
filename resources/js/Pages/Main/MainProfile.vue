<script setup>
import MainProfileContainer from "@/Components/MainProfileContainer.vue";
import SidebarProfile from "@/Components/SidebarProfile.vue";
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import { Head } from '@inertiajs/vue3'

const props = defineProps({
    auth: Object,
})
</script>

<template>
    <Head title="Profile"/>
    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <MainProfileContainer/>
            </template>
            <template #sidebar>
                <SidebarProfile :auth="props.auth"/>
            </template>
        </MainLayout>
    </main>
</template>

<style scoped>
main{
    background-color: #303030;
}
</style>
