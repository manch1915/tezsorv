<script setup>
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import NavSettings from "@/Components/NavSettings.vue";
import {useForm} from "@inertiajs/vue3";
import {reactive} from "vue";
import axios from "axios";
import SettingsInput from "@/Components/SettingsInput.vue";
import BaseIcon from "@/Components/BaseIcon.vue";
import {mdiContentSaveAll} from "@mdi/js";
import {NButton, NConfigProvider, NInput} from "naive-ui";
import {darkTheme } from 'naive-ui'
import {toast} from "vue3-toastify";
import 'vue3-toastify/dist/index.css';

const props = defineProps({
    auth: Object,
})

const form = useForm({
    username: props.auth.user.username,
    telegram: props.auth.user.telegram,
    instagram: props.auth.user.instagram,
})

const state = reactive({
    loading: false
})

const saveData = async () => {
    try {
        state.loading = true
        await axios.post(route('user.update'), form).then(() => {
            state.loading = false
            toast("Data changed successfully", {
                autoClose: 3000,
                theme: "dark",
                type: "success"
            });
        })
    } catch (error) {
        console.error(error)
    }
}

</script>

<template >
    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <n-config-provider :theme="darkTheme">
                    <div class="mainContainer sm:mt-0 mt-5">
                        <div class="mainContent flex flex-col">
                            <SettingsInput title="tg" border>
                                <div class="text-white">
                                    <n-input v-model:value="form.telegram" placeholder="Փոխել տելեգրամի նիկը" type="text"/>
                                </div>
                            </SettingsInput>
                            <SettingsInput title="ig" border>
                                <div class="text-white">
                                    <n-input v-model:value="form.instagram" placeholder="Փոխել ինստագրամի նիկը" type="text"/>
                                </div>
                            </SettingsInput>

                            <n-button :loading="state.loading" @click.prevent="saveData" class="mt-5">
                                <template #icon>
                                    <BaseIcon :path="mdiContentSaveAll"/>
                                </template>
                                Save
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
main{
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
