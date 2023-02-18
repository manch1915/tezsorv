<template>
    <MainLayout>
            <section class="grid grid-cols-2 dark:text-gray-900 text-white items-center">
                <AnimetedText :texts="header"/>
                <BookModel/>
            </section>
            <section class="grid grid-cols-2 dark:text-gray-900 text-white items-center">
                <AsciiModel/>
                <AnimetedText :texts="fizika">
                    Ֆիզիկայի, Քիմիայի, Հանրահաշվի, Երկրաչափության, Ծրագրաորման
                </AnimetedText>
            </section>
            <div class="grid lg:grid-cols-3 grid-cols-1">
                <NameCard number="01" head="Ֆիզիկա" link="ADSASD" text="Ռեսուրսներ կապված Ֆիզիկաի հետ"/>
                <NameCard number="02" head="Աշխարհագրություն" link="ADSASD" text="Ռեսուրսներ կապված Աշխարհագրության հետ"/>
                <NameCard number="03" head="Մաթեմատիկա" link="ADSASD" text="Ռեսուրսներ կապված Մաթեմատիկաի հետ"/>
            </div>
    </MainLayout>
</template>

<script>

import BookModel from "@/Components/BookModel.vue";
import AnimetedText from "@/Components/AnimetedText.vue";
import AsciiModel from "@/Components/AsciiModel.vue";
import NameCard from "@/Components/NameCard.vue";
import MainLayout from "@/Layouts/MainLayout.vue";


export default {
    name: "Home",
    components: {MainLayout, NameCard, AsciiModel, AnimetedText, BookModel},
    data(){
        return{
            header: ['Ամենամեծ ռեսուրսային համակարգը Հայաստանում:)', 'The first rule about fight club is...', '.... . .-.. .--.'],
            fizika: ['բազում ռեսուրսներ', 'բազմաթիվ ռեսուրսներ', 'թյուր ռեսուրսներ', 'բազմաքանակ ռեսուրսներ', 'բյուրավոր ռեսուրսներ', 'մեծաթիվ ռեսուրսներ', 'մեծաքանակ ռեսուրսներ'],
        }
    }
}
</script>

<style scoped>

</style>
