<template>
    <li class="list node node9 forum level_2 ">
        <div class="nodeInfo forumNodeInfo">
            <div @click.prevent="active = !active" class="nodeText">
                <h3 class="nodeTitle flex">
                    <a href="#" v-if="list">
                        {{ list['name'] }}
                    </a>
                    <ChevronDownIcon :class="active ? 'w-6 rotate-180 transition cursor-pointer' : 'w-6 rotate-0 transition cursor-pointer'"/>
                </h3>
            </div>
            <TransitionExpand>
                <ol v-if="active" class="subForumList">
                <li v-for="item in list.subcategories" class="node node766 forum level-n">
                    <div class="unread">
                        <h4 class="nodeTitle">
                            <a class="menuRow" :href="item.id">{{ item.name }}</a>
                        </h4>
                    </div>
                </li>
            </ol>
            </TransitionExpand>
        </div>
    </li>
</template>

<script>
import { ChevronDownIcon  } from '@heroicons/vue/24/outline'
import TransitionExpand from "@/Components/TransitionExpand.vue";
export default {
    name: "SideBarListItem",
    components: {TransitionExpand, ChevronDownIcon},
    data(){
        return{
            active: false,
        }
    },
    props: {
        list: Object,
    }
}
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
    height: 0px;
    overflow: hidden;
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
