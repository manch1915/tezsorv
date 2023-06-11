<script setup>
import {Link} from '@inertiajs/vue3'
import {computed} from "vue";
const props = defineProps({
        title: String,
        username: String,
        user_id: Number,
        id: Number,
        created_at: String,
        userAvatar: String,
    });
const months =  [
    "Հունվարի",
    "Փետրվարի",
    "Մարտի",
    "Ապրիլի",
    "Մայիսի",
    "Հունիսի",
    "Հուլիսի",
    "Օգոստոսի",
    "Սեպտեմբերի",
    "Հոկտեմբերի",
    "Նոյեմբերի",
    "Դեկտեմբերի"
]
//todo optimize plus in thread view
const created_at = computed(() => {
    const d = new Date(props.created_at)
    const month = months[d.getMonth()]
    const day = d.getDate()
    const year = d.getFullYear()

    return `${month} ${day} ${year}`
})

</script>

<template>
    <div class="discussionListItem border-b-[1px] border-second" data-author="">
        <div class="discussionListItem--Wrapper">
            <div class="listBlock account hidden sm:block">
                <Link class="avatar" data-avatarhtml="true" :href="route('member', props.user_id)" :title="props.username">
                    <img height="48" :src="props.userAvatar" width="48">
                </Link>
                <div class="bold lastPostInfo">
                    <Link class="username" :href="route('member', props.user_id)"><span class="style2">{{ props.username }}</span></Link>
                </div>
            </div>
            <Link class="listBlock main" :href="route('thread.view', id)">
                <h3 class="title">{{ props.title }}</h3>
                <span class="secondRow">
                    <span class="username style1">{{props.username}}</span>
                    <span class="info-separator"></span>
                    <span class="startDate">{{created_at}}</span>
                    <span class="replyCount"></span>
                </span>
            </Link>

        </div>
    </div>
</template>


<style scoped>
.discussionListItem{
    position: relative;
    border-radius: 10px;
    transition: background .15s;
    clear: both;
    margin: 0 -12px;
    padding: 0px 12px;
}
.discussionListItem:hover {
    background: rgb(45, 45, 45);
}
.avatar img{
    object-fit: cover;
    width: 40px;
    height: 40px;
    float: left;
    margin-right: 10px;
    padding-top: 1px;
    border-radius: 50%;
}
.account {
    width: 185px;
    float: right;
    padding: 11px;
    overflow: hidden;
}
.username{
    font-size: 14px;
    color:#d6d6d6;
}
.main {
    display: block;
    padding: 13px 0;
    text-decoration: none;
}

.threadNode {
    position: absolute;
    right: 215px;
    top: 13px;
    opacity: 0;
    border-radius: 6px;
    color: #cecece;
    background: rgb(82, 80, 80);
    box-shadow: -4px 2px 0px 0px rgb(45, 45, 45);
}
.info-separator{
    width: 3px;
    height: 3px;
    background: rgb(34,142,93);
    display: inline-block;
    vertical-align: middle;
    border-radius: 50%;
    margin: 0 5px;
}
.title {
    overflow: hidden;
    white-space: nowrap;
    max-width: 100%;
    padding-left: 1px;
    text-overflow: ellipsis;
    font-size: 16px;
    display: flex;
    align-items: center;
    font-weight: 600;
    color:#d6d6d6;
}

.secondRow {
    margin: 12px 0 0;
    line-height: 18px;
    font-size: 10px;
    display: block;
}

.style1 {
    color: #b35ede;
}

.startDate {
    color: rgb(148, 148, 148);
}

.avatar {
    margin: 0 3px 0 0;
    float: left;
}

.lastPostInfo {
    padding-top: 3px;
    display: block;
    white-space: nowrap;
}

.bold {
    font-weight: 700;
}
</style>
