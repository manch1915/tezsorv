<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import {QuillDeltaToHtmlConverter} from 'quill-delta-to-html'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import {Link} from "@inertiajs/vue3";
import {computed, ref} from "vue";

import AddToFavorites from "@/Components/AddToFavorites.vue";

const props = defineProps({
    auth: Object,
    thread: Object,
    hasFavorite: Boolean,
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
</script>
<template>
    <main class="min-h-screen">
        <MainHeader :auth="props.auth"/>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6">
                <h1 class="text-start text-white text-2xl mb-2">{{ thread.title }}</h1>
                <h1 class="text-start text-mainText text-sm mb-6">Հոդված {{ thread.category.name }} ->
                    {{ thread.subcategory.name }} բաժնում ստեղծվել է {{ thread.user.username }}-ի կողմից {{
                        created_at
                    }} | {{ thread.views }} դիտում</h1>
            </div>
        </section>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6">
                <div class="user__data flex justify-between">
                    <div class="flex">
                        <div class="user__avatar w-16">
                            <img class="rounded-full" :src="thread.user.profile_picture" alt="">
                        </div>
                        <Link :href="route('member', thread.user.id)"
                              class="pl-5 text-lg text-white hover:text-green-800 transition">{{ thread.user.username }}
                        </Link>
                        <div>
                            <p class="ml-5 bg-second text-sm p-2 rounded text-mainText">Հոդվածի հեղինակ</p></div>
                    </div>
                    <add-to-favorites :thread-id="thread.id" :hasFavorite="hasFavorite"/>
                </div>
                <div v-html="html"></div>
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
