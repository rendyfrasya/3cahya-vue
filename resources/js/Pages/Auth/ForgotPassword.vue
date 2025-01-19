<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>

        <Head title="Forgot Password" />

        <div class="flex flex-col m-4 p-5 bg-white lg:p-6 rounded-lg">
            
            <div class="flex flex-col items-center justify-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6">
                    <img src="https://via.placeholder.com/100" alt="Logo" class="w-20 h-20" />
                </div>
                <h2 class="text-lg lg:text-2xl font-bold mb-2">3 Cahaya Utama</h2>
            </div>

            <div class="mb-4 text-sm text-gray-600">
                Forgot your password? No problem. Just let us know your email
                address and we will email you a password reset link that will allow
                you to choose a new one.
            </div>

            <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="email" value="Email" />

                    <TextInput id="email" type="email" class="w-full px-4 py-2 mt-1 text-sm border rounded-lg focus:ring focus:ring-primary focus:outline-none focus:ring-opacity-50" v-model="form.email" required autofocus
                        autocomplete="username"/>

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Email Password Reset Link
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>
