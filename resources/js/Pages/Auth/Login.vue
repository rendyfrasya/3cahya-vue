<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
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

        <!-- <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4 block">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600"
                        >Remember me</span
                    >
                </label>
            </div>

            <div class="mt-4 flex items-center justify-end">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </PrimaryButton>
            </div>
        </form> -->


        <div class="flex w-3/4 max-w-4xl bg-white rounded-lg shadow-xl overflow-hidden">
            <!-- Left Section -->
            <div class="w-full lg:w-1/2 p-8">
                <h1 class="text-lg lg:text-2xl font-bold text-gray-800 mb-4">Log in to your Account</h1>
                <p class="text-xs lg:text-sm text-gray-600 mb-6">
                    Welcome back! Select a method to log in:
                </p>
                <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                    {{ status }}
                </div>
                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <label for="email" class="block text-xs lg:text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" v-model="form.email"
                            class="w-full px-4 py-2 mt-1 text-sm border rounded-lg focus:ring focus:ring-primary focus:outline-none focus:ring-opacity-50"
                            placeholder="Enter your email" />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-xs lg:text-sm font-medium text-gray-700">Password</label>
                        <input type="password" id="password" v-model="form.password"
                            class="w-full px-4 py-2 mt-1 text-sm border rounded-lg focus:ring focus:ring-primary focus:outline-none focus:ring-opacity-50"
                            placeholder="Enter your password" />
                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <label class="flex items-center text-xs lg:text-sm text-gray-600">
                            <input type="checkbox" class="mr-2 rounded border-gray-300" v-model="form.remember" />
                            Remember me
                        </label>
                        <Link :href="route('password.request')" v-if="canResetPassword"
                            class="text-xs lg:text-sm text-blue-500 hover:underline">
                        Forgot Password?
                        </Link>
                    </div>
                    <button type="submit"
                        class="w-full px-4 py-2 text-xs lg:text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                        Log in
                    </button>
                </form>
            </div>
            <!-- Right Section -->
            <div class="hidden lg:w-1/2 bg-primary lg:flex lg:flex-col items-center justify-center text-white p-8">
                <div class="w-40 h-40 bg-white rounded-full flex items-center justify-center mb-6">
                    <img src="https://via.placeholder.com/100" alt="Logo" class="w-20 h-20" />
                </div>
                <h2 class="text-2xl font-bold mb-2">3 Cahaya Utama</h2>
            </div>
        </div>



    </GuestLayout>
</template>
