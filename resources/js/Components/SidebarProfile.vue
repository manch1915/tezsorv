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
@media only screen and (max-width: 1122px) {
    .profile__picture{
        width: 200px;
        margin: 0 auto;
    }
}
</style>
