<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    email: {
        type: String,
        required: true,
    },
    token: {
        type: String,
        required: true,
    },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Reset Password" />

        <div class="flex flex-col lg:w-2/4 bg-white p-6 rounded-lg">

            <div class="flex flex-col items-center justify-center">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-6">
                    <img src="https://via.placeholder.com/100" alt="Logo" class="w-20 h-20" />
                </div>
                <h2 class="text-lg lg:text-2xl font-bold mb-2">3 Cahaya Utama</h2>
            </div>

            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="email" value="Email" />

                    <TextInput id="email" type="email"
                        class="w-full px-4 py-2 mt-1 text-sm border rounded-lg focus:ring focus:ring-primary focus:outline-none focus:ring-opacity-50"
                        v-model="form.email" required autofocus autocomplete="username" />

                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" />

                    <TextInput id="password" type="password"
                        class="w-full px-4 py-2 mt-1 text-sm border rounded-lg focus:ring focus:ring-primary focus:outline-none focus:ring-opacity-50"
                        v-model="form.password" required autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password_confirmation" value="Confirm Password" />

                    <TextInput id="password_confirmation" type="password"
                        class="w-full px-4 py-2 mt-1 text-sm border rounded-lg focus:ring focus:ring-primary focus:outline-none focus:ring-opacity-50"
                        v-model="form.password_confirmation" required autocomplete="new-password" />

                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Reset Password
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>
