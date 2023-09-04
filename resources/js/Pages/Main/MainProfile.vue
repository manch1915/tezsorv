<script setup>
import {defineProps} from 'vue'
import {Head} from '@inertiajs/vue3';
import MainProfileContainer from '@/Components/MainProfileContainer.vue';
import SidebarProfile from '@/Components/SidebarProfile.vue';
import MainHeader from '@/Components/MainHeader.vue';
import MainLayout from '@/Layouts/MainLayout.vue';

const props = defineProps({
  auth: Object,
});
</script>

<template>
  <Head title="Profile"/>
  <main class="main-container">
    <MainHeader :auth="auth"/>
    <MainLayout>
      <template #main>
        <MainProfileContainer/>
      </template>
      <template #sidebar>
        <SidebarProfile :auth="auth"/>
      </template>
    </MainLayout>
  </main>
</template>

<style scoped>
.main-container {
  background-color: #303030;
}
</style>
