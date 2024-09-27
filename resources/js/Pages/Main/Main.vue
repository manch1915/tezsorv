<template>
        <AppLayout>
            <template #main>
                <DiscussionList/>
            </template>
            <template #sidebar>
                <NavSidebar :categories="categories"/>
            </template>
        </AppLayout>
</template>

<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import DiscussionList from "@/Components/DiscussionList.vue";
import NavSidebar from "@/Components/NavSidebar.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

//todo options api
const props = defineProps({
    categories: Array,
})

defineOptions({layout: MainLayout})
</script>
