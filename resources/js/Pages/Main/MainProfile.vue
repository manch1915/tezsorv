<script setup>
import MainProfileContainer from "@/Components/MainProfileContainer.vue";
import SidebarProfile from "@/Components/SidebarProfile.vue";
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    auth: Object,
})
</script>

<template>
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
