<template>
    <img v-if="member" :src="member.profile_picture" alt="" srcset="" class="profile__picture">
    <ImageUpload/>
</template>

<script setup>
import { useMainStore } from "@/stores/main";
import { computed} from 'vue';
import ImageUpload from "@/Components/ImageUpload.vue";
const store = useMainStore();
const member = computed(() => store.member);

</script>

<style scoped>
.profile__picture{
    width: 100%;
}
</style>
