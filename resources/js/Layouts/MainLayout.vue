<template>
    <main class="bg-gray-800 dark:bg-white">
        <div class="mx-auto max-w-7xl ">
            <Header/>
             <slot/>
            <Footer/>
        </div>
    </main>
</template>

<script>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
export default {
    name: "MainLayout",
    components: {Footer, Header},
}
</script>

<style scoped>

</style>
