<template>
    <div class="border-b-[1px] border-second">
        <n-space>
            <Link :href="route('member', props.comment.user.username)">
                <n-avatar small :src="props.comment.user.profile_picture" class="hover:invert transition"/>
                <p class="text-mainText">{{ props.comment.user.username }}</p>
            </Link>
            <div v-html="html"></div>
        </n-space>
        <div class="flex justify-end">
            <base-icon @click.prevent="reply" :path="mdiReply" size="20"
                       class="cursor-pointer hover:text-green-900 transition"/>
        </div>
    </div>
</template>

<script setup>
import {QuillDeltaToHtmlConverter} from "quill-delta-to-html";
import {NAvatar, NSpace} from "naive-ui";
import {Link} from '@inertiajs/vue3';
import BaseIcon from "@/Components/BaseIcon.vue";
import {mdiReply} from '@mdi/js';
import {ref, watch} from "vue";

const props = defineProps({
    comment: Object
})
const threadContent = JSON.parse(props.comment.body);
const converter = new QuillDeltaToHtmlConverter(threadContent.ops, {});
const html = converter.convert();

const commentReply = ref(null);
const reply = () => {
    commentReply.value = {reply_id: props.comment.id, replyUsername: props.comment.user.username}
}
const emits = defineEmits(['update:modelValue']);

watch(commentReply, (newValue) => {
    emits('update:modelValue', newValue);
});


</script>
