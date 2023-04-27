<template>
    <div class="mainContainer lg:mr-2 mr-0 lg:mt-0 mt-4">
        <div class="mainContent">
            <div class="discussionList">
                <div class="aboveThreadList">
                    <div class="ads"></div>
                    <div class="discussionListItems">
                        <DiscussionListItem/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DiscussionListItem from "@/Components/DiscussionListItem.vue";

export default {
    name: "DiscussionList",
    components: {DiscussionListItem}
}
</script>

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
