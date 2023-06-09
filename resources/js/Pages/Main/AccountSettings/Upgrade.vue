<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import NavSettings from "@/Components/NavSettings.vue";
import {NButton, NConfigProvider, NImage, NInput, NInputGroup, NProgress, NSpace} from "naive-ui";
import {darkTheme} from 'naive-ui'
import BaseIcon from "@/Components/BaseIcon.vue";
import {mdiReload} from '@mdi/js';
import {ref} from "vue";
import ProgressItem from "@/Components/ProgressItem.vue";

const props = defineProps({
    auth: Object,
    referralLink: Object,
    neoCount: Number
})

const loading = ref(false)
const refLink = `${route('register')}?ref=${props.referralLink.code}`;


const copyToClipboard = () => {
    navigator.clipboard.writeText(refLink)
}

</script>

<template>
    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <n-config-provider :theme="darkTheme">
                    <div class="mainContainer sm:mt-0 mt-5">
                        <div class="mainContent flex flex-col">
                            <n-space vertical>
                                <h1 class="text-xl text-slate-300">Պրոգրեսս</h1>
                                <n-progress
                                    type="line"
                                    :percentage="neoCount"
                                    unit=""
                                    :height="24"
                                    border-radius="12px 0 12px 0"
                                    fill-border-radius="12px 0 12px 0"
                                />
                                <p class="text-lg text-slate-300">Կանչիր ընկերենրիդ narcis.guru և ստացիր նոր դեր թյուր
                                    բոնուսներով</p>
                                <p class="text-lg text-slate-300">Քո ռեֆ հղումը։</p>
                                <n-input-group>
                                    <n-input readonly v-model:value="refLink"/>
                                    <n-button @click.prevent="copyToClipboard">Copy</n-button>
                                </n-input-group>
                                <n-space vertical align="center">
                                    <progress-item title="Ալֆա - 100neo"
                                                   src="https://media1.giphy.com/media/3o7bufgPP70ra2ZVi8/giphy.gif?cid=ecf05e47rxtnd0spv3mcuts2oyrees166v6pqpvkzodibg56&ep=v1_gifs_search&rid=giphy.gif&ct=g"/>
                                    <progress-item title="Բետա - 60neo"
                                                   src="https://media2.giphy.com/media/XHjTpNqsepb3stp93A/giphy.gif?cid=ecf05e47v1py78df81jtu46ekboh7dpfl451u4fu1eghamvw&ep=v1_gifs_search&rid=giphy.gif&ct=g"/>
                                    <progress-item title="Դելտա - 45neo"
                                                   src="https://media4.giphy.com/media/cjnuM6TGzVIQ0fa5yy/giphy.gif?cid=ecf05e47pmozd4kexlzna89d134sn6s2p0wdkoy9krv3jgqy&ep=v1_gifs_search&rid=giphy.gif&ct=g"/>
                                    <progress-item title="Գամմա - 30neo"
                                                   src="https://media2.giphy.com/media/l0MYDGA3Du1hBR4xG/giphy.gif?cid=ecf05e473ba20i6mybbicgvw0pqvk5k1oi78h0ec7lsau8vn&ep=v1_gifs_search&rid=giphy.gif&ct=g"/>
                                    <progress-item title="Օմեգա - 15neo"
                                                   src="https://media4.giphy.com/media/9tT0s3SBnDm4o/giphy.gif?cid=ecf05e476agvciuj95x2zxkv1dwxtlwkyqq26qv0vee8ko0w&ep=v1_gifs_search&rid=giphy.gif&ct=g"/>
                                </n-space>
                            </n-space>
                            <n-button :loading="loading">
                                <template #icon>
                                    <BaseIcon :path="mdiReload "/>
                                </template>
                                Թարմացնել իմ դերը
                            </n-button>

                        </div>
                    </div>

                </n-config-provider>
            </template>
            <template #sidebar>
                <NavSettings/>
            </template>
        </MainLayout>
    </main>
</template>


<style>
main {
    background-color: #303030;
}

@media (min-width: 1025px) {
    .mainContainer {
        width: 821px;
    }
}

.mainContent {
    border-radius: 10px;
    padding: 15px 20px;
    background: rgb(39, 39, 39);
}
</style>
