<template>
    <MainLayout>
        <div class="text-white">
            <h1 class="text-2xl text-center my-2">CheatSheets</h1>
            <Circle>
                <template v-for="cheat in cheatSheets">
                    <SubjectCard :img="cheat.picture" :header="cheat.header" :body="cheat.body" :link="cheat.file"/>
                </template>
            </Circle>
            <h1 class="text-2xl text-center my-2">CheatSheets</h1>
            <Circle>
                <template v-for="cheat in cheatSheets">
                    <SubjectCard :img="cheat.picture" :header="cheat.header" :body="cheat.body" :link="cheat.file"/>
                </template>
            </Circle>
        </div>
    </MainLayout>
</template>

<script>

import MainLayout from "@/Layouts/MainLayout.vue";
import Circle from "@/Components/Subjects/Circle.vue";
import SubjectCard from "@/Components/Subjects/SubjectCard.vue";


export default {
    name: "Subject",
    components: {SubjectCard, Circle, MainLayout},
    props: {
        cheatSheets: Array,
    },
    data() {
        return {}
    }
}
</script>

<style scoped>

</style>
