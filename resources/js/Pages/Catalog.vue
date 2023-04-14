<template>
    <main class="bg-main">
        <section class="bg-lines">
            <div class="mx-auto max-w-7xl ">
                <Header/>

            </div>
        </section>
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-5 p-2 gap-y-3">
                <HomeCardImg image="images/fizika.png" :button-href="route('login')" button-text="Ֆիզիկա"/>
                <HomeCardImg image="images/prog.png" :button-href="route('login')" button-text="Ծրագրավորում"/>
                <HomeCardImg image="images/qimia.png"  :button-href="route('login')" button-text="Քիմիյա"/>
                <HomeCardImg image="images/pilisopayutyun.png" :button-href="route('login')" button-text="Փիլիսոփայություն"/>
                <HomeCardImg image="images/hanrahashiv.png" :button-href="route('login')" button-text="Հանրահաշիվ"/>
                <HomeCardImg image="images/erkrachaputyun.png"  :button-href="route('login')" button-text="Երկրաչափություն"/>
            </div>
            <Footer/>
        </div>
    </main>
</template>

<script>
import HomeCardImg from "@/Components/HomeCardImg.vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";

export default {
    name: "Catalog",
    components: {HomeCardImg,Footer,Header}
}
</script>

<style scoped>

</style>
