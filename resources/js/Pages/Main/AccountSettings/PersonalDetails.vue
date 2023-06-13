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
    sex_id: props.auth.user.sex_id,
    soundcloud_track: props.auth.user.soundcloud_track,
    terms: false,
})

const countryNames = [
    {
        label: 'Հայաստան',
        value: 'Armenia'
    },
    {
        label: 'ԱՄՆ',
        value: 'USA'
    },
    {
        label: 'Ռուսաստան',
        value: 'Russia'
    },
    {
        label: 'Աֆղանստան',
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
                    <div class="mainContainer sm:mt-0 mt-5">
                        <div class="mainContent flex flex-col">
                            <SettingsInput title="Նիկ">
                                <div class="text-white">
                                    <n-input v-model:value="form.username" placeholder="Փոխել Նիկը" type="text"/>
                                </div>
                                <InputError v-if="errors.username" :message="errors.username[0]" class="mt-2"/>
                            </SettingsInput>

                            <SettingsInput title="Անուն">
                                <div class="text-white">
                                    <n-input v-model:value="form.first_name" placeholder="Փոխել Անունը" type="text"/>
                                </div>
                            </SettingsInput>

                            <SettingsInput border title="Ազգանուն">
                                <div class="text-white">
                                    <n-input v-model:value="form.last_name" placeholder="Փոխել Ազգանունը" type="text"/>
                                </div>
                            </SettingsInput>

                            <SettingsInput border title="Բիո">
                                <div class="text-white">
                                    <n-input v-model:value="form.about" placeholder="Բիո" type="textarea"/>
                                </div>
                            </SettingsInput>

                            <SettingsInput border title="Սեռ">
                                <n-radio-group v-model:value="form.sex_id" name="radiogroup">
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

                            <SettingsInput border title="Երկիր">
                                <n-select v-model:value="form.country" :options="countryNames" placeholder="Ընտրեք"/>
                            </SettingsInput>

                            <SettingsInput border title="Soundcloud">
                                <div class="text-white">
                                    <n-input v-model:value="form.soundcloud_track" placeholder="Track embed"
                                             type="textarea"/>
                                </div>
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
