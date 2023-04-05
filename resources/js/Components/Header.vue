<template>
    <Popover class="relative main-bg">
        <div class="px-6">
            <div class="flex items-center justify-between py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a :href="route('home')">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto sm:h-10"
                             src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""/>
                    </a>
                </div>
                <div class="-my-2 -mr-2 sm:hidden">
                    <PopoverButton
                        class="inline-flex items-center justify-center rounded-md dark:bg-white bg-gray-800 p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
                    </PopoverButton>
                </div>
                <PopoverGroup as="nav" class="hidden space-x-2 sm:flex items-center navbar-container">
<!--                    <Popover class="relative" v-slot="{ open }">-->
<!--                        <PopoverButton-->
<!--                            :class="[open ? 'dark:text-gray-900 text-gray-50' : 'text-gray-500', 'group inline-flex items-center rounded-md dark:bg-white bg-main text-base font-medium dark:hover:text-gray-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2']">-->
<!--                            <span>Categories</span>-->
<!--                            <ChevronDownIcon-->
<!--                                :class="[open ? 'dark:text-gray-600 text-gray-50' : 'text-gray-400', 'ml-2 h-5 w-5 group-hover:text-gray-500']"-->
<!--                                aria-hidden="true"/>-->
<!--                        </PopoverButton>-->

