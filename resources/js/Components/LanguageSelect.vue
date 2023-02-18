<template>
    <div class="relative">
        <button class="dark:bg-white bg-gray-800 dark:text-gray-500 text-gray-200 rounded shadow-lg p-2 focus:outline-none" @click.prevent="menuToggle=!menuToggle">
            <span class="fi w-6" :class="`fi-${countries[selected].flag}`"></span> <i class="mdi mdi-chevron-down"></i>
        </button>
        <div class="dark:bg-white bg-gray-800 dark:text-gray-700 text-gray-200 shadow-md rounded text-sm absolute mt-12 top-0 right-0 min-w-full w-48 z-30" v-show="menuToggle">
            <span class="absolute top-0 right-0 w-3 h-3 dark:bg-white bg-gray-800 transform rotate-45 -mt-1 mr-3"></span>
            <div class="dark:bg-white bg-gray-800 overflow-auto rounded w-full relative z-10">
                <ul class="list-reset">
                    <template v-for="(item, index) in countries">
                        <li>
                            <a href="#" class="px-4 py-2 flex hover:bg-gray-100 hover:text-gray-800 no-underline hover:no-underline transition-colors duration-100"
                               @click.prevent="menuToggle=false;selected=index;">
                                                <span class="inline-block mr-2 fi"
                                                      :class="'fi-'+item.flag"></span>
                                <span class="inline-block" v-text="item.label"></span>
                                <template v-if="index==selected">
                                                    <span class="ml-auto">
                                                        <i class="mdi mdi-check"></i>
                                                    </span>
                                </template>
                            </a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LanguageSelect",
    data() {
        return {
            selected: 0,
            countries: [
                {
                    label: 'English',
                    lang: 'en',
                    flag: 'gb',
                },
                {
                    label: 'Armenian',
                    lang: 'am',
                    flag: 'am',
                },
                {
                    label: 'Russian',
                    lang: 'ru',
                    flag: 'ru',
                },

            ],
            menuToggle: false,
        }
}}
</script>

<style scoped>

</style>
