<template>
    <aside>
        <div class="sidebar">
            <div class="sidebarWrapper">
                <div class="section">
                    <a class="CreateThreadButton button primary full callToAction" href="#">Создать тему</a>
                </div>
                <div class="section pt-4">
                    <ol class="nodeList NodeList forums text-slate-300">
                        <ul class="generalTabs">
                            <li class="list node node0 forum level_2 current">
                                <div class="nodeInfo forumNodeInfo">
                                    <div class="nodeText">
                                        <h3 class="nodeTitle">
                                            <a href="#">Все обсуждения</a>
                                        </h3>
                                    </div>
                                </div>
                                <span class="ForumSearch" tabindex="0"></span>
                            </li>
                            <li class="">
                                <ul class="PersonalTabs">
                                    <li class="list node personalTabmythreads personalTab forum level_2">
                                        <a class="icon OverlayTrigger" href="#"></a>
                                        <div class="nodeInfo forumNodeInfo">
                                            <div class="nodeText">
                                                <h3 class="nodeTitle">
                                                    <a href="#">
                                                        <span class="personalTabTitle"> Мои темы </span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list node personalTabviewedthreads personalTab forum level_2">
                                        <a class="icon OverlayTrigger" href="#"></a>
                                        <div class="nodeInfo forumNodeInfo">
                                            <div class="nodeText">
                                                <h3 class="nodeTitle">
                                                    <a href="#">
                                                        <span class="personalTabTitle"> Прочитанные темы </span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list node personalTabfave personalTab forum level_2">
                                        <a class="icon OverlayTrigger" href="#"></a>
                                        <div class="nodeInfo forumNodeInfo">
                                            <div class="nodeText">
                                                <h3 class="nodeTitle">
                                                    <a href="#">
                                                        <span class="personalTabTitle"> Закладки </span>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="list node createPersonalTabNode forum level_2">
                                <div class="nodeInfo forumNodeInfo">
                                    <div class="nodeText">
                                        <h3 class="nodeTitle">
                                            <a class="OverlayTrigger" data-overlaycache="false" href="#">Создать вкладку</a>
                                        </h3>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <li id="103" class="node category level_1">
                            <div class="categoryNodeInfo categoryStrip">
                                <div class="categoryText">
                                    <h3 class="nodeTitle">Основной раздел</h3>
                                </div>
                            </div>
                            <ol class="nodeList">
                                <SideBarListItem menuHead="Халява" :list="xalyava"/>
                                <SideBarListItem menuHead="Торговля" :list="targovlya"/>
                                <SideBarListItem menuHead="Работа и услуги" :list="uslugi"/>
                            </ol>
                        </li>
                        <li id="348" class="node category level_1">
                            <div class="categoryNodeInfo categoryStrip">
                                <div class="categoryText">
                                    <h3 class="nodeTitle">Тематический раздел</h3>
                                </div>
                            </div>
                            <ol class="nodeList">
                                <SideBarListItem menuHead="Статьи" :list="articles"/>
                                <SideBarListItem menuHead="Софт" :list="soft"/>
                            </ol>
                            <span class="tlc"></span>
                            <span class="trc"></span>
                            <span class="blc"></span>
                            <span class="brc"></span>
                        </li>
                        <li id="670" class="node category level_1">
                            <div class="categoryNodeInfo categoryStrip">
                                <div class="categoryText">
                                    <h3 class="nodeTitle">Обсуждение игр и читы</h3>
                                </div>
                            </div>
                        </li>
                        <li id="84" class="node category level_1">
                            <div class="categoryNodeInfo categoryStrip">
                                <div class="categoryText">
                                    <h3 class="nodeTitle">Общий раздел</h3>
                                </div>
                            </div>
                            <ol class="nodeList">
                                <SideBarListItem menuHead="Оффтопик" :list="offtop"/>
                                <SideBarListItem menuHead="Компьютеры" :list="computers"/>
                                <SideBarListItem menuHead="Телефоны" :list="telephones"/>
                                <SideBarListItem menuHead="Веб-разработка" :list="webDev"/>
                                <SideBarListItem menuHead="Программирование" :list="programming"/>
                                <SideBarListItem menuHead="Графика" :list="graph"/>
                                <SideBarListItem menuHead="Жизнь форума" :list="graph"/>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </aside>
