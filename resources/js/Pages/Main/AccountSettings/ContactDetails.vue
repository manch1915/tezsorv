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

const props = defineProps({
    auth: Object,
})

const form = useForm({
    username: props.auth.user.username,

})

const state = reactive({
    loading: false
})

const saveData = async () => {
    try {
        state.loading = true
        const response = await axios.post(route('user.update'), form)
        console.log(response.data)
    } catch (error) {
        console.error(error)
    }
    state.loading = false
}

</script>

<template >
    <main>
        <MainHeader :auth="auth"/>
        <MainLayout>
            <template #main>
                <n-config-provider :theme="darkTheme">
                    <div class="mainContainer">
                        <div class="mainContent flex flex-col">
                            <SettingsInput title="Тг" border>
                                <div class="text-white">
                                    <n-input v-model:value="form.tg" placeholder="Изминить tg" type="text"/>
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
