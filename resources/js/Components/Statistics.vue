<template>

    <div class="w-full dark:bg-white border dark:border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700">
        <ul class="grid sm:grid-cols-3 grid-cols-1 text-sm font-medium text-center dark:text-gray-500 divide-x dark:divide-gray-200 rounded-lg  divide-gray-600 text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
            <li class="w-full">
                <button  @click.prevent="open('statistics')" id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg dark:bg-gray-50 dark:hover:bg-gray-100 focus:outline-none bg-gray-700 hover:bg-gray-600">Statistics</button>
            </li>
            <li class="w-full">
                <button  @click.prevent="open('services')" id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 dark:bg-gray-50 dark:hover:bg-gray-100 focus:outline-none bg-gray-700 hover:bg-gray-600">Services</button>
            </li>
            <li class="w-full">
                <button  @click.prevent="open('faq')" id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg dark:bg-gray-50 dark:hover:bg-gray-100 focus:outline-none bg-gray-700 hover:bg-gray-600">FAQ</button>
            </li>
        </ul>
        <div id="fullWidthTabContent" class="border-t dark:border-gray-200 border-gray-600">
            <div class=" p-4 dark:bg-white rounded-lg md:p-8 bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab" v-show="statistics">
                <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto dark:text-gray-900 sm:grid-cols-3 xl:grid-cols-6 text-white sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                        <dd class="font-light dark:text-gray-500 text-gray-400">Developers</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                        <dd class="font-light dark:text-gray-500 text-gray-400">Public repositories</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                        <dd class="font-light dark:text-gray-500 text-gray-400">Open source projects</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">1B+</dt>
                        <dd class="font-light dark:text-gray-500 text-gray-400">Contributors</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">90+</dt>
                        <dd class="font-light dark:text-gray-500 text-gray-400">Top Forbes companies</dd>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <dt class="mb-2 text-3xl font-extrabold">4M+</dt>
                        <dd class="font-light dark:text-gray-500 text-gray-400">Organizations</dd>
                    </div>
                </dl>
            </div>
            <div class="p-4 dark:bg-white rounded-lg md:p-8 bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab" v-show="services">
                <h2 class="mb-5 text-2xl font-extrabold tracking-tight dark:text-gray-900 text-white">We invest in the world’s potential</h2>
                <!-- List -->
                <ul role="list" class="space-y-4 dark:text-gray-500 text-gray-400">
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 dark:text-blue-600 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="font-light leading-tight">Dynamic reports and dashboards</span>
                    </li>
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 dark:text-blue-600 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="font-light leading-tight">Templates for everyone</span>
                    </li>
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 dark:text-blue-600 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="font-light leading-tight">Development workflow</span>
                    </li>
                    <li class="flex space-x-2">
                        <!-- Icon -->
                        <svg class="flex-shrink-0 w-4 h-4 dark:text-blue-600 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                        <span class="font-light leading-tight">Limitless business automation</span>
                    </li>
                </ul>
            </div>
            <div class="p-4 dark:bg-white rounded-lg md:p-8 bg-gray-800" id="faq" role="tabpanel" aria-labelledby="faq-tab" v-show="faq">
                <div id="accordion-flush" data-accordion="collapse" data-active-classes="dark:bg-white bg-gray-800 dark:text-gray-900 text-white" data-inactive-classes="dark:text-gray-500 text-gray-400">
                    <h2 id="accordion-flush-heading-1">
                        <button @click.prevent="accordionFlush1 = !accordionFlush1" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left dark:text-gray-500 border-b dark:border-gray-200 border-gray-700 text-gray-400" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                            <span>What is Flowbite?</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" v-show="accordionFlush1" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-5 font-light border-b dark:border-gray-200 border-gray-700">
                            <p class="mb-2 dark:text-gray-500 text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                            <p class="dark:text-gray-500 text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="dark:text-blue-600 text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-2">
                        <button @click.prevent="accordionFlush2 = !accordionFlush2" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left dark:text-gray-500 border-b dark:border-gray-200 border-gray-700 text-gray-400" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                            <span>Is there a Figma file available?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" v-show="accordionFlush2" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 font-light border-b dark:border-gray-200 border-gray-700">
                            <p class="mb-2 dark:text-gray-500 text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                            <p class="dark:text-gray-500 text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="dark:text-blue-600 text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                        </div>
                    </div>
                    <h2 id="accordion-flush-heading-3">
                        <button @click.prevent="accordionFlush3 = !accordionFlush3" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left dark:text-gray-500 border-b dark:border-gray-200 border-gray-700 text-gray-400" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                            <span>What are the differences between Flowbite and Tailwind UI?</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-3" v-show="accordionFlush3" aria-labelledby="accordion-flush-heading-3">
                        <div class="py-5 font-light border-b dark:border-gray-200 border-gray-700">
                            <p class="mb-2 dark:text-gray-500 text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                            <p class="mb-2 dark:text-gray-500 text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                            <p class="mb-2 dark:text-gray-500 text-gray-400">Learn more about these technologies:</p>
                            <ul class="pl-5 dark:text-gray-500 list-disc text-gray-400">
                                <li><a href="https://flowbite.com/pro/" class="dark:text-blue-600 text-blue-500 hover:underline">Flowbite Pro</a></li>
                                <li><a href="https://tailwindui.com/" rel="nofollow" class="dark:text-blue-600 text-blue-500 hover:underline">Tailwind UI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import {element} from "three/nodes";

export default {
    name: "Statistics",
    data(){
        return{
            statistics: true,
            services: false,
            faq: false,
            accordionFlush1: false,
            accordionFlush2: false,
            accordionFlush3: false,
        }
    },
    methods: {
        open: function (e) {
            const elements = ['statistics', 'services', 'faq'];
            for (let i = 0; i < elements.length; i++) {
                this[elements[i]] = false;
            }
            this[e] = true;
        },

    }
}
</script>

<style scoped>

</style>
