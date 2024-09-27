<script setup>
import ImageUpload from "@/Components/ImageUpload.vue";
import Like from "@/Components/Like.vue";

const props = defineProps({
    auth: Object,
    member: Object
})

</script>

<template>
    <img v-if="member?.profile_picture" :src="member.profile_picture" alt="" srcset="" class="profile__picture">
    <img v-else src="/images/unuser.jpg" alt="" srcset="" class="profile__picture">
    <Like v-if="member?.id !== props.auth.user.id" :member_id="member?.id"/>
    <ImageUpload v-if="member?.id === props.auth.user.id"/>
</template>

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