</template>

<script>
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import SideBarListItem from "@/Components/SideBarListItem.vue";
export default {
    name: "Sidebar",
    components: {SideBarListItem, Menu, MenuButton, MenuItems, MenuItem},
    data(){
        return{
            xalyava: [
                {href: '#', head: 'Розыгрыши'},
                {href: '#', head: 'Раздачи аккаунтов, ключей'},
                {href: '#', head: 'Раздачи вещей Steam'},
                {href: '#', head: 'Раздачи баз'},
                {href: '#', head: 'Раздачи прокси'},
                {href: '#', head: 'Раздачи логов'},
                {href: '#', head: 'Раздачи дедиков'},
                {href: '#', head: 'Промокоды'},
            ],
            targovlya:[
                {href: '#', head: 'Игры'},
                {href: '#', head: 'Соц. сети'},
                {href: '#', head: 'YouTube, Twitch'},
                {href: '#', head: 'Discord'},
                {href: '#', head: 'Кошельки, верификация'},
                {href: '#', head: 'Aliexpress'},
                {href: '#', head: 'Акки с балансом, бонусами'},
                {href: '#', head: 'Скрипты, сайты'},
                {href: '#', head: 'Приватный софт'},
                {href: '#', head: 'Приватные читы'},
                {href: '#', head: 'Прокси, VPN'},
                {href: '#', head: 'Дедики, хостинги'},
                {href: '#', head: 'Базы, запросы с почт'},
                {href: '#', head: 'Логи'},
                {href: '#', head: 'Вещи, техника'},
                {href: '#', head: 'Другое'},
                {href: '#', head: 'Оценка товара'},
            ],
            uslugi: [
                {href: '#', head: 'Фишинг'},
                {href: '#', head: 'Трафферы'},
                {href: '#', head: 'Программирование'},
                {href: '#', head: 'Накрутка в соц. сетях'},
                {href: '#', head: 'Дизайн'},
                {href: '#', head: 'Сигны'},
                {href: '#', head: 'Обмен средств'},
                {href: '#', head: 'Буст аккаунтов'},
                {href: '#', head: 'Учеба'},
                {href: '#', head: 'Озвучка'},
                {href: '#', head: 'Задания за деньги'},
                {href: '#', head: 'Реклама'},
                {href: '#', head: 'Ищу работу'},
            ],
            articles: [
                {href: '#', head: 'Способы заработка'},
                {href: '#', head: 'Авторские курсы'},
                {href: '#', head: 'Криптовалюты'},
                {href: '#', head: 'Социальная инженерия'},
                {href: '#', head: 'Безопасность'},
                {href: '#', head: 'SMM'},
                {href: '#', head: 'SMM Instagram'},
                {href: '#', head: 'Wi-Fi'},
                {href: '#', head: 'Вирусология'},
                {href: '#', head: 'Психология'},
                {href: '#', head: 'Социальные сети'},
                {href: '#', head: 'Kali Linux'},
                {href: '#', head: 'Анонимность'},
                {href: '#', head: 'Работа с дедиками'},
                {href: '#', head: 'Веб уязвимости'},
            ],
            soft: [
                {href: '#', head: 'Ищу софт'},
                {href: '#', head: 'Брут, чекеры<'},
                {href: '#', head: 'Private Keeper'},
                {href: '#', head: 'Прокси чекеры'},
                {href: '#', head: 'Работа с базами'},
                {href: '#', head: 'Работа с логами'},
                {href: '#', head: 'Парсеры'},
                {href: '#', head: 'Спамеры, бомберы'},
            ],
            offtop: [
                {href: '#', head: 'Аниме'},
                {href: '#', head: 'Кино'},
                {href: '#', head: 'Юмор'},
                {href: '#', head: 'Учеба'},
                {href: '#', head: 'Ваши истории'},
                {href: '#', head: 'Спорт'},
                {href: '#', head: 'Авто, мото'},
                {href: '#', head: 'Ваше творчество'},
                {href: '#', head: 'Музыкальные утечки'},
            ],
            computers: [
                {href: '#', head: 'Девайсы'},
                {href: '#', head: 'Windows'},
                {href: '#', head: 'macOS'},
                {href: '#', head: 'Linux'},
            ],
            telephones: [
                {href: '#', head: 'iOS'},
                {href: '#', head: 'Android'},
                {href: '#', head: 'Читы для Android игр'},
            ],
            webDev: [
                {href: '#', head: 'HTML, CSS, Javascript'},
                {href: '#', head: 'Уроки'},
                {href: '#', head: 'HTML шаблоны, лендинги'},
                {href: '#', head: 'PHP, MySQL'},
                {href: '#', head: 'Движки, фреймворки'},
                {href: '#', head: 'Скрипты сайтов'},
                {href: '#', head: 'Ваши сайты'},
                {href: '#', head: 'SEO, продвижение'},
            ],
            programming: [
                {href: '#', head: 'Python'},
                {href: '#', head: 'Node.js'},
                {href: '#', head: 'C/C++'},
                {href: '#', head: 'C#'},
            ],
            graph: [
                {href: '#', head: 'Бесплатная графика'},
                {href: '#', head: 'Уроки'},
                {href: '#', head: 'Работа с текстом'},
                {href: '#', head: 'Уроки по анимациям'},
                {href: '#', head: 'Ресурсы'},
                {href: '#', head: 'Исходники'},
                {href: '#', head: 'Шрифты'},
                {href: '#', head: 'Кисти, текстуры, градиенты'},
                {href: '#', head: 'Ваши работы'},
                {href: '#', head: 'Софт для Графики'},
                {href: '#', head: 'Дизайн'},
                {href: '#', head: 'Поиск исполнителей'},
            ],
            forumLife: [
                {href: '#', head: 'Жалобы'},
                {href: '#', head: 'Недочеты'},
                {href: '#', head: 'Предложения'},
                {href: '#', head: 'Конкурсы'},
                {href: '#', head: 'Гайды по форуму'},
                {href: '#', head: 'Вопрос - Ответ'},
                {href: '#', head: 'Новости сайта'},
            ],

        }
    }
}
</script>

