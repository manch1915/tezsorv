<template>
    <main class="bg-main">
        <section class="bg-lines">
            <div class="mx-auto max-w-7xl ">
                <Header/>
                <div class="py-5">
                    <div class="heading-fade-2lines text-2xl md:text-6xl">Հանրահաշվի, Քիմիայի, <span
                        class="text-highlight-purple">Ֆիզիկայի</span>, Երկրաչափության, Ծրագրաորման <span
                        class="text-highlight-orange">թյուր</span> ռեսուրսներ
                    </div>
                    <p class="text-size-large my-5 text-lg md:text-2xl p-2">Ինձ վտանգ չի սպառնում, Սքայլեր։ Ես եմ վտանգը։</p>
                    <Link :href="route('catalog')" class="glow-button">Կատալոգ</Link>
                </div>
            </div>
        </section>
        <div class="mx-auto max-w-7xl">
            <MainCatalogView text="Ֆիզիկա" image="Albert.png" side="left"/>
            <MainCatalogView text="Քիմիա" image="Heisenberg.png" side="right"/>
            <MainCatalogView text="Ծրագրավորում" image="Eliot.png" side="left"/>
                <div class="flex justify-center glow overflow-hidden">
                    <BaseIcon class="star_animation" :path="mdiStar" size="300" w="w-auto" h="h-auto" fill="yellow"/>
                </div>
            <Footer/>
        </div>
    </main>
</template>

<script setup>
import Footer from "@/Components/Footer.vue";
import {Link} from "@inertiajs/vue3";
import Header from "@/Components/Header.vue";
import HomeCardImg from "@/Components/HomeCardImg.vue";
import { mdiStar } from '@mdi/js';
import BaseIcon from "@/Components/BaseIcon.vue";
import MainCatalogView from "@/Components/MainCatalogView.vue";
const props = defineProps({
    user: Object,
})
</script>

<style scoped>

.bg-lines {
    position: relative;
    background-image: linear-gradient(180deg, #161616, #161616 13%, rgba(22, 22, 22, 0) 89%, #161616), url(https://assets.website-files.com/63f5d36e1bfb159570f6408c/63feed1d49df0b0ba2f037d8_Grid.svg);
    background-position: 0 0, 50% 50%;
    background-size: auto, auto;
    background-clip: padding-box;
    -webkit-text-fill-color: inherit;
}
@-moz-keyframes spin {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
    from {transform:rotate(0deg);}
    to {transform:rotate(360deg);}
}
.glow {
    filter: drop-shadow(0 0 20px #ffdc00);
}
.star_animation{
    animation-name: spin;
    animation-duration: 16s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
.heading-fade-2lines {
    -webkit-text-size-adjust: 100%;
    color: #f1f0ee;
    text-align: center;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    line-height: 1.1;
    font-weight: 400;
    letter-spacing: -.04em;
    display: inline-block;
    background-image: linear-gradient(114deg, rgba(216, 213, 209, .6), #f1f0ee 44%, rgba(216, 213, 209, .6));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-highlight-orange {
    -webkit-text-size-adjust: 100%;
    color: #f1f0ee;
    text-align: center;
    font-weight: 400;
    letter-spacing: -.04em;
    -webkit-text-fill-color: transparent;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    padding-right: .25rem;
    padding-left: .25rem;
    border-left: 4px solid #ff7448;
    border-radius: 0;
    background-image: linear-gradient(90deg, rgba(255, 116, 72, .2), rgba(255, 116, 71, .05));
    line-height: 1;
}

.text-highlight-purple {
    -webkit-text-size-adjust: 100%;
    color: #f1f0ee;
    text-align: center;
    font-weight: 400;
    letter-spacing: -.04em;
    -webkit-text-fill-color: transparent;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    padding-right: .25rem;
    padding-left: .25rem;
    border-left: 4px solid #6248ff;
    border-radius: 0;
    background-image: linear-gradient(90deg, rgba(98, 72, 255, .2), rgba(98, 72, 255, .05));
    line-height: 1;
}

.text-size-large {
    -webkit-text-size-adjust: 100%;
    font-family: Relative, sans-serif;
    line-height: 1.5;
    font-weight: 400;
    -webkit-text-fill-color: inherit;
    text-align: center;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
    color: rgba(216, 213, 209, .2);
}

.glow-button {
    width: 10rem;
    display: block;
    margin: 20px auto;
    -webkit-text-size-adjust: 100%;
    line-height: 1.5;
    -webkit-text-fill-color: inherit;
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    text-decoration: inherit;
    max-width: 100%;
    border: 1px solid #d8d5d1;
    border-radius: .6rem;
    background-color: #d8d5d1;
    transition: .5s;
    font-family: Relative, sans-serif;
    color: #161616;
    font-size: 1.125rem;
    font-weight: 500;
    text-align: center;
    padding: .75rem 1.5rem .75rem 1.3rem;
    grid-column-gap: 0.75rem;
    grid-row-gap: 0.75rem;
}

.glow-button:hover {
    border-color: #fff;
    background-color: #fff;
    box-shadow: 0 0 16px 0 hsla(0, 0%, 100%, .5);
}
</style>
