<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>

<template>
    <Head title="add-product" />
    <AuthenticatedLayout>
        <div class="flex flex-col mt-4 mx-6">
            <div class="flex flex-col mb-12">
                <h1 class="text-xl font-extrabold mb-1 lg:text-5xl">Tambah Produk</h1>
                <p class="text-base text-base-300 lg:text-lg">Form Tambah produk</p>
            </div>
            
        </div>
    </AuthenticatedLayout>
</template>