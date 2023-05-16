<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import List from '@editorjs/list';
import ImageTool from '@editorjs/image';
import LinkTool from '@editorjs/link';
import EditorJS from '@editorjs/editorjs';
import Header from "@editorjs/header";
import {Link} from "@inertiajs/vue3";
import {computed} from "vue";

const props = defineProps({
    auth: Object,
    thread: Object,
})
const months =  [
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

const editor = new EditorJS({
    holder: 'editorjs',
    readOnly: true,
    data: JSON.parse(props.thread.body),
    tools: {
        paragraph: {
            config: {
                placeholder: 'Tell your story...'
            }
        },
        header: {
            class: Header,
            config: {
                placeholder: 'Enter a header',
                levels: [2, 3, 4],
                defaultLevel: 3
            }
        },
        list: {
            class: List,
            inlineToolbar: true,
        },
        image: {
            class: ImageTool,
            config: {
                endpoints: {
                    byFile: 'http://localhost:8000/main/thread/uploadFile', // Your backend file uploader endpoint
                }
            }
        },
        linkTool: {
            class: LinkTool,
            config: {
                endpoint: 'http://localhost:8000/main/thread/fetchUrl', // Your backend endpoint for url data fetching,
            }
        }

    },
},)
</script>
<template>
    <main>
        <MainHeader :auth="props.auth"/>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6">
                <h1 class="text-start text-white text-2xl mb-2">{{ thread.title}}</h1>
                <h1 class="text-start text-mainText text-sm mb-6">Հոդված {{ thread.category.name}} -> {{ thread.subcategory.name}} բաժնում ստեղծվել է {{ thread.user.username }}-ի կողմից {{ created_at }} | {{thread.views}} դիտում</h1>
            </div>
        </section>
        <section class="headerMover bg-mine-second rounded-lg">
            <div class="w-full p-6">
                <div class="user__data flex">
                    <div class="user__avatar w-16">
                        <img class="rounded-full" :src="thread.user.profile_picture" alt="">
                    </div>
                    <Link :href="route('member', thread.user.id)" class="pl-5 text-lg text-white hover:text-green-800 transition">{{ thread.user.username }}</Link>
                    <div>
                    <p class="ml-5 bg-second text-sm p-2 rounded text-mainText">Հոդվածի հեղինակ</p></div>
                </div>
                <div id="editorjs" class="text-white"></div>
            </div>
        </section>
        <div class="h-6"></div>
    </main>
</template>

<style>

main{
    background-color: #303030;
}
section{
    max-width: 1076px;
}
.headerMover {
    max-width: 1076px;
    margin: 20px auto;
    position: relative;
    zoom: 1;
    box-sizing: border-box;
}
.user__avatar{

}
</style>
