<template>
    <header>
        <div class="main-container">
            <nav>
                <div class="navTabs text-white">
                    <ul class="publicTabs">
                        <div class="mobileMenuButton hiddenResponsiveFull" style="">
                            <!--todo mobile button icon-->
                        </div>
                        <div class="hiddenWideUnder fl_l">
                            <a id="neo-logo" :href="route('main')"><img alt="" src="/images/logo.svg"></a>
                            <li class="navTab selected">
                                <div class="tabLinks">
                                    <ul class="secondaryContent blockLinksList">
                                        <li>
                                            <a href="https://lzt.market">
                                                Հոդվածներ
                                            </a>
                                        </li>
                                        <li>
                                            <div class="Popup">
                                                <a class="NoPopupGadget PopupControl PopupClosed" rel="Menu">
                                                    Սոց ցանցեր
                                                    <span class="arrowWidget"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <Menu as="div" v-slot="{ open }" class="relative inline-block">
                                                <div>
                                                    <MenuButton class="inline-flex items-center w-full text justify-center rounded-md px-4 py-2 text-sm font-medium hover:bg-opacity-30 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75">
                                                        Ուրիշ
                                                        <ChevronDownIcon :class="[open ? 'rotate-180' : 'rotate-0','w-4 ml-1 transition-transform']"/>
                                                    </MenuButton>
                                                </div>

                                                <transition
                                                    enter-active-class="transition duration-100 ease-out"
                                                    enter-from-class="transform scale-95 opacity-0"
                                                    enter-to-class="transform scale-100 opacity-100"
                                                    leave-active-class="transition duration-75 ease-in"
                                                    leave-from-class="transform scale-100 opacity-100"
                                                    leave-to-class="transform scale-95 opacity-0"
                                                >
                                                    <MenuItems class="absolute right-0 mt-2 w-56 origin-top-right divide-y divide-gray-100 z-40 rounded-md bg-mine-second shadow-lg ring-1 ring-purple-800 ring-opacity-1 focus:outline-none">
                                                        <div class="px-1 py-1">
                                                            <MenuItem v-slot="{ active }">
                                                                <button :class="[active ? 'bg-mine text-white' : 'text-white','group flex w-full items-center rounded-md px-2 py-2 text-sm',]">
                                                                    Edit
                                                                </button>
                                                            </MenuItem>
                                                            <MenuItem v-slot="{ active }">
                                                                <button :class="[active ? 'bg-mine text-white' : 'text-white','group flex w-full items-center rounded-md px-2 py-2 text-sm',]">
                                                                    Duplicate
                                                                </button>
                                                            </MenuItem>
                                                        </div>
                                                        <div class="px-1 py-1">
                                                            <MenuItem v-slot="{ active }">
                                                                <button :class="[active ? 'bg-mine text-white' : 'text-white','group flex w-full items-center rounded-md px-2 py-2 text-sm',]">
                                                                    Archive
                                                                </button>
                                                            </MenuItem>
                                                            <MenuItem v-slot="{ active }">
                                                                <button :class="[active ? 'bg-mine text-white' : 'text-white','group flex w-full items-center rounded-md px-2 py-2 text-sm',]">
                                                                    Move
                                                                </button>
                                                            </MenuItem>
                                                        </div>
                                                        <div class="px-1 py-1">
                                                            <MenuItem v-slot="{ active }">
                                                                <button :class="[active ? 'bg-mine text-white' : 'text-white','group flex w-full items-center rounded-md px-2 py-2 text-sm',]">
                                                                    Delete
                                                                </button>
                                                            </MenuItem>
                                                        </div>
                                                    </MenuItems>
                                                </transition>
                                            </Menu>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                    </ul>
                    <div class="account-links">
                        <li id="searchBar" class="pageWidth">
                            <fieldset class="QuickSearch" data-member-search-url="members/search">
                                <form action="search/search" class="formPopup" method="get" target="_blank">
                                    <div class="primaryControls">
                                        <input autocomplete="off" class="textCtrl QuickSearchQuery" name="keywords" placeholder="Поиск..." title="Введите параметры поиска и нажмите ввод" type="text">
                                    </div>
                                </form>
                            </fieldset>
                        </li>
                        <ul class="account-links">
                            <!-- account -->
                            <!-- conversations popup -->
                            <li class="navTab inbox Popup PopupControl PopupClosed  PopupContainerControl">
                                <a class="navLink NoPopupGadget ConversationsPopupLink" href="conversations/"
                                   rel="Menu">
                                    <div class="counter-container">
                                        <svg height="22" viewBox="0 0 20 20" width="22"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g id="message_outline_20__Page-2" fill="none" fill-rule="evenodd"
                                               stroke="none" stroke-width="1">
                                                <g id="message_outline_20__message_outline_20">
                                                    <path id="message_outline_20__Shape" d="M0 0h20v20H0z"
                                                          opacity=".4"></path>
                                                    <path id="message_outline_20__Icon-Color"
                                                          d="M6.83 15.75c.2-.23.53-.31.82-.2.81.3 1.7.45 2.6.45 3.77 0 6.75-2.7 6.75-6s-2.98-6-6.75-6S3.5 6.7 3.5 10c0 1.21.4 2.37 1.14 3.35.1.14.16.31.15.49-.04.76-.4 1.78-1.08 3.13 1.48-.11 2.5-.53 3.12-1.22ZM3.24 18.5a1.2 1.2 0 0 1-1.1-1.77A10.77 10.77 0 0 0 3.26 14 7 7 0 0 1 2 10c0-4.17 3.68-7.5 8.25-7.5S18.5 5.83 18.5 10s-3.68 7.5-8.25 7.5c-.92 0-1.81-.13-2.66-.4-1 .89-2.46 1.34-4.35 1.4Z"
                                                          fill="currentColor" fill-rule="nonzero"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <div id="ConversationsMenu_Counter" class="itemCount Zero"
                                             data-text="У Вас есть новые непрочитанные переписки: %d.">
                                            <span class="Total">0</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- alerts popup -->
                            <div class="liveAlerts navPopup DismissParent" style="display: none">
                                <div class="DismissCtrl"></div>
                            </div>
                            <li class="navTab alerts Popup PopupControl PopupClosed PopupContainerControl">
                                <a class="navLink NoPopupGadget" href="account/alerts" rel="Menu">
                                    <div class="counter-container ">
                                        <svg fill="none" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 2.1c4.02 0 6.9 3.28 6.9 7.53v1.6c0 .23.2.53.72 1.08l.27.27c1.08 1.1 1.51 1.73 1.51 2.75 0 .44-.05.79-.27 1.2-.45.88-1.42 1.37-2.87 1.37h-1.9c-.64 2.33-2.14 3.6-4.36 3.6-2.25 0-3.75-1.3-4.37-3.67l.02.07H5.74c-1.5 0-2.47-.5-2.9-1.41-.2-.4-.24-.72-.24-1.16 0-1.02.43-1.65 1.51-2.75l.27-.27c.53-.55.72-.85.72-1.08v-1.6C5.1 5.38 7.99 2.1 12 2.1zm2.47 15.8H9.53c.46 1.25 1.25 1.8 2.47 1.8s2.01-.55 2.47-1.8zM12 3.9c-2.96 0-5.1 2.43-5.1 5.73v1.6c0 .85-.39 1.46-1.23 2.33l-.28.29c-.75.75-.99 1.11-.99 1.48 0 .19.01.29.06.38.1.22.43.39 1.28.39h12.52c.82 0 1.16-.17 1.28-.4.05-.1.06-.2.06-.37 0-.37-.24-.73-.99-1.48l-.28-.29c-.84-.87-1.23-1.48-1.23-2.33v-1.6c0-3.3-2.13-5.73-5.1-5.73z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <div id="AlertsMenu_Counter" class="itemCount Zero"
                                             data-text="У Вас есть новые оповещения: %d.">
                                            <span class="Total">0</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="navTab account Popup PopupControl  PopupContainerControl PopupClosed">
         <span id="account-style" class="navLink accountPopup NoPopupGadget" rel="Menu">
         <b id="NavigationAccountUsername" class="hiddenNarrowUnder accountUsername username"><span class="style2">killerpvp</span></b>
         <span id="NavigationAccountBalance" class="hiddenNarrowUnder hidden">
         <span class="balanceLabel">
         <span class="balanceValue">0</span>
         <span class="svgIcon--rub"></span>
         </span>
         </span>
         <span class="avatar">
         <img alt="Текущий аватар" class="navTab--visitorAvatar"
              src="https://zelenka.guru/data/avatars/s/797/797788.jpg?1678077751">
         </span>
         </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>

