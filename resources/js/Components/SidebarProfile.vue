<template>
    <img v-if="member" :src="member.profile_picture" alt="" srcset="" class="profile__picture">
</template>

<script setup>
import { useMainStore } from "@/stores/main";
import { computed, onMounted } from 'vue';
import RingLoader from "vue-spinner/src/RingLoader.vue";
const store = useMainStore();
const member = computed(() => store.member);

</script>

<style scoped>
.profile__picture{
    width: 100%;
}
</style>
