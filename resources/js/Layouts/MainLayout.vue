<template>

    <div class="headerMover">
        <div class="breadBoxTop"></div>
        <div class="pageContent">
            <div class="mainContainer">
                <div class="mainContent">
                    <div class="sidebar">

                    </div>
                    <slot name="main"></slot>
                </div>
            </div>
            <aside>
                <div class="sidebar">
                    <div class="sidebarWrapper">
                        <slot name="sidebar"></slot>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <div id="asd"></div>
</template>

<script>
import DiscussionList from "@/Components/DiscussionList.vue";

export default {
    name: "MainLayout",
    components: {DiscussionList},
}
</script>

<style scoped>
.mainContainer {
    width: 100%;
}
.sidebar {
    float: left;
    margin-right: 15px;
    width: 240px;
}

.sidebarWrapper {
    padding: 15px 20px;
    background: rgb(39, 39, 39);
    border-radius: 10px;
}

@media (min-width: 1025px) {
    .mainContainer {
        width: 821px;
    }
}

.pageContent {
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
}

.headerMover {
    max-width: 1076px;
    margin: 0 auto;
    position: relative;
    zoom: 1;
    box-sizing: border-box;
}

.breadBoxTop {
    width: 1076px;
    overflow: hidden;
    zoom: 1;
    position: relative;
    clear: both;
    box-sizing: border-box;
}

.breadBoxTop {
    margin: 1em auto 1em;
}

#asd {
    height: 2000px;
}
</style>
