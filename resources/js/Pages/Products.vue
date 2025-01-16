<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

</script>

<template>

    <Head title="Products" />
    <AuthenticatedLayout>
        <div class="flex flex-col mt-4 mx-6">
            <div class="flex flex-col mb-12">
                <h1 class="text-xl font-extrabold mb-1 lg:text-5xl">Produk</h1>
                <p class="text-base text-base-300 lg:text-lg">Data semua produk</p>
            </div>
            <Link :href="route('product.add')" class="btn bg-primary w-36 text-xs text-white lg:text-sm lg:w-40 mb-2">
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
                        <!-- row 1 -->
                        <tr class="lg:text-base">
                            <td>
                                1
                            </td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle h-12 w-12">
                                            <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                alt="Avatar Tailwind CSS Component" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">Hart Hagerty</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Zemlak, Daniel and Leannon
                            </td>
                            <td>Purple</td>
                            <th>
                                <button class="btn btn-ghost btn-sm">details</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>