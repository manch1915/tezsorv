<template>
    <main>
        <MainHeader :auth="auth"/>
        <div class="headerMover">
            <div class="breadBoxTop"></div>
            <slot/>
        </div>
        <div id="asd"></div>
    </main>
</template>

<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import {usePage} from "@inertiajs/vue3";

const page = usePage()
const auth = page.props.auth;
</script>

<style scoped>
.sidebar {
    float: left;
    margin-right: 15px;
    width: 240px;
}

main {
    background-color: #303030;
}

.sidebarWrapper {
    padding: 15px 20px;
    background: rgb(39, 39, 39);
    border-radius: 10px;
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

@media only screen and (max-width: 1122px) {
    .pageContent {
        display: flex;
        flex-direction: column-reverse;
        justify-content: center;
        align-items: center;
        align-content: center;
    }

    .sidebar {
        float: none;
        margin-right: 15px;
        width: 100%;
    }

    .sidebar .sidebarWrapper, aside {
        width: 100%;

    }

}
</style>
