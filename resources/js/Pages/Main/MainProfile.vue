<script setup>
import MainProfileContainer from "@/Components/MainProfileContainer.vue";
import SidebarProfile from "@/Components/SidebarProfile.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    auth: Object,
    member: Object
})

defineOptions({layout: MainLayout})
</script>

<template>
        <AppLayout>
            <template #main>
                <MainProfileContainer :member="member"/>
            </template>
            <template #sidebar>
                <SidebarProfile :auth="props.auth" :member="member"/>
            </template>
        </AppLayout>
</template>

<style scoped>

</style>