import {Menu, MenuButton, MenuItems, MenuItem} from '@headlessui/vue'
import { ChevronDownIcon  } from '@heroicons/vue/24/outline'
import { useMainStore } from "@/stores/main.js"

export default {
    name: "MainHeader",
    components: {Menu, MenuButton, MenuItems, MenuItem,ChevronDownIcon,useMainStore},
    data() {
        return {
            iconRotate: false,
            active: false,
        }
    },
    props:{
      auth: Object,
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
        logout() {
            axios.post('api/logout').then(res => {
                this.user.authenticated = false
            })
        }
    }
}
</script>
<style scoped>
header {
    background-color: #272727;
}
li {
    margin: auto;
}

#neo-logo {
    height: 45px;
    width: 45px;
    margin: 4px 10px 0 0;
}

#neo-logo {
    stroke: green;
    stroke-width: 1;
    stroke-linecap: butt;
    stroke-dasharray: 0;
    filter: drop-shadow(0 0 5px #ffffff);
    transition: all .5s;
}

#neo-logo:hover {
    filter: drop-shadow(0 0 3px rgba(88, 40, 139, 0.8));
}

.main-container {
    position: relative;
    width: 1076px;
    margin: 0 auto;
}

.navTabs {
    display: flex;
    justify-content: space-between;
    align-content: center;
}