<style scoped>
.sidebar {
    float: left;
    margin-right: 15px;
    width: 240px;
}

.sidebarWrapper {
    padding: 15px 20px;
    background: rgb(39, 39, 39);
    border-radius: 10px;
}

.CreateThreadButton {
    font-size: 13px;
    text-decoration: none;
    background-position: center;
    padding: 0 15px;
    border-style: none;
    border-radius: 6px;
    font-style: normal;
    text-align: center;
    line-height: 34px;
    cursor: pointer;
    font-weight: 600;
    transition: background 0.8s;
    overflow: hidden;
    height: 34px;
    width: 100%;
    display: block;
    color: #f5f5f5;
    background-color: rgb(34, 142, 93);
}
.nodeList .generalTabs {
    margin: 0 0 10px;
}

.nodeList .node.current > .nodeInfo > .nodeText > .nodeTitle, .nodeList .node .current>div>.nodeTitle {
    color: rgb(0, 186, 120);
}
.node .nodeText h3.nodeTitle {
    padding: 0px 12px;
    margin: 0 -12px;
    border-radius: 6px;
    transition: background .2s;
}
.nodeList .node.current > .nodeInfo > .nodeText > .nodeTitle > a, .nodeList .node .current>div>.nodeTitle>a {
    background: rgb(45, 45, 45);
    color: rgb(0, 186, 120);
    font-weight: 600;
}
.node .nodeText .nodeTitle a {
    padding: 0px 12px;
    border-radius: 6px;
    line-height: 36px;
    overflow: hidden;
    display: block;
    transition: background .2s;
    white-space: nowrap;
    text-overflow: ellipsis;
    width: 100%;
    height: 36px;
}
.categoryText>.nodeTitle {
    font-weight: bold;
    font-size: 14px;
    color: rgb(148, 148, 148);
}
.node h3.nodeTitle>a:hover {
    background: rgb(45, 45, 45);
    color: inherit;
}
</style>
