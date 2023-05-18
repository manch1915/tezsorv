<script setup>
import {darkTheme, NConfigProvider} from 'naive-ui'
import {NButton} from "naive-ui";
import {mdiHeartOutline} from '@mdi/js';
import BaseIcon from "@/Components/BaseIcon.vue";
import axios from 'axios';

const props = defineProps({
    member_id: Number,
});

const sendLike = () => {
  axios.post(route('like'),{'member_id': props.member_id})
      .then(res => (console.log(res)))
      .catch(error => (console.log(error)))
};

</script>

<template>
    <n-config-provider :theme="darkTheme">
        <n-button class="w-full mt-2" icon-placement="left" :on-click="sendLike">
            <template #icon>
               <BaseIcon :path="mdiHeartOutline"/>
            </template>
           Like
        </n-button>
    </n-config-provider>
</template>

<style scoped>

</style>