.account-links {
    display: flex;
    justify-content: center;
}

.secondaryContent {
    display: flex;
}

.counter-container {
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    padding: 0 10px 0 0;
}

.hiddenWideUnder {
    display: flex;
    align-items: center;
}

.QuickSearch .primaryControls {
    margin-right: 20px;
}

.QuickSearch .primaryControls input.textCtrl {
    width: 100%;
    border-radius: 6px;
    padding-left: 35px;
    box-sizing: border-box;
    border: none;
    margin-right: 10px;
}

.QuickSearchQuery {
    padding-right: 30px;
}

#searchBar .primaryControls:before {
    color: rgb(34, 142, 93);
    display: inline-block;
    font-family: "Font Awesome 5 Pro";
    font-weight: 600;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\f002";
    float: left;
    margin-right: -36px;
    width: 36px;
    text-align: center;
    position: relative;
    line-height: 30px;
    font-size: 16px;
    pointer-events: none;
}

.textCtrl {
    font-size: 13px;
    color: rgb(214, 214, 214);
    background-color: rgb(45, 45, 45);
    padding: 0 10px;
    border: 0 none black;
    border-radius: 6px;
    line-height: 30px;
    outline: none;
    box-sizing: border-box;
    height: 30px;
}

input.textCtrl:focus, select.textCtrl:focus, textarea.textCtrl:focus, div.textCtrl:focus-within {
    box-shadow: 0 0 0px 2px rgba(98, 72, 255, .5);
}

.account {
    margin-left: 5px;
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 10px;
    cursor: pointer;
}

.account:hover {
    background-color: #2D2D2D;
}

.username .style2 {
    color: rgb(148, 148, 148);
}

.avatar img, .avatar .img, .avatarCropper {
    border-radius: 50%;
    image-rendering: optimizeSpeed;
}

.navTab--visitorAvatar {
    width: 30px;
    height: 30px;
    display: inline-block;
    margin: 0 2px 0 4px;
}

.counter-container svg {
    width: 22px;
    height: 22px;
    color: rgb(148, 148, 148);
}

.navTabs .navTab.PopupClosed .navLink:hover .counter-container svg, .navTabs .navTab.PopupOpen .navLink .counter-container svg {
    color: rgb(0, 186, 120);
}

.navTabs .navTab.PopupOpen .navLink .itemCount {
    border: 2px solid rgb(54, 54, 54);
}

.navTabs .navLink .itemCount.Zero {
    display: none;
}

.navTabs .navLink .itemCount {
    padding: 1px 4px 1px 5px;
    border: 2px solid rgb(54, 54, 54);
    border-radius: 12px;
    color: #f5f5f5;
    font-size: 9px;
    height: 11px;
    line-height: 11px;
    min-width: 5px;
    top: 1px;
    left: 11px;
    background-color: rgb(34, 142, 93);
    text-align: center;
    position: absolute;
}

.navTabs .navTab.selected .tabLinks a {
    padding: 0 12px;
    display: block;
    font-weight: 600;
    color: rgb(214, 214, 214);
}

</style>
