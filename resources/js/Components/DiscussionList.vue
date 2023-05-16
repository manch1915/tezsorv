<script setup>
import DiscussionListItem from "@/Components/DiscussionListItem.vue";
import {useMainStore} from "@/stores/main";
import {computed, onMounted, ref} from "vue";
import {router} from "@inertiajs/vue3"


const loading = ref(false);


const url = router.page.url.split('/')

let category = parseInt(url[3]);
let subcategory = parseInt(url[4]);

const store = useMainStore();
onMounted(async () => {
    loading.value = true;
    await store.fetchThreadList(category,subcategory);
    loading.value = false;
});

const threads = computed(() => store.threadList);

</script>
<template>
    <div class="mainContainer lg:mr-2 mr-0 lg:mt-0 mt-4">
        <div class="mainContent">
            <div class="discussionList">
                <div class="aboveThreadList">
                    <div class="ads"></div>
                    <div class="discussionListItems">
                        <template v-for="thread in threads">
                        <DiscussionListItem
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
@media (min-width: 1025px) {

}
.mainContainer {
    width: 100%;
}
.mainContent {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}
.discussionList {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}

.aboveThreadList {
    margin: 0 0 15px;
    box-sizing: border-box;
    width: 100%;
}
</style>
