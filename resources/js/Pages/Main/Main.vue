<template>
    <main>
        <MainHeader :auth="auth"/>
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

<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import DiscussionList from "@/Components/DiscussionList.vue";
import MainHeader from "@/Components/MainHeader.vue";
import NavSidebar from "@/Components/NavSidebar.vue";
//todo options api

export default {
    name: "Main",
    components: {NavSidebar, MainHeader, DiscussionList, MainLayout},
    props: {
        auth: Object
    }
}
</script>
<style>
main{
    background-color: #303030;
}
</style>
