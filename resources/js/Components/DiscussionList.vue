<script setup>
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";
import axios from 'axios';
import DiscussionListItem from '@/Components/DiscussionListItem.vue';
import {NPagination, NConfigProvider, darkTheme, NSpace} from 'naive-ui';
import {useAutoAnimate} from '@formkit/auto-animate/vue';

// Get page from router and split to get category and subcategory
const {page} = router;
const [category, subcategory] = page.url.split('/').slice(3).reduce((acc, str, index) => [...acc, parseInt(str)], []);

// Create Reactive variables for components and API results
const threads = ref({});
const threadCategory = ref('');
const pageRef = ref(1);
let loading = ref(false);
const [parent] = useAutoAnimate({duration: 100});

async function fetchThreadList() {
    let params = [category, subcategory].filter(Boolean);
    let url = route('threadList', params);

    if (pageRef.value) {
        url = new URL(url.toString());
        url.searchParams.append('page', pageRef.value);
        url = url.toString();
    }
    try {
        loading.value = true;
        const response = await axios.get(url);
        threads.value = response.data['data'];
        threadCategory.value = response.data['category'];
    } catch (error) {
        console.error(error);
    } finally {
        loading.value = false;
    }
}

watch([pageRef, category, subcategory], fetchThreadList, {immediate: true});
</script>

<template>
    <div class="mainContainer lg:mr-2 mr-0 lg:mt-0 mt-4">
        <div class="mainContent">
            <div class="discussionList">
                <n-space justify="center">
                    <n-config-provider :theme="darkTheme">
                        <n-pagination v-model:page="pageRef" :page-count="threads.last_page"/>
                    </n-config-provider>
                </n-space>
                <div class="aboveThreadList">
                    <div class="ads"></div>
                    <div class="discussionListItems" ref="parent">
                        <h1 class="text-xl text-white pb-2">{{ threadCategory }}</h1>
                        <template v-if="!loading">
                            <DiscussionListItem
                                v-for="thread in threads.data"
                                :key="thread.id"
                                :user-avatar="thread.user.profile_picture"
                                :created_at="thread.created_at"
                                :title="thread.title"
                                :username="thread.user.username"
                                :user_id="thread.user.id"
                                :id="thread.id"
                            />
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.mainContainer {
    width: 100%;
}

.mainContent, .discussionList {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}
@media screen and (max-width: 768px) {
    .discussionList {
        padding: 15px 0;
    }
}
.aboveThreadList {
    margin-bottom: 15px;
    box-sizing: border-box;
    width: 100%;
}
</style>
