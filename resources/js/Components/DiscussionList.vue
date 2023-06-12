<script setup>
import DiscussionListItem from "@/Components/DiscussionListItem.vue";
import {useMainStore} from "@/stores/main";
import {computed, onMounted, ref} from "vue";
import {router} from "@inertiajs/vue3";

const loading = ref(false);

const {page} = router;
const [category, subcategory] = page.url.split('/').slice(3).map(parseInt);

const store = useMainStore();
onMounted(async () => {
    loading.value = true;
    await store.fetchThreadList(category, subcategory);
    loading.value = false;
});

const threads = computed(() => store.threadList);
const threadCategory = computed(() => store.threadCategory);
</script>

<template>
    <div class="mainContainer lg:mr-2 mr-0 lg:mt-0 mt-4">
        <div class="mainContent">
            <div class="discussionList">
                <div class="aboveThreadList">
                    <div class="ads"></div>
                    <div class="discussionListItems">
                        <h1 class="text-xl text-white pb-2">{{ threadCategory }}</h1>
                        <template v-if="!loading">
                            <DiscussionListItem
                                v-for="thread in threads"
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

.mainContent,
.discussionList {
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
