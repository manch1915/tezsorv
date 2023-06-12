<script setup>
import {defineProps} from 'vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import MainHeader from '@/Components/MainHeader.vue';
import NavSidebar from '@/Components/NavSidebar.vue';
import DiscussionListItem from '@/Components/DiscussionListItem.vue';

const props = defineProps({
    auth: Object,
    favorites: Array,
});
</script>

<template>
    <main class="main-container">
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <div class="mainContainer">
                    <div class="mainContent">
                        <div class="discussionList">
                            <div class="aboveThreadList">
                                <div class="discussionListItems">
                                    <h1 class="text-xl text-white pb-2">Favorites</h1>
                                    <template v-for="thread in favorites">
                                        <DiscussionListItem
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
            <template #sidebar>
                <NavSidebar/>
            </template>
        </MainLayout>
    </main>
</template>

<style scoped>
.main-container {
    background-color: #303030;
}

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
    margin: 0 0 15px;
    box-sizing: border-box;
    width: 100%;
}
</style>
