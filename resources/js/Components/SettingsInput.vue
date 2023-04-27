<script setup>
const props = defineProps({
    title: String,
    border: {
        type: Boolean,
        default: false,
    }
})
</script>
<template>
    <div class="inline-grid md:w-2/4 w-full grid-cols-2 content-center items-center pt-5">
        <div class="pr-10 text-mainText">
            {{ props.title }}:
        </div>
        <slot/>
    </div>
    <div v-show="props.border" class="border-b-2 border-second w-full pt-5"/>
</template>

<style scoped>

</style>
