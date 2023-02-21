<template>
    <div class="circle ring-4 ring-zinc-500 rounded-sm p-4 w-full my-5 text-center">
        <div class="grid sm:grid-cols-3 grid-cols-1 text-left justify-center content-center justify-items-center">
            <slot/>
        </div>
        <a href="" class="text-blue-600 text-2xl hover:text-pink-500">Watch more...</a>
    </div>
</template>

<script>
export default {
    name: "Circle",
}
</script>

<style scoped>

</style>
