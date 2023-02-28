<template>
    <MainLayout>
            <section class="grid lg:grid-cols-2 grid-cols-1 justify-items-center dark:text-gray-900 text-white items-center">
                <AnimetedText :texts="header"/>
                <BookModel/>
            </section>
            <section class="grid lg:grid-cols-2 grid-cols-1 justify-items-center dark:text-gray-900 text-white items-center">
                <AsciiModel/>
                <div class="font-bold text-3xl">  Ֆիզիկայի, Քիմիայի, Հանրահաշվի, Երկրաչափության, Ծրագրաորման թյուր ռեսուրսներ</div>
            </section>
            <h1 class="font-bold text-3xl text-white text-center mt-5">Ի՞նչն է ձեզ հետաքրքիր</h1>
            <div class="grid lg:grid-cols-3 grid-cols-1">
                <NameCard number="01" head="Ֆիզիկա" link="ADSASD" text="Ռեսուրսներ կապված Ֆիզիկաի հետ"/>
                <NameCard number="02" head="Աշխարհագրություն" link="ADSASD" text="Ռեսուրսներ կապված Աշխարհագրության հետ"/>
                <NameCard number="03" head="Մաթեմատիկա" link="ADSASD" text="Ռեսուրսներ կապված Մաթեմատիկաի հետ"/>
            </div>
            <Statistics/>
    </MainLayout>
</template>

<script>

import BookModel from "@/Components/BookModel.vue";
import AnimetedText from "@/Components/AnimetedText.vue";
import AsciiModel from "@/Components/AsciiModel.vue";
import NameCard from "@/Components/NameCard.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import Statistics from "@/Components/Statistics.vue";
import axios from 'axios';


export default {
    name: "Home",
    components: {Statistics, MainLayout, NameCard, AsciiModel, AnimetedText, BookModel},
    props:{
      user: Object,
    },
    data(){
        return{
            header: ['Ամենամեծ ռեսուրսային համակարգը Հայաստանում:)', 'The first rule about fight club is...', '.... . .-.. .--.'],

       }
    },
    mounted() {

    }
}
</script>

<style scoped>

</style>
