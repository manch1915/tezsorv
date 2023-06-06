<template>
    <li class="list node node9 forum level_2 ">
        <div class="nodeInfo forumNodeInfo">
            <div @click.prevent="active = !active" class="nodeText">
                <h3 class="nodeTitle flex">
                    <a href="#" v-if="list">
                        {{ props.list['name'] }}
                    </a>
                    <ChevronDownIcon :class="active ? 'w-6 rotate-180 transition cursor-pointer' : 'w-6 rotate-0 transition cursor-pointer'"/>
                </h3>
            </div>
            <div ref="parent">
                <ol v-if="active" class="subForumList">
                <li v-for="item in props.list.subcategories" class="node node766 forum level-n">
                    <div class="unread">
                        <h4 class="nodeTitle">
                            <Link class="menuRow" :href="route('thread.showThreads', [item.category_id,item.id] )">{{ item.name }}</Link>
                        </h4>
                    </div>
                </li>
            </ol>
            </div>
        </div>
    </li>
</template>

<script setup>
import { ChevronDownIcon  } from '@heroicons/vue/24/outline'
import { useAutoAnimate } from '@formkit/auto-animate/vue'

import {Link} from "@inertiajs/vue3"
import {ref} from "vue";

const props = defineProps({
    list: Object,
})
const active = ref(false)
const [parent] = useAutoAnimate({
    duration: 10
})
</script>

<style scoped>
.node .nodeText h3.nodeTitle {
    padding: 0px 12px;
    margin: 0 -12px;
    border-radius: 6px;
    transition: background .2s;
}
.node .nodeText .nodeTitle a {
    padding: 0px 12px;
    border-radius: 6px;
    line-height: 36px;
    overflow: hidden;
    display: block;
    transition: background .2s;
    white-space: nowrap;
    text-overflow: ellipsis;
    width: 100%;
    height: 36px;
}
.node h3.nodeTitle>a:hover {
    background: rgb(45, 45, 45);
    color: inherit;
}
.subForumList{
    margin: 5px 0 5px 32px;
}
.node .subForumList li {
    margin: 0 0 12px;
}
.unread .nodeTitle .menuRow{
    font-size: 14px;
    transition: color .5s;
}
.unread .nodeTitle .menuRow:hover{
    color: #6248ff;
    font-size: 14px;
}
</style>
