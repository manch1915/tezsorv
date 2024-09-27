<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import NavSettings from "@/Components/NavSettings.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
    auth: Object,
})
defineOptions({layout: MainLayout})
</script>

<template >
    <AppLayout>
            <template #main>

            </template>
            <template #sidebar>
                <NavSettings/>
            </template>
    </AppLayout>
</template>


<style>
main{
    background-color: #303030;
}
</style>
