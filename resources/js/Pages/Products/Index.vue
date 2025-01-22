<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import Vue3EasyDataTable from 'vue3-easy-data-table';
import 'vue3-easy-data-table/dist/style.css';
const props = defineProps({
    products: Array,
});
const headers = ref([
  { text: 'No', value: 'id' },
  { text: 'Nama Produk', value: 'name' },
  { text: 'Harga', value: 'price' },
  { text: 'Deskripsi', value: 'description' },
  { text: 'Action', value: 'action' },
]);
const initializeTooltips = () => {
  nextTick(() => {
    const tooltips = document.querySelectorAll('.tooltip');
    tooltips.forEach(tooltip => {
      // Ensure DaisyUI tooltips are initialized
      if (!tooltip.classList.contains('tooltip-show')) {
        tooltip.classList.add('tooltip-show');
      }
    });
  });
};

onMounted(() => {
  initializeTooltips();
});
</script>
<style scoped>
.product-table {
    --easy-table-header-font-size: 14px;
    --easy-table-body-row-font-size: 14px;
}
</style>
<template>
    <Head title="Products" />
    <AuthenticatedLayout>
        <div class="flex flex-col mx-6">
            <div class="grid grid-cols-12 gap-4 mb-5 mt-3">
                <div class="col-span-8 items-center">
                    <div class="flex flex-col">
                        <h1 class="text-xl font-extrabold mb-1 lg:text-5xl">Produk</h1>
                        <p class="text-base text-base-300 lg:text-lg">Data semua produk</p>
                    </div>
                </div>
                <div class="col-span-4 flex justify-end items-center">
                    <Link :href="route('products.add')" class="btn bg-primary w-36 text-xs text-white lg:text-sm lg:w-40 mb-2">
                        + Tambah Product
                    </Link>
                </div>
            </div>
            <Vue3EasyDataTable
                :headers="headers"
                :items="products"
                :search="true"
                :pagination="true"
                :sortable="true"
                :rows-per-page="5"
                table-class-name="product-table"
                class="mt-4"
            >
            <template #item-action="item">
                <div class="flex flex-row gap-3">
                    <div class="tooltip" data-tip="Edit Produk">
                        <button class="btn btn-sm border-2 border-green-500 bg-transparent hover:bg-green-200 text-green-500 my-2 text-lg px-2 py-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                        </button>
                    </div>
                    <div class="tooltip" data-tip="Hapus Produk">
                        <button class="btn btn-sm border-2 border-red-500 bg-transparent hover:bg-red-200 text-red-500 my-2 text-lg px-2 py-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14 11v6m-4-6v6M6 7v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7M4 7h16M7 7l2-4h6l2 4"/></svg>
                        </button>
                    </div>
                </div>
            </template>
            </Vue3EasyDataTable>
        </div>
    </AuthenticatedLayout>
</template>