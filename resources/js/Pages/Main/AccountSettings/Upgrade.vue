<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import NavSettings from "@/Components/NavSettings.vue";

const props = defineProps({
    auth: Object,
})

</script>

<template >
    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>

            </template>
            <template #sidebar>
                <NavSettings/>
            </template>
        </MainLayout>
    </main>
</template>


<style>
main{
    background-color: #303030;
}
</style>
