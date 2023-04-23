<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import {NInput, NSpace, darkTheme, NConfigProvider} from "naive-ui";
const form = useForm({
    username: '',
    email: '',
    password: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        <n-config-provider :theme="darkTheme">
        <form @submit.prevent="submit">
            <div>
                <p class="label pb-1">Username</p>
                <n-space vertical>
                    <n-input v-model:value="form.username" id="first_name" maxlength="30" show-count clearable placeholder="Username"/>
                </n-space>
                <InputError class="mt-2" :message="form.errors.username" />
            </div>

            <div class="mt-4">
                <p class="label pb-1">Email</p>
                <n-space vertical>
                    <n-input v-model:value="form.email" type="email" show-count clearable placeholder="Email"/>
                </n-space>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <p class="label pb-1">Password</p>
                <n-space vertical>
                    <n-input v-model:value="form.password" type="password" show-password-on="click"/>
                </n-space>
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
        </n-config-provider>
    </GuestLayout>
</template>
<style scoped>
    .label{
        color: #bebebe;
        text-shadow: 0 0 10px rgba(88, 40, 139, 0.8);
    }
</style>
