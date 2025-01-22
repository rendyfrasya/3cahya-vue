<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    products: Array,
});


</script>

<template>

    <Head title="Products" />
    <AuthenticatedLayout>
        <div class="flex flex-col mx-6 mt-4">
            <div class="flex flex-col mb-12">
                <h1 class="mb-1 text-xl font-extrabold lg:text-5xl">Produk</h1>
                <p class="text-base text-base-300 lg:text-lg">Data semua produk</p>
            </div>
            <Link :href="route('products.add')" class="mb-2 text-xs text-white btn bg-primary w-36 lg:text-sm lg:w-40">
            + Tambah Product
            </Link>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr class="lg:text-base">
                            <th>No</th>
                            <th>Product</th>
                            <th>price</th>
                            <th>Favorite Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="product in products" :key="product.id" class="lg:text-base">
                            <td>
                                {{ product.id }}
                            </td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="w-12 h-12 mask mask-squircle">
                                            <img  :src="product.photo_products?.[0]?.path || 'https://via.placeholder.com/150'" 
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">{{ product.name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ product.price }}
                            </td>
                            <td>Purple</td>
                            <th>
                                <Link :href="route('products.edit', { product: product.id })" as="button"
                                    class="btn btn-sm btn-error">
                                details
                                </Link>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
