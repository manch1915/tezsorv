<template>
    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <MainProfileContainer/>
            </template>
            <template #sidebar>
                <SidebarProfile/>
            </template>
        </MainLayout>
    </main>
</template>

<script>
import MainProfileContainer from "@/Components/MainProfileContainer.vue";
import SidebarProfile from "@/Components/SidebarProfile.vue";
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "MainProfile",
    components: {MainLayout, MainHeader, SidebarProfile, MainProfileContainer},
    props: {
        auth: Object
    }
}
</script>

<style scoped>
main{
    background-color: #303030;
}
</style>
