<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import {QuillDeltaToHtmlConverter} from 'quill-delta-to-html'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import {Link, router} from "@inertiajs/vue3";
import {computed, ref} from "vue";
import {mdiSend, mdiEyeOutline} from '@mdi/js';
import AddToFavorites from "@/Components/AddToFavorites.vue";
import {NAvatar, NButton, NPopover, NSpace} from "naive-ui";
import NeoEditor from "@/Components/NeoEditor.vue";
import BaseIcon from "@/Components/BaseIcon.vue";
import axios from "axios";
import ThreadComment from "@/Components/ThreadComment.vue";

const props = defineProps({
    auth: Object,
    thread: Object,
    hasFavorite: Boolean,
    comments: Object
})
const months = [
    "Հունվարի",
    "Փետրվարի",
    "Մարտի",
    "Ապրիլի",
    "Մայիսի",
    "Հունիսի",
    "Հուլիսի",
    "Օգոստոսի",
    "Սեպտեմբերի",
    "Հոկտեմբերի",
    "Նոյեմբերի",
    "Դեկտեմբերի"
]
const created_at = computed(() => {
    const d = new Date(props.thread.created_at)
    const month = months[d.getMonth()]
    const day = d.getDate()
    const year = d.getFullYear()

    return `${month} ${day} ${year}`
})
const threadContent = JSON.parse(props.thread.body);
const converter = new QuillDeltaToHtmlConverter(threadContent.ops, {});
const html = converter.convert();

const body = ref('');
const comment_id = ref(null);

const addComment = async () => {
    try {
        await axios.post(route('comment.store'), {
            post_id: props.thread.id,
            body: JSON.stringify(body.value),
            comment_id: comment_id.value && comment_id.value.reply_id ? comment_id.value.reply_id : null
        }).then(res => {
            body.value = null
            comment_id.value = null
            router.reload();
        })
    } catch (error) {
        console.error(error)
    }
}

const hasNestedReplies = (comment) => {
    return comment.replies && comment.replies.length > 0;
};

const getRecursiveRepliesComputed = computed(() => (replies) => {
    if (!replies) {
        return [];
    }

    const recursiveReplies = [];

    const processReplies = (replies) => {
        replies.forEach(reply => {
            recursiveReplies.push(reply);
            if (reply.replies && reply.replies.length > 0) {
                processReplies(reply.replies);
            }
        });
    };

    processReplies(replies);

    return recursiveReplies;
});

const getRecursiveReplies = getRecursiveRepliesComputed.value;
</script>
<template>
    <main class="min-h-screen pb-6">
        <MainHeader :auth="props.auth"/>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6">
                <h1 class="text-start text-white text-2xl mb-2">{{ thread.title }}</h1>
                <h1 class="text-start text-mainText text-sm mb-6">
                    <n-space vertical>
                        <n-space>
                            <span class="bg-second rounded p-1"> {{ thread.category.name }}</span>
                            <span class="bg-second rounded p-1">{{ thread.subcategory.name }}</span>
                            <span class="bg-second rounded p-1">{{ created_at }}</span>
                        </n-space>
                        <div class="bg-second rounded p-1 flex items-center gap-x-1 w-10">{{ thread.views }}
                            <BaseIcon :path="mdiEyeOutline" size="20"/>
                        </div>
                    </n-space>
                </h1>
            </div>
        </section>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6">
                <div class="user__data flex justify-between">
                    <div class="flex items-center">
                        <div class="user__avatar w-16">
                            <img class="rounded-full" :src="thread.user.profile_picture" alt="">
                        </div>
                        <n-popover trigger="hover">
                            <template #trigger>
                                <Link :href="route('member', thread.user.username)"
                                      class="pl-5 text-lg text-white hover:text-green-800 transition">
                                    {{ thread.user.username }}
                                </Link>
                            </template>
                            <span>Հոդվածի հեղինակ</span>
                        </n-popover>
                    </div>
                    <n-popover trigger="hover">
                        <template #trigger>
                            <add-to-favorites :thread-id="thread.id" :hasFavorite="hasFavorite"/>
                        </template>
                        <span>Պահպանել հոդվածը</span>
                    </n-popover>
                </div>
                <div v-html="html" class="text-white"></div>
            </div>
        </section>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6 text-white">
                <n-space vertical>
                    <template v-for="comment in props.comments" :key="comment.id">
                        <thread-comment :comment="comment" v-model="comment_id"/>
                        <template v-if="hasNestedReplies(comment)">
                            <template v-for="replies in getRecursiveReplies(comment.replies)">
                                <thread-comment :comment="replies" v-model="comment_id" class="ml-4"/>
                            </template>
                        </template>
                    </template>
                </n-space>
                <div class="flex flex-col mt-4">
                    <div v-if="comment_id" class="mb-4">
                        reply to <span class="text-purple-900">{{ comment_id.replyUsername }}</span>
                    </div>
                    <n-space class="items-end" :wrap="false">
                        <n-avatar class="md:block hidden" :src="auth.user.profile_picture" round size="large"/>
                        <div class="w-full">
                            <NeoEditor v-model="body"/>
                        </div>
                        <n-button quaternary type="primary" @click.prevent="addComment">
                            <BaseIcon :path="mdiSend"/>
                        </n-button>
                    </n-space>
                </div>
            </div>
        </section>
    </main>
</template>

<style>

main {
    background-color: #303030;
}

section {
    max-width: 1076px;
}

.headerMover {
    max-width: 1076px;
    margin: 20px auto;
    position: relative;
    zoom: 1;
    box-sizing: border-box;
}

@media screen and (max-width: 768px) {
    .headerMover {
        padding-top: 2rem;
    }
}

.user__avatar {

}
</style>