<!--                        <transition enter-active-class="transition ease-out duration-200"-->
<!--                                    enter-from-class="opacity-0 translate-y-1"-->
<!--                                    enter-to-class="opacity-100 translate-y-0"-->
<!--                                    leave-active-class="transition ease-in duration-150"-->
<!--                                    leave-from-class="opacity-100 translate-y-0"-->
<!--                                    leave-to-class="opacity-0 translate-y-1">-->
<!--                            <PopoverPanel class="absolute z-10 -ml-4 mt-3 w-screen max-w-md transform px-2 sm:px-0 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2">-->
<!--                                <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">-->
<!--                                    <div class="relative grid gap-6 dark:bg-white bg-gray-700 px-5 py-6 sm:gap-8 sm:p-8">-->
<!--                                        <a v-for="item in solutions" :key="item.name" :href="item.href"-->
<!--                                           class="-m-3 flex items-start rounded-lg p-3 dark:hover:bg-gray-50 hover:bg-gray-900">-->
<!--                                            <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600"-->
<!--                                                       aria-hidden="true"/>-->
<!--                                            <div class="ml-4">-->
<!--                                                <p class="text-base font-medium dark:text-gray-900 text-gray-100 ">{{ item.name }}</p>-->
<!--                                                <p class="mt-1 text-sm dark:text-gray-500 text-gray-50">{{ item.description }}</p>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div-->
<!--                                        class="space-y-6 dark:bg-gray-50 bg-gray-800 px-5 py-5 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">-->
<!--                                        <div v-for="item in callsToAction" :key="item.name" class="flow-root">-->
<!--                                            <a :href="item.href"-->
<!--                                               class="-m-3 flex items-center rounded-md p-3 text-base font-medium dark:text-gray-900 dark:hover:bg-gray-100 text-gray-400 hover:bg-gray-900">-->
<!--                                                <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-gray-400"-->
<!--                                                           aria-hidden="true"/>-->
<!--                                                <span class="ml-3">{{ item.name }}</span>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </PopoverPanel>-->
<!--                        </transition>-->
<!--                    </Popover>-->
                    <a href="#" class=" transition text-base font-bold text-white hover:bg-second p-2 rounded">Categories</a>
                    <a href="#" class=" transition text-base font-bold text-white hover:bg-second p-2 rounded">Pricing</a>
                    <a href="#" class=" transition text-base font-bold text-white hover:bg-second p-2 rounded">Docs</a>



                </PopoverGroup>
                <LanguageSelect/>

                <div class="hidden items-center justify-end sm:flex md:flex-1 lg:w-0">

                    <a v-if="!this.user.authenticated" :href="route('login')" class="login"><UserIcon/><div>Sign in</div></a>
                    <Button v-if="this.user.authenticated" @click="logout">
                        Log Out
                    </Button>
                </div>
            </div>
        </div>

        <transition enter-active-class="duration-200 ease-out" enter-from-class="opacity-0 scale-95" enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in" leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <PopoverPanel focus class="absolute inset-x-0 z-10 top-0 origin-top-right transform p-2 transition md:hidde">
                <div class="divide-y-2 divide-gray-50 rounded-lg bg-second shadow-lg ring-1 ring-white ring-opacity-5 popoverpanel">
                    <div class="px-5 pt-5 pb-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"/>
                            </div>
                            <div class="-mr-2">
                                <PopoverButton class="inline-flex items-center justify-center rounded-md bg-second p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                                </PopoverButton>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid gap-y-8">
                                <a v-for="item in solutions" :key="item.name" :href="item.href" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
                                    <component :is="item.icon" class="h-6 w-6 flex-shrink-0 text-indigo-600" aria-hidden="true"/>
                                    <span class="ml-3 text-base font-medium text-white">{{ item.name }}</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="space-y-6 py-6 px-5">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="text-base font-medium text-white hover:text-gray-700">Pricing</a>
                            <a href="#" class="text-base font-medium text-white hover:text-gray-700">Docs</a>
                            <a v-for="item in resources" :key="item.name" :href="item.href" class="text-base font-medium text-white hover:text-gray-700">{{ item.name }}</a>
                        </div>
                        <LanguageSelect/>
                        <div>
                            <a :href="route('register')" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
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
import { Link } from '@inertiajs/vue3';
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
    UserIcon,
} from '@heroicons/vue/24/outline'
import {CalculatorIcon, ChevronDownIcon} from '@heroicons/vue/20/solid'
import LanguageSelect from "@/Components/LanguageSelect.vue";
//icons
import CodeIcon from "@/Components/icons/CodeIcon.vue"
import HistoryIcon from "@/Components/icons/HistoryIcon.vue";
import Tun from "@/Components/icons/Tun.vue";
import RulerIcon from "@/Components/icons/RulerIcon.vue";
import PhysicsIcon from "@/Components/icons/PhysicsIcon.vue";
import axios from "axios";
export default {
    components: {
        Link,
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
        UserIcon,
        XMarkIcon,ChevronDownIcon},
    data() {
        return {
            solutions: [
                {
                    name: 'Ֆիզիկա',
                    description: 'Get a better understanding of where your traffic is coming from.',
                    href: route('physics'),
                    icon: PhysicsIcon,
                },
                {
                    name: 'Ծրագրաորում',
                    description: 'Speak directly to your customers in a more meaningful way.',
                    href: '#',
                    icon: CodeIcon,
                },
                {
                    name: 'Երկրաչափություն',
                    description: "Your customers' data will be safe and secure.",
                    href: '#',
                    icon: RulerIcon
                },
                {
                    name: 'Հանրահաշիվ',
                    description: "Connect with third-party tools that you're already using.",
                    href: '#',
                    icon: CalculatorIcon ,
                },
                {
                    name: 'Պատմություն',
                    description: 'Build strategic funnels that will drive your customers to convert',
                    href: '#',
                    icon: HistoryIcon,
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
            user:{
                authenticated: false,
                user: {}
            }
        }

    },
    created() {
        this.checkAuth();
    },
    methods: {
        async checkAuth() {
            try {
                axios.defaults.withCredentials = true;
                await axios.get('/sanctum/csrf-cookie');
                const response = await axios.get('/api/user');
                this.user.authenticated = response.data.authenticated
                this.user.uesr = response.data.user
            } catch (error) {
                console.log(error)
            }
        },
        logout(){
            axios.post('api/logout').then(res => {
                this.user.authenticated = false
            })
        }
    }
}
</script>
<style scoped>
.navbar-container{
    overflow: hidden;
    width: 18.25rem;
    height: auto;
    margin-right: auto;
    margin-left: auto;
    padding: 0.375rem;
    justify-content: space-between;
    align-items: center;
    grid-auto-columns: 1fr;
    grid-column-gap: 1rem;
    grid-row-gap: 1rem;
    -ms-grid-columns: auto 1fr auto;
    grid-template-columns: auto 1fr auto;
    -ms-grid-rows: auto;
    grid-template-rows: auto;
    border: 1px solid hsla(0,0%,100%,.15);
    border-radius: 0.75rem;
    background-color: rgba(22,22,22,.8);
    -webkit-backdrop-filter: blur(16px);
    backdrop-filter: blur(16px);
}
.popoverpanel{
    background-image: linear-gradient(180deg, rgba(22, 22, 22, 0.79), rgba(22, 22, 22, 0.67) 13%, rgba(22, 22, 22, 0.75) 89%, #161616), url(https://assets.website-files.com/63f5d36e1bfb159570f6408c/63feed1d49df0b0ba2f037d8_Grid.svg);
    background-position: 0 0, 50% 50%;
    background-size: auto, auto;
    background-clip: padding-box;
}
.login{
    text-decoration: inherit;
    padding: 0.6rem 1.25rem;
    font-size: 1rem;
    border: 1px solid #d8d5d1;
    background-color: transparent;
    background-image: none;
    backdrop-filter: blur(20px);
    color: #ebe7e3;
    display: flex;
    padding-left: 1.3rem;
    justify-content: center;
    align-items: center;
    grid-column-gap: 0.75rem;
    grid-row-gap: 0.75rem;
    border-radius: 0.6rem;
    transition: .5s;
    font-family: Relative,sans-serif;
    font-weight: 500;
    text-align: center;
}
.login:hover{
    border-color: hsla(0,0%,100%,.2);
    background-color: hsla(0,0%,100%,.05);
    box-shadow: none;
    color: #fff;
}
.login svg{
    width: 1rem;
}
</style>
