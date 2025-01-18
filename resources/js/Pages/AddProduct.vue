<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Inertia } from '@inertiajs/inertia';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

// Array reaktif untuk menyimpan daftar file input
const fileInputs = ref([{ id: Date.now() }]);

// Fungsi untuk menambahkan file input baru
const addFileInput = () => {
    fileInputs.value.push({ id: Date.now() }); // Tambahkan input baru dengan ID unik
};

// Fungsi untuk menangani perubahan file
const handleFileChange = (e, inputId) => {
  const file = e.target.files[0];
  if (file) {
    formData.value.push = file // Menambahkan file ke FormData
  }
};

// Fungsi untuk menghapus file input berdasarkan ID
const removeFileInput = (id) => {
    if (fileInputs.value.length > 1) {
        fileInputs.value = fileInputs.value.filter((input) => input.id !== id);
    } else {
        alert('Minimal satu file input harus ada!');
    }
};

const formData = ref({
    name: '',
    description: '',
    price: '',
    thumbnail: null,
    photos: []
})

const submitForm = () => {
    const payload = new FormData();
    payload.append('name', formData.value.name);
    payload.append('description', formData.value.description);
    payload.append('price', formData.value.price);
    if (formData.value.thumbnail) {
        payload.append('thumbnail', formData.value.thumbnail);
    }
    if (formData.value.photos) {
        payload.append('photos[]', formData.value.photos);
    }

    // Kirim data menggunakan Inertia
    Inertia.post('api/products', payload);
};

</script>

<template>

    <Head title="add-product" />
    <AuthenticatedLayout>
        <div class="flex flex-col mt-4 mx-6">
            <div class="flex flex-col mb-12">
                <h1 class="text-xl font-extrabold mb-1 lg:text-5xl">Tambah Produk</h1>
                <p class="text-base text-base-300 lg:text-lg">Form Tambah produk</p>
            </div>
            <form @submit.prevent="submitForm">
                <label class="form-control w-full max-w-sm">
                    <div class="label">
                        <span class="label-text lg:text-base">Product</span>
                    </div>
                    <input type="text" placeholder="Name" class="input input-bordered w-full max-w-lg"
                        v-model="formData.name" required />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text lg:text-base">Description</span>
                    </div>
                    <textarea class="textarea textarea-bordered h-24 textarea-sm" v-model="formData.description"
                        required></textarea>
                </label>
                <label class="form-control w-full max-w-sm">
                    <div class="label">
                        <span class="label-text lg:text-base">Price</span>
                    </div>
                    <input type="number" class="input input-bordered w-full max-w-lg" v-model="formData.price"
                        required />
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text lg:text-base">Thumbnail</span>
                    </div>
                    <input type="file" class="file-input file-input-bordered w-full max-w-xs"
                        @change="e => (formData.thumbnail = e.target.files[0])" required />
                </label>

                <label class="form-control w-full max-w-sm">
                    <div class="label">
                        <span class="label-text lg:text-base">Photo</span>
                    </div>
                    <div v-for="(input, index) in fileInputs" :key="input.id" class="mb-2 flex items-center gap-2">
                        <input type="file" :id="'file-' + input.id"
                            class="file-input file-input-bordered w-full max-w-xs"
                            @change="e => handleFileChange(e, input.id)" required />
                        <button type="button" @click="removeFileInput(input.id)"
                            class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600">
                            Hapus
                        </button>
                    </div>
                </label>

                <div class="flex flex-col max-w-full gap-4">
                    <button type="button" @click="addFileInput" class="mt-4 btn btn-outline btn-primary max-w-[8rem]">
                        Add Photo
                    </button>
                    <button type="submit" class="btn btn-primary max-w-[10rem]">
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
