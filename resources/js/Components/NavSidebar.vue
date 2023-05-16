<script setup>
import SideBarListItem from "@/Components/SideBarListItem.vue";
import {Link} from "@inertiajs/vue3";

import { useMainStore } from "@/stores/main";
import {computed, onMounted, reactive, ref} from 'vue';
import RingLoader from "vue-spinner/src/RingLoader.vue";
import TransitionExpand from "@/Components/TransitionExpand.vue";

const state = reactive({
    loading: false,
});

const openList = ref(true);

if (window.innerWidth < 1122){
    openList.value = false
}

const store = useMainStore();
onMounted(async () => {
    state.loading = true;
    await store.fetchSlideList();
    state.loading = false;
});

const categories = computed(() => store.slideList);


</script>
<template>
    <div class="section flex flex-col gap-y-3">
        <Link class="CreateThreadButton buttons button primary full callToAction" :href="route('thread.new')">Создать тему</Link>
        <a @click="openList = !openList" class="hidden OpenList buttons button  full callToAction" href="#">Открыть раздели</a>
    </div>
    <div class="flex justify-center my-2" v-if="state.loading">
        <ring-loader :loading="state.loading"/>
    </div>
    <TransitionExpand>
    <div v-show="openList" class="section pt-4" v-if="categories[0]">
        <ol class="nodeList NodeList forums text-slate-300">
            <ul class="generalTabs"  >
                <li class="list node node0 forum level_2 current">
                    <div class="nodeInfo forumNodeInfo">
                        <div class="nodeText">
                            <h3 class="nodeTitle">
                                <a href="#">Все обсуждения</a>
                            </h3>
                        </div>
                    </div>
                    <span class="ForumSearch" tabindex="0"></span>
                </li>
                <li class="mt-2">
                    <ul class="PersonalTabs">
                        <li class="list node personalTabmythreads personalTab forum level_2">
                            <a class="icon OverlayTrigger" href="#"></a>
                            <div class="nodeInfo forumNodeInfo">
                                <div class="nodeText">
                                    <h3 class="nodeTitle">
                                        <a href="#">
                                            <span class="personalTabTitle"> Мои темы </span>
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <li id="103" class="node category level_1">
                <ol class="nodeList">
                    <SideBarListItem :list="categories[0]"/>
                    <SideBarListItem :list="categories[1]"/>
                    <SideBarListItem :list="categories[2]"/>
                    <SideBarListItem :list="categories[3]"/>
                    <SideBarListItem :list="categories[4]"/>
                    <SideBarListItem :list="categories[5]"/>
                    <SideBarListItem :list="categories[6]"/>
                    <SideBarListItem :list="categories[7]"/>
                    <SideBarListItem :list="categories[8]"/>
                </ol>
            </li>
            <li id="84" class="node category level_1">
                <div class="categoryNodeInfo categoryStrip">
                    <div class="categoryText">
                        <h3 class="nodeTitle">Общий раздел</h3>
                    </div>
                </div>
                <ol class="nodeList">
                    <SideBarListItem :list="categories[9]"/>
                    <SideBarListItem :list="categories[10]"/>
                    <SideBarListItem :list="categories[11]"/>
                    <SideBarListItem :list="categories[12]"/>
                    <SideBarListItem :list="categories[13]"/>
                </ol>
            </li>
        </ol>
    </div>
    </TransitionExpand>
</template>



<style scoped>
.buttons{
    font-size: 13px;
    text-decoration: none;
    background-position: center;
    padding: 0 15px;
    border-style: none;
    border-radius: 6px;
    font-style: normal;
    text-align: center;
    line-height: 34px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.8s;
    overflow: hidden;
    height: 34px;
    width: 100%;
}
.CreateThreadButton {
    color: #f5f5f5;
    background-color: rgb(34, 142, 93);
}
.OpenList {
    color: #f5f5f5;
    background-color: rgb(134, 142, 139);
}

.nodeList .generalTabs {
    margin: 0 0 10px;
}

.nodeList .node.current > .nodeInfo > .nodeText > .nodeTitle, .nodeList .node .current > div > .nodeTitle {
    color: rgb(0, 186, 120);
}

.node .nodeText h3.nodeTitle {
    padding: 0 12px;
    margin: 0 -12px;
    border-radius: 6px;
    transition: background .2s;
}

.nodeList .node.current > .nodeInfo > .nodeText > .nodeTitle > a, .nodeList .node .current > div > .nodeTitle > a {
    background: rgb(45, 45, 45);
    color: rgb(0, 186, 120);
    font-weight: 600;
}

.node .nodeText .nodeTitle a {
    padding: 0 12px;
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

.categoryText > .nodeTitle {
    font-weight: bold;
    font-size: 14px;
    color: rgb(148, 148, 148);
}

.node h3.nodeTitle > a:hover {
    background: rgb(45, 45, 45);
    color: inherit;
}

@media only screen and (max-width: 1122px)  {
    .OpenList{
        display: block;
    }
}
</style>
