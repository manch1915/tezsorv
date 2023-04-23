<template>
    <div class="discussionListItem" data-author="">
        <div class="discussionListItem--Wrapper">
            <div class="listBlock account">
                <a class="avatar Av4845447s" data-avatarhtml="true" href="members/4845447/" title="zamonary1">
                    <img alt="zamonary1" height="48" src="https://zelenka.guru/data/avatars/s/4904/4904582.jpg" width="48">
                </a>
                <div class="bold lastPostInfo"><a class="username" href="members/4845447/"><span class="style2">zamonary1</span></a>
                </div>
            </div>
            <a class="listBlock main" href="">
                <span class="threadNode">Кошельки, верификация</span>
                <h3 class="title">Qiwi Профессиональный</h3>
                <span class="secondRow">
                    <span class="username style1">tsukuyomidream</span>
                    <span class="info-separator"></span>
                    <span class="startDate"> 1 min later</span>
                    <span class="replyCount"></span>
                </span>
            </a>

        </div>
    </div>
</template>

<script>
export default {
    name: "discussionListItem"
}
</script>

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
    font-size: 14px;
    display: flex;
    align-items: center;
    font-weight: 600;
    color: rgb(148, 148, 148);
}

.secondRow {
    margin: 12px 0 0;
    line-height: 18px;
    font-size: 12px;
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
