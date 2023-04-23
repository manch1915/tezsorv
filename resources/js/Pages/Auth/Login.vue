<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import {NInput, NSpace, darkTheme, NConfigProvider} from "naive-ui";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <n-config-provider :theme="darkTheme">
        <form @submit.prevent="submit">
            <div>
                <p class="label pb-1">Email</p>
                <n-space vertical>
                    <n-input v-model:value="form.email" type="email" name="emall" placeholder="Email"/>
                </n-space>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">


                <p class="label pb-1">Password</p>
                <n-space vertical>
                    <n-input v-model:value="form.password" type="password" placeholder="password" show-password-on="click"/>
                </n-space>

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
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
