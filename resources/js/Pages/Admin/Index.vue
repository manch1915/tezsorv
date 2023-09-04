<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {
    NDataTable,
    darkTheme,
    NConfigProvider,
    NButton,
    NModal,
    NCard,
    NInputGroup,
    NInput,
    NSpace,
    NInputGroupLabel
} from "naive-ui";
import {h, ref} from 'vue';
import axios from 'axios';

const props = defineProps({
    users: Array
})
const openModal = (row) => {
    showModal.value = true
    axios.get(route('member.username', row.username))
        .then((res) => {
            console.log(res)
            modelUserData.value = res.data
        })
}

const showModal = ref(false)
const modelUserData = ref()

const columns = [
    {
        title: 'Id',
        key: 'id'
    },
    {
        title: 'Username',
        key: 'username'
    },
    {
        title: 'Created_at',
        key: 'created_at'
    },
    {
        title: 'Action',
        key: 'actions',
        render(row) {
            return h(
                NButton,
                {
                    strong: true,
                    tertiary: true,
                    size: 'small',
                    onClick: () => openModal(row)
                },
                {default: () => 'Edit'}
            )
        }
    }
]
</script>

<template>
    <AdminLayout>
        <h1 class="text-3xl">Users</h1>
        <n-config-provider :theme="darkTheme">
            <n-data-table :data="users" :columns="columns"/>
        </n-config-provider>
        <n-modal v-model:show="showModal">
            <n-config-provider :theme="darkTheme">
                <n-card
                    style="width: 600px"
                    title="User data edit"
                    :bordered="false"
                    size="huge"
                    role="dialog"
                    aria-modal="true"
                >

                    <template v-if="modelUserData">
                        <n-space vertical>
                            <n-input v-model:value="modelUserData.username" type="text"/>
                            <n-input v-model:value="modelUserData.email" type="text"/>
                            <n-input v-model:value="modelUserData.instagram" type="text" placeholder="instagram"/>
                            <n-input v-model:value="modelUserData.telegram" type="text" placeholder="telegram"/>
                            <n-input v-model:value="modelUserData.neo" type="text" placeholder="neo"/>
                            <n-input v-model:value="modelUserData.city" type="text" placeholder="city"/>

                            <n-input v-model:value="modelUserData.country" type="text" placeholder="country"/>
                            <n-input v-model:value="modelUserData.about" type="textarea" placeholder="about"/>
                        </n-space>
                    </template>
                    <template #footer>
                        <n-space>
                            <n-button type="error" class="text-white">Delete user</n-button>
                            <n-button type="success" class="text-white">Save data</n-button>
                        </n-space>
                    </template>
                </n-card>
            </n-config-provider>
        </n-modal>
    </AdminLayout>
</template>

<style scoped>

</style>
