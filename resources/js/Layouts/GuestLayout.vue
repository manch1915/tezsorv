<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="screen flex flex-col sm:mt-0 -mt-20 justify-center items-center pt-6 sm:pt-0 bg-main">
        <div>
            <Link :href="route('home')">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-mine-second shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>

<style scoped>
@media screen and (max-width: 768px) {
    .screen{
        min-height: calc(100vh + 5rem);
    }
}
.screen{
    min-height: calc(100vh);
}
</style>
