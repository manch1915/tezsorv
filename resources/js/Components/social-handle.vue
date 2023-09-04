<script setup>
import BaseIcon from "@/Components/BaseIcon.vue";
import {mdiInstagram, mdiSendCircleOutline} from '@mdi/js';

const props = defineProps({
    member: Object
})
</script>

<template>
    <div class="flex gap-x-3">
        <a v-if="member.instagram" :href="`https://www.instagram.com/${member.instagram}`"
           class="mt-4" target="_blank">
            <BaseIcon :path="mdiInstagram" class="instagram__logo" fill="#949494" size="50"/>
        </a>
        <a v-if="member.telegram" :href="`https://www.t.me/${member.telegram}`" class="w-2 mt-4"
           target="_blank">
            <BaseIcon :path="mdiSendCircleOutline" class="telegram__logo" fill="#949494" size="50"/>
        </a>
    </div>
</template>

<style scoped>

</style>
