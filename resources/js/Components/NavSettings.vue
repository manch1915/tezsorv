<template>
    <div>
        <div class="flex justify-center my-2" v-if="loading">
            <ring-loader :loading="loading"/>
        </div>
        <div class="section pt-4" v-if="menuSettings.length">
            <ol class="nodeList NodeList forums text-slate-300">
                <ul class="generalTabs">
                    <li>
                        <ul class="PersonalTabs">
                            <li class="list node personalTabmythreads personalTab forum level_2"
                                v-for="item in menuSettings" :key="item.to">
                                <a class="icon OverlayTrigger" href="#"></a>
                                <div class="nodeInfo forumNodeInfo">
                                    <div class="nodeText">
                                        <h3 class="nodeTitle">
                                            <Link :href="route(item.to)" class="flex items-center content-center">
                                                <span class="personalTabTitle">{{ item.label }}</span>
                                            </Link>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </ol>
        </div>
    </div>
</template>


<script setup>
import RingLoader from "vue-spinner/src/RingLoader.vue";
import menuSettings from "@/menuSettings";
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.CreateThreadButton {
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
    display: block;
    color: #f5f5f5;
    background-color: rgb(34, 142, 93);
}

.nodeList .generalTabs {
    margin: 0 0 10px;
}

.nodeList .node.current > .nodeInfo > .nodeText > .nodeTitle, .nodeList .node .current > div > .nodeTitle {
    color: rgb(0, 186, 120);
}

.node .nodeText h3.nodeTitle {
    padding: 0px 12px;
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

.categoryText > .nodeTitle {
    font-weight: bold;
    font-size: 14px;
    color: rgb(148, 148, 148);
}

.node h3.nodeTitle > a:hover {
    background: rgb(45, 45, 45);
    color: inherit;
}
</style>
