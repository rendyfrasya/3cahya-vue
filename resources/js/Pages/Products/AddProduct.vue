<template>

    <Head title="add-product" />
    <AuthenticatedLayout>
        <div class="flex flex-col mx-6 mb-10">
            <div class="flex flex-col mb-5">
                <h1 class="mb-1 text-xl font-extrabold lg:text-5xl">Tambah Produk</h1>
                <p class="text-base text-base-300 lg:text-lg">Form Tambah produk</p>
            </div>
            <form @submit.prevent="submitForm">
                <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    <div class="form-control">
                        <label for="product-name" class="label">
                            <span class="label-text lg:text-base">Produk</span>
                        </label>
                        <input id="product-name" v-elsetype="text" placeholder="Name" class="input input-bordered"
                            v-model="formData.name" required />
                    </div>
                    <div class="form-control">
                        <label for="price" class="label">
                            <span class="label-text lg:text-base">Harga</span>
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 font-bold text-gray-900 bg-gray-200 border border-gray-300 text-md rounded-e-0 border-e-0 rounded-s-md">
                                Rp
                            </span>
                            <input type="number" class="flex-1 rounded-l-none input input-bordered"
                                v-model="formData.price" required placeholder="Masukan Harga Jual Produk" id="price" />
                        </div>
                    </div>
                </div>
                <div class="mt-2 form-control">
                    <label for="product-desc" class="label">
                        <span class="label-text lg:text-base">Deskripsi</span>
                    </label>
                    <textarea id="product-desc" class="h-24 textarea textarea-bordered textarea-sm"
                        v-model="formData.description" required></textarea>
                </div>
                <div class="block mt-2 form-control">
                    <div class="label">
                        <span class="label-text lg:text-base">Gambar Product</span>
                    </div>
                    <div class="drag-area">
                        <div class="content-center p-6 text-center text-gray-600 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100 hover:border-gray-400"
                            @dragover.prevent="handleDragOver" @dragleave="handleDragLeave" @drop.prevent="handleDrop"
                            ref="fileUploadArea">
                            <span>Drag & Drop your file here, or
                                <button type="button" class="btn btn-sm mx-1 h-[2px] px-6 bg-primary text-base-100"
                                    @click="triggerFileInput">Click to select</button>
                            </span>
                            <input type="file" class="hidden" accept="image/*" ref="fileInput"
                                @change="handleFileChange" multiple />
                        </div>
                    </div>
                    <div v-if="imagePreviews.length" class="flex flex-wrap gap-4 mt-4">
                        <div v-for="(preview, index) in imagePreviews" :key="index" class="relative">
                            <img :src="preview" alt="Image Preview"
                                class="object-cover w-40 h-40 border-2 border-gray-300 rounded-lg sm:w-48 sm:h-48">
                            <button @click="removeImage(index)"
                                class="btn btn-xs btn-error absolute top-1 right-1 mt-1 mr-1 px-[6px] py-2 text-base-100 content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 1216 1312">
                                    <path fill="currentColor"
                                        d="M1202 1066q0 40-28 68l-136 136q-28 28-68 28t-68-28L608 976l-294 294q-28 28-68 28t-68-28L42 1134q-28-28-28-68t28-68l294-294L42 410q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294l294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68L880 704l294 294q28 28 28 68" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-end max-w-full gap-4 mt-5">
                    <button type="submit" class="btn btn-primary max-w-[10rem]">
                        Tambahkan Produk
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const fileInput = ref(null);
const fileUploadArea = ref(null);
const imagePreviews = ref([]);

const triggerFileInput = () => {
    fileInput.value.click();
};

const handleFileChange = (event) => {
    const files = Array.from(event.target.files);
    files.forEach(file => {
        previewImage(file);
    });
};

const handleDrop = (event) => {
    const files = Array.from(event.dataTransfer.files);
    files.forEach(file => {
        previewImage(file);
    });
};

const previewImage = (file) => {
    const reader = new FileReader();
    reader.onload = (e) => {
        imagePreviews.value.push(e.target.result);
        formData.images.push(file);
    };
    reader.readAsDataURL(file);
};

const handleDragOver = () => {
    fileUploadArea.value.classList.add('bg-gray-100', 'border-gray-400');
};

const handleDragLeave = () => {
    fileUploadArea.value.classList.remove('bg-gray-100', 'border-gray-400');
};

const removeImage = (index) => {
    imagePreviews.value.splice(index, 1);
    formData.images.splice(index, 1);
};

const formData = useForm({
    name: '',
    description: '',
    price: '',
    images: []
})

const submitForm = () => {
    formData.post('/product/store');
};

</script>
