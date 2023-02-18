<template>
    <Popover class="relative dark:bg-white bg-gray-800">
        <div class="px-6">
            <div
                class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto sm:h-10"
                             src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""/>
                    </a>
                </div>
                <div class="-my-2 -mr-2 md:hidden">
                    <PopoverButton
                        class="inline-flex items-center justify-center rounded-md dark:bg-white bg-gray-800 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
                    </PopoverButton>
                </div>
                <PopoverGroup as="nav" class="hidden space-x-10 md:flex items-center">
                    <Popover class="relative" v-slot="{ open }">
                        <PopoverButton
                            :class="[open ? 'dark:text-gray-900 text-gray-50' : 'text-gray-500', 'group inline-flex items-center rounded-md dark:bg-white bg-gray-800 text-base font-medium dark:hover:text-gray-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                            <span>Solutions</span>
                            <ChevronDownIcon
                                :class="[open ? 'dark:text-gray-600 text-gray-50' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"
                                aria-hidden="true"/>
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                                    enter-from-class="opacity-0 translate-y-1"
                                    enter-to-class="opacity-100 translate-y-0"
                                    leave-active-class="transition ease-in duration-150"
                                    leave-from-class="opacity-100 translate-y-0"
                                    leave-to-class="opacity-0 translate-y-1">
                            <PopoverPanel class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">
                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid gap-6 dark:bg-white bg-gray-700 px-5 py-6 sm:gap-8 sm:p-8">
                                        <a v-for="item in solutions" :key="item.name" :href="item.href"
                                           class="-m-3 flex items-start rounded-lg p-3 dark:hover:bg-gray-50 hover:bg-gray-900">
                                            <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600"
                                                       aria-hidden="true"/>
                                            <div class="ml-4">
                                                <p class="text-base font-medium dark:text-gray-900 text-gray-100 ">{{ item.name }}</p>
                                                <p class="mt-1 text-sm dark:text-gray-500 text-gray-50">{{ item.description }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="space-y-6 dark:bg-gray-50 bg-gray-800 px-5 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                        <div v-for="item in callsToAction" :key="item.name" class="flow-root">
                                            <a :href="item.href"
                                               class="-m-3 flex items-center rounded-md p-3 text-base font-medium dark:text-gray-900 dark:hover:bg-gray-100 text-gray-400 hover:bg-gray-900">
                                                <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-gray-400"
                                                           aria-hidden="true"/>
                                                <span class="ml-3">{{ item.name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>

                    <a href="#" class="text-base font-medium text-gray-500 dark:hover:text-gray-900 hover:text-white">Pricing</a>
                    <a href="#" class="text-base font-medium text-gray-500 dark:hover:text-gray-900 hover:text-white">Docs</a>

                    <Popover class="relative" v-slot="{ open }">
                        <PopoverButton
                            :class="[open ? 'dark:text-gray-900 text-gray-50' : 'text-gray-500', 'group inline-flex items-center rounded-md dark:bg-white bg-gray-800 text-base font-medium dark:hover:text-gray-900 hover:text-white  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">
                            <span>More</span>
                            <ChevronDownIcon
                                :class="[open ? 'dark:text-gray-600 text-gray-50' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"
                                aria-hidden="true"/>
                        </PopoverButton>

                        <transition enter-active-class="transition ease-out duration-200"
                                    enter-from-class="opacity-0 translate-y-1"
                                    enter-to-class="opacity-100 translate-y-0"
                                    leave-active-class="transition ease-in duration-150"
                                    leave-from-class="opacity-100 translate-y-0"
                                    leave-to-class="opacity-0 translate-y-1">
                            <PopoverPanel
                                class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 transform px-2 sm:px-0">
                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid gap-6  dark:bg-white bg-gray-700 px-5 py-6 sm:gap-8 sm:p-8">
                                        <a v-for="item in resources" :key="item.name" :href="item.href"
                                           class="-m-3 flex items-start rounded-lg p-3 dark:hover:bg-gray-50 hover:bg-gray-900">
                                            <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600"
                                                       aria-hidden="true"/>
                                            <div class="ml-4">
                                                <p class="text-base font-medium dark:text-gray-900 text-gray-100 ">{{ item.name }}</p>
                                                <p class="mt-1 text-sm dark:text-gray-500 text-gray-50">{{ item.description }}</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dark:bg-gray-50 bg-gray-800 px-5 py-5 sm:px-8 sm:py-8">
                                        <div>
                                            <h3 class="text-base font-medium text-gray-500">Recent Posts</h3>
                                            <ul role="list" class="mt-4 space-y-4">
                                                <li v-for="post in recentPosts" :key="post.id"
                                                    class="truncate text-base">
                                                    <a :href="post.href"
                                                       class="font-medium dark:text-gray-900 dark:hover:bg-gray-100 text-gray-400 hover:bg-gray-900">{{
                                                            post.name
                                                        }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mt-5 text-sm">
                                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                View all posts
                                                <span aria-hidden="true"> &rarr;</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </PopoverPanel>
                        </transition>
                    </Popover>
                    <LanguageSelect/>
                    <ThemeSwitch/>
                </PopoverGroup>
                <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                    <a :href="route('login')"
                       class="whitespace-nowrap text-base font-medium text-gray-500 dark:hover:text-gray-900 hover:text-white">Sign in</a>
                    <a :href="route('register')"
                       class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign
                        up</a>
                </div>
            </div>
        </div>

        <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95"
                    enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
                    leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
                <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="px-5 pt-5 pb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto"
                                     src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                                     alt="Your Company"/>
                            </div>
                            <div class="-mr-2">
                                <PopoverButton
                                    class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                                </PopoverButton>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <a v-for="item in solutions" :key="item.name" :href="item.href"
                                   class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                    <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600"
                                               aria-hidden="true"/>
                                    <span class="ml-3 text-base font-medium text-gray-900">{{ item.name }}</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="space-y-6 py-6 px-5">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>

                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>
                            <a v-for="item in resources" :key="item.name" :href="item.href"
                               class="text-base font-medium text-gray-900 hover:text-gray-700">{{ item.name }}</a>
                        </div>
                        <LanguageSelect/>
                        <div>
                            <a :href="route('register')"
                               class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign
                                up</a>
                            <p class="mt-6 text-center text-base font-medium text-gray-500">
                                Existing customer?
                                {{ ' ' }}
                                <a :href="route('login')" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </PopoverPanel>
        </transition>
    </Popover>
</template>

<script>
import {Popover, PopoverButton, PopoverGroup, PopoverPanel} from '@headlessui/vue'
import "/node_modules/flag-icons/css/flag-icons.min.css";
import {
    ArrowPathIcon,
    Bars3Icon,
    BookmarkSquareIcon,
    CalendarIcon,
    ChartBarIcon,
    CursorArrowRaysIcon,
    LifebuoyIcon,
    PhoneIcon,
    PlayIcon,
    ShieldCheckIcon,
    Squares2X2Icon,
    XMarkIcon,
} from '@heroicons/vue/24/outline'
import {CalculatorIcon, ChevronDownIcon} from '@heroicons/vue/20/solid'
import LanguageSelect from "@/Components/LanguageSelect.vue";
import ThemeSwitch from "@/Components/ThemeSwitch.vue";
import Code from "@/Components/icons/Code.vue"
import Square from "@/Components/icons/Square.vue";
import Tun from "@/Components/icons/Tun.vue";

export default {
    components: {
        ThemeSwitch,
        Code,
        Square,
        LanguageSelect, Popover, PopoverButton, PopoverGroup, PopoverPanel, ArrowPathIcon,
        Bars3Icon,
        BookmarkSquareIcon,
        CalendarIcon,
        ChartBarIcon,
        CursorArrowRaysIcon,
        LifebuoyIcon,
        PhoneIcon,
        PlayIcon,
        ShieldCheckIcon,
        Squares2X2Icon,
        XMarkIcon,ChevronDownIcon},
    data() {
        return {
            solutions: [
                {
                    name: 'Ֆիզիկա',
                    description: 'Get a better understanding of where your traffic is coming from.',
                    href: '#',
                    icon: null,
                },
                {
                    name: 'Ծրագրաորում',
                    description: 'Speak directly to your customers in a more meaningful way.',
                    href: '#',
                    icon: Code,
                },
                {
                    name: 'Երկրաչափություն',
                    description: "Your customers' data will be safe and secure.",
                    href: '#',
                    icon: Square
                },
                {
                    name: 'Հանրահաշիվ',
                    description: "Connect with third-party tools that you're already using.",
                    href: '#',
                    icon: CalculatorIcon ,
                },
                {
                    name: 'Հայոց Պատմություն',
                    description: 'Build strategic funnels that will drive your customers to convert',
                    href: '#',
                    icon: CalendarIcon,
                },],
            callsToAction: [
                {name: 'Watch Demo', href: '#', icon: PlayIcon},
                {name: 'Contact Sales', href: '#', icon: PhoneIcon},
            ],
            resources: [
                {
                    name: 'Help Center',
                    description: 'Get all of your questions answered in our forums or contact support.',
                    href: '#',
                    icon: LifebuoyIcon,
                },
                {
                    name: 'Guides',
                    description: 'Learn how to maximize our platform to get the most out of it.',
                    href: '#',
                    icon: BookmarkSquareIcon,
                },
                {
                    name: 'Events',
                    description: 'See what meet-ups and other events we might be planning near you.',
                    href: '#',
                    icon: CalendarIcon,
                },
                {
                    name: 'Security',
                    description: 'Understand how we take your privacy seriously.',
                    href: '#',
                    icon: ShieldCheckIcon
                },
            ],
            recentPosts: [
                {id: 1, name: 'Boost your conversion rate', href: '#'},
                {id: 2, name: 'How to use search engine optimization to drive traffic to your site', href: '#'},
                {id: 3, name: 'Improve your customer experience', href: '#'},
            ],
            translations: {
                en: "Last Friday I saw a spotted striped blue worm shake hands with a legless lizard.",
                es: "El viernes pasado vi un gusano azul a rayas manchado estrecharle la mano con un lagarto sin patas.",
                de: "Letzten Freitag sah ich einen gefleckten gestreiften blauen Wurm, der einer beinlosen Eidechse die Hand schüttelte.",
                fr: "Vendredi dernier, j'ai vu un ver bleu rayé tacheté serrer la main d'un lézard sans pattes.",
                it: "Venerdì scorso ho visto un verme blu striato macchiato stringere la mano a una lucertola senza gambe.",
                jp: "先週の金曜日、縞模様の青いワームが脚のないトカゲと握手するのを見ました。",
                cn: "上周五，我看到一只斑点的蓝色蠕虫与一只无腿的蜥蜴握手。"
            },

        }
    },
}
</script>
