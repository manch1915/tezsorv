<script setup>
import {useMainStore} from "@/stores/main";
import MainHeader from "@/Components/MainHeader.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import NavSettings from "@/Components/NavSettings.vue";
import {NButton, NConfigProvider, NInput, NRadio, NRadioGroup, NSelect, NSpace} from "naive-ui";
import {darkTheme} from 'naive-ui'
import {useForm} from "@inertiajs/vue3";
import SettingsInput from "@/Components/SettingsInput.vue";
import BaseIcon from "@/Components/BaseIcon.vue";
import {mdiContentSaveAll} from '@mdi/js';
import {reactive, ref} from "vue";
import axios from 'axios';
import InputError from "@/Components/InputError.vue";
import {toast} from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

const props = defineProps({
    auth: Object,
})

const state = reactive({
    loading: false
})

const errors = ref([]);

const form = useForm({
    username: props.auth.user.username,
    first_name: props.auth.user.first_name,
    last_name: props.auth.user.last_name,
    about: props.auth.user.about,
    country: props.auth.user.country,
    gender: props.auth.user.sex_id,
    terms: false,
})

const countryNames = [
    {
        label: 'Armenia',
        value: 'Armenia'
    },
    {
        label: 'USA',
        value: 'USA'
    },
    {
        label: 'Russia',
        value: 'Russia'
    },
    {
        label: 'Afghanistan',
        value: 'Afghanistan'
    }
]

const saveData = async () => {
    try {
        state.loading = true
        await axios.post(route('user.update'), form).then(res => {
            const username = res?.data?.data?.username?.[0];
            if (username) {
                toast(username, {
                    autoClose: 3000,
                    theme: "dark",
                    type: "warning"
                });
            }else{
                toast("Data changed successfully", {
                    autoClose: 3000,
                    theme: "dark",
                    type: "success"
                });
            }

        })

    } catch (error) {
        console.error(error)
    }
    state.loading = false
}

const store = useMainStore();

store.fetchSexes();

</script>

<template>

    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <n-config-provider :theme="darkTheme">
                    <div class="mainContainer  mt-5">
                        <div class="mainContent flex flex-col">
                            <SettingsInput title="Ник">
                                <div class="text-white">
                                    <n-input v-model:value="form.username" placeholder="Изминить Ник" type="text"/>
                                </div>
                                <InputError v-if="errors.username" :message="errors.username[0]" class="mt-2"/>
                            </SettingsInput>

                            <SettingsInput title="Имя">
                                <div class="text-white">
                                    <n-input v-model:value="form.first_name" placeholder="Изминить Имя" type="text"/>
                                </div>
                            </SettingsInput>

                            <SettingsInput border title="Фамилия">
                                <div class="text-white">
                                    <n-input v-model:value="form.last_name" placeholder="Изминить Фамилия" type="text"/>
                                </div>
                            </SettingsInput>

                            <SettingsInput border title="Био">
                                <div class="text-white">
                                    <n-input v-model:value="form.about" placeholder="Био" type="textarea"/>
                                </div>
                            </SettingsInput>

                            <SettingsInput border title="Пол">
                                <n-radio-group v-model:value="form.gender" name="radiogroup">
                                    <n-space>
                                        <n-radio
                                            v-for="item in store.sexes"
                                            :key="item.id"
                                            :label="item.name"
                                            :value="item.id"
                                        />
                                    </n-space>
                                </n-radio-group>
                            </SettingsInput>

                            <SettingsInput border title="Страна">
                                <n-select v-model:value="form.country" :options="countryNames"/>
                            </SettingsInput>
                            <n-button :loading="state.loading" @click.prevent="saveData">
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
