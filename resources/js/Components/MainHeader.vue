<script setup>
import {h, ref} from "vue";
import { router } from '@inertiajs/vue3'
import { mdiMagnify,mdiViewHeadline,mdiSendVariantOutline,mdiBook } from '@mdi/js';
import {NConfigProvider, NDropdown, NIcon, NInput,darkTheme} from "naive-ui";
import {
    PersonCircleOutline as UserIcon,
    Pencil as EditIcon,
    LogOutOutline as LogoutIcon,
    HeartOutline as SaveIcon
} from "@vicons/ionicons5";
import { Link } from '@inertiajs/vue3';
import BaseIcon from "@/Components/BaseIcon.vue";


const props =  defineProps({
    auth: Object,
})

const openNav = ref(false)

const renderIcon = (icon) => {
    return () => {
        return h(NIcon, null, {
            default: () => h(icon)
        });
    };
};

const options = ref([
    {
        label: "Profile",
        key: "member",
        icon: renderIcon(UserIcon),
        props: {
            onClick: () => {
                router.visit(route('member',props.auth.user.id))
            }
        }
    },
    {
        label: "Edit Profile",
        key: "editProfile",
        icon: renderIcon(EditIcon),
        props: {
            onClick: () => {
                router.visit(route('personalDetails'))
            }
        }
    },
    {
        label: "Favorites",
        key: "showFavorites",
        icon: renderIcon(SaveIcon),
        props: {
            onClick: () => {
                router.visit(route('thread.showFavorites'))
            }
        }
    },
    {
        label: "Logout",
        key: "logout",
        icon: renderIcon(LogoutIcon),
        props: {
            onClick: () => {
                router.post(route('logout'))
            }
        }
    }]
)

const active = ref(false)
</script>
<template>
    <header>
        <div class="main-container">
            <nav class="">
                <div class="md:static py-2 px-2 rounded fixed z-50 bg-mine-second w-full top-0 navTabs text-white">
                    <ul class="publicTabs flex items-center">
                        <div class="mobileMenuButton hiddenResponsiveFull md:hidden block">
                            <BaseIcon @click="openNav = !openNav" class="text-mainText" w="w-auto" h="h-auto" size="30" :path="mdiViewHeadline"/>
                        </div>
                        <div class="hiddenWideUnder fl_l">
                            <Link id="neo-logo" class="" :href="route('main')"><img alt="" src="/images/logo.svg"></Link>
                            <li class="navTab selected">
                                <div class=" tabLinks">
                                    <ul class="secondaryContent blockLinksList">
                                        <li>
                                            <a href="#">
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
                                    </ul>
                                </div>
                            </li>
                        </div>
                    </ul>
                    <div class="account-links">
                        <li id="searchBar" class="pageWidth pr-2 md:block hidden">
                            <fieldset class="QuickSearch" data-member-search-url="members/search">
                                <n-config-provider :theme="darkTheme">
                                    <n-input round  placeholder="Փնտրել">
                                        <template #prefix>
                                            <BaseIcon :path="mdiMagnify"/>
                                        </template>
                                    </n-input>
                                </n-config-provider>
                            </fieldset>
                        </li>
                        <ul class="account-links md:p-0 p-2">
                            <!-- account -->
                            <!-- alerts popup -->
                            <li class="navTab alerts Popup PopupControl PopupClosed PopupContainerControl">
                                <a class="navLink NoPopupGadget" href="#" rel="Menu">
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
                            <n-dropdown class="custom-dropdown" :options="options">
                                <li class="navTab account">
                                     <span id="account-style" class="navLink accountPopup NoPopupGadget" rel="Menu">
                                         <b id="NavigationAccountUsername" class="hiddenNarrowUnder accountUsername username"><span class="style2">{{ auth.user.username }}</span></b>
                                         <span id="NavigationAccountBalance" class="hiddenNarrowUnder">
                                             <span class="balanceLabel hidden">
                                                    <!--Badge-->
                                                 <span class="balanceValue">0</span>
                                                 <span class="svgIcon--rub"></span>
                                             </span>
                                         </span>
                                         <span class="avatar">
                                            <img v-if="auth.user.profile_picture" alt="Текущий аватар" class="navTab--visitorAvatar" :src="auth.user.profile_picture">
                                            <img v-else alt="Текущий аватар" class="navTab--visitorAvatar" src="/images/unuser.jpg">
                                         </span>
                                     </span>
                                </li>
                            </n-dropdown>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <Transition>
    <div v-show="openNav" class="sideNav bg-mine-second z-10">
        <div class="p-5">
        <Link id="neo-logo" :href="route('main')" ><img alt="" class="w-14 pt-2" src="/images/logo.svg"></Link>
            <ul class="sideUl text-white">
                <li class="flex items-center"><BaseIcon :path="mdiBook"/>Հոդվածներ</li>
                <li class="flex items-center"><BaseIcon :path="mdiSendVariantOutline"/>Սոց ցանցեր</li>
            </ul>
        </div>
    </div>
    </Transition>
</template>


<style scoped>
header {
    background-color: #272727;
}
li {
    margin: auto;
}
.sideUl{

}
.sideUl li{
    padding: 0 5px;
    border-radius: 6px;
    line-height: 36px;
    overflow: hidden;
    display: flex;
    align-items: center;
    transition: background .2s;
    white-space: nowrap;
    text-overflow: ellipsis;
    width: 100%;
    height: 36px;
}
.sideUl li:hover{
    background: rgb(45, 45, 45);
    color: inherit;
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
    max-width: 1076px;
    margin: 0 auto;
}

.navTabs {
    display: flex;
    justify-content: space-between;
    align-content: center;
}
@media screen and (max-width: 768px) {
    .navTabs {
        box-shadow: 0px -7px 20px #ffffff;
    }
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
.sideNav{
    display: block;
    position: fixed;
    top: 46px;
    width: 90vw;
    height: calc(100vh - 46px);
}
.v-enter-active,
.v-leave-active {
    transition: 0.3s;
}

.v-enter-from{
    transform: translate(-100%, 0);
}
.v-leave-to {
    transform: translate(-100%, 0);
}

@media only screen and (max-width: 768px) {
    .hiddenWideUnder{
        display: none;
    }
}
</style>
<style>
.custom-dropdown{
    background-color: #272727 !important;
}
.n-dropdown-menu .n-dropdown-option .n-dropdown-option-body:not(.n-dropdown-option-body--disabled).n-dropdown-option-body--pending::before {
    background-color:  rgb(45, 45, 45);
}
.custom-dropdown .n-dropdown-option-body__label{
    color: rgb(239, 231, 231);
}
.n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__prefix {
    color: rgb(239, 231, 231);
}
.n-dropdown-menu .n-dropdown-option .n-dropdown-option-body:not(.n-dropdown-option-body--disabled).n-dropdown-option-body--pending .n-dropdown-option-body__prefix, .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body:not(.n-dropdown-option-body--disabled).n-dropdown-option-body--pending .n-dropdown-option-body__suffix {
    color: #228E5D;
}
</style>
