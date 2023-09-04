<script setup>

import {NButton, NSpace} from "naive-ui";
</script>

<template>
    <div class="base bg-mine text-white h-screen">
        <div class="container mx-auto bg-second">
            <aside class="float-left bg-second w-1/6">
                <div class="sidebar p-6">
                    <ul>
                        <n-space vertical>
                            <li class="w-100">
                                <n-button block class="text-white p-6">Users</n-button>
                            </li>
                            <li class="w-100">
                                <n-button block class="text-white p-6">Posts</n-button>
                            </li>
                            <li class="w-100">
                                <n-button block class="text-white p-6">Comments</n-button>
                            </li>
                            <li class="w-100">
                                <n-button block class="text-white p-6">Categories</n-button>
                            </li>
                            <li class="w-100">
                                <n-button block class="text-white p-6">Sexes</n-button>
                            </li>
                        </n-space>
                    </ul>
                </div>
            </aside>
            <main>
                <slot/>
            </main>
        </div>
    </div>
</template>

<style scoped>
</style>
