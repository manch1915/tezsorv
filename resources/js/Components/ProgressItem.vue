<template>
    <h1 class="text-lg text-slate-300 text-center">{{title}}</h1>
    <n-image
        lazy
        class="w-full"
        :src="src"
        :preview-disabled="true"
    />
</template>

<script setup>
import {NImage} from "naive-ui";

const props = defineProps({
    title: String,
    src: String
})
</script>

<style scoped>

</style>
