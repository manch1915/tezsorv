<template>
    <n-space vertical>
        <Link :href="route('member', props.wall.user.username)" class="flex">
            <n-space>
                <n-avatar size="large" round :src="props.wall.user.profile_picture"
                          class="hover:invert transition"/>
                <p class="text-mainText">{{ props.wall.user.username }}</p>
            </n-space>
        </Link>
        <div v-html="html"></div>
    </n-space>
</template>

<script setup>
import {QuillDeltaToHtmlConverter} from "quill-delta-to-html";
import {NAvatar, NSpace} from "naive-ui";
import {Link} from '@inertiajs/vue3';

const props = defineProps({
    wall: Object
})
const threadContent = JSON.parse(props.wall.body);
const converter = new QuillDeltaToHtmlConverter(threadContent.ops, {});
const html = converter.convert();
</script>
