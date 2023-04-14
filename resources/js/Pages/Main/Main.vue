<template>
    <main>
        <MainHeader :auth="auth"/>
        <div class="headerMover">
            <div class="breadBoxTop"></div>
            <Sidebar/>
        </div>
        <div id="asd"></div>
    </main>
</template>

<script>
import MainHeader from "@/Components/MainHeader.vue";
import Sidebar from "@/Components/Sidebar.vue";

export default {
    name: "Main",
    components: {MainHeader, Sidebar},
    props: {
        auth: Object
    }
}
</script>

<style scoped>
main{
    background-color: #303030;
}
.headerMover{
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
#asd{
    height: 2000px;
}
</style>
