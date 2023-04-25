<template>
    <section>
    <div class="mainContainer">
        <div class="mainContent">
            <div class="discussionList">
                <div class="aboveThreadList">
                    <div class="ads"></div>
                    <div class="discussionListItems">
                        <DiscussionListItem/>
                        <DiscussionListItem/>
                        <DiscussionListItem/>
                        <DiscussionListItem/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
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
    .mainContainer {
        width: 821px;
    }
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
