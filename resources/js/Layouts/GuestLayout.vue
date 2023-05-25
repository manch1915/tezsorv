<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-main">
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div
            class="w-full white-shadow sm:max-w-md mt-6 px-6 py-4 bg-mine-second shadow-md overflow-hidden sm:rounded-lg"
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
.white-shadow{
    box-shadow: 0 0 30px rgba(255, 255, 255, 0.2);
}
</style>
