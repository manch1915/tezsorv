<script setup>
import {darkTheme, NConfigProvider} from 'naive-ui'
import {NButton} from "naive-ui";
import {mdiHeartOutline} from '@mdi/js';
import BaseIcon from "@/Components/BaseIcon.vue";


</script>

<template>
    <n-config-provider :theme="darkTheme">
        <n-button class="w-full mt-2" icon-placement="left">
            <template #icon>
               <BaseIcon :path="mdiHeartOutline"/>
            </template>
           Like
        </n-button>
    </n-config-provider>
</template>

<style scoped>

</style>
