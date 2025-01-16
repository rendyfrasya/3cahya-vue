<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>


        <div class="flex flex-col mt-4 mx-6">
                <div class="flex justify-between content-center mb-12">
                    <div class="flex flex-col">
                        <h1 class="text-xl font-extrabold mb-1 lg:text-5xl">Overview</h1>
                        <p class="text-base text-base-300 lg:text-lg">Rekapitulasi data penjualan</p>
                    </div>
                    <div class="flex justify-center content-end gap-2 p-2">
                        <span class="w-6 h-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path stroke="currentColor" stroke-width="1.5"
                                        d="M2 12c0-3.771 0-5.657 1.172-6.828S6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172S22 8.229 22 12v2c0 3.771 0 5.657-1.172 6.828S17.771 22 14 22h-4c-3.771 0-5.657 0-6.828-1.172S2 17.771 2 14z" />
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="1.5"
                                        d="M7 4V2.5M17 4V2.5M2.5 9h19" />
                                    <path fill="currentColor"
                                        d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0m0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0" />
                                </g>
                            </svg>
                        </span>
                        <p class="flex text-xs lg:text-base gap-2">
                            20 Mei - 26 Mei 2024
                        </p>
                    </div>
                </div>
                <div class="flex flex-col mb-12">
                    <h1 class="text-[#2E5077] text-base font-bold mb-2 lg:text-lg">Statistik Produk</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-sm text-base-300 lg:text-base">Total Produk</h2>
                                        <p class="text-lg font-bold text-slate-900 lg:text-xl">200 Produk</p>
                                    </div>
                                    <div class="w-14 lg:w-[70px]">
                                        <p class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M468.915 401.333q.345 1.631.406 3.295l.013.706v21.333c0 23.564-42.981 42.667-96 42.667c-52.49 0-95.14-18.723-95.987-41.961l-.013-.706v-21.333l.013-.706q.06-1.66.402-3.288c5.88 4.419 13.037 8.494 21.331 11.983c19.36 8.144 45.463 13.344 74.254 13.344c29.932 0 56.956-5.629 76.546-14.335c7.323-3.255 13.697-6.982 19.035-10.999M234.667 34.347l192 106.667l.001 78.722c-15.727-4.038-33.92-6.402-53.334-6.402c-29.239 0-55.704 5.375-75.228 14.052c-26.733 11.882-40.343 30.052-42.063 48.441l-.049.557l.122 172.713l-21.449 11.917l-192-106.667V141.014zm234.248 302.986q.345 1.631.406 3.295l.013.706v21.333c0 23.564-42.981 42.667-96 42.667c-52.49 0-95.14-18.723-95.987-41.961l-.013-.706v-21.333l.013-.706q.06-1.66.402-3.288c5.88 4.419 13.037 8.494 21.331 11.983c19.36 8.144 45.463 13.344 74.254 13.344c29.932 0 56.956-5.629 76.546-14.335c7.323-3.255 13.697-6.982 19.035-10.999M170.666 233.455l.001 144.598l42.667 23.704V257.158zm-85.332-47.406v144.594L128 354.348V209.752zm288 48.618c52.489 0 95.14 18.722 95.987 41.961l.013.706v21.333c0 23.564-42.981 42.667-96 42.667c-52.49 0-95.14-18.723-95.987-41.961l-.013-.706v-21.333l.142-2.341c2.734-22.476 44.606-40.326 95.858-40.326m-54.676-106.251l-125.579 70.086l41.588 23.104l125.867-69.926zm-83.991-46.662L108.8 151.68l41.662 23.146L276.04 104.74z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-sm text-base-300 lg:text-base">Total Masuk</h2>
                                        <p class="text-lg font-bold text-slate-900 lg:text-xl">+200 Produk</p>
                                    </div>
                                    <div class="w-14 lg:w-[70px]">
                                        <p class="text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m21.706 5.292l-2.999-2.999A1 1 0 0 0 18 2H6a1 1 0 0 0-.707.293L2.294 5.292A1 1 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a1 1 0 0 0-.294-.708M6.414 4h11.172l1 1H5.414zM4 19V7h16l.002 12z" />
                                                <path fill="currentColor" d="M14 9h-4v3H7l5 5l5-5h-3z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-sm text-base-300 lg:text-base">Total Keluar</h2>
                                        <p class="text-lg font-bold text-slate-900 lg:text-xl">-200 Produk</p>
                                    </div>
                                    <div class="w-14 lg:w-[70px]">
                                        <p class="text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="m21.706 5.292l-2.999-2.999A1 1 0 0 0 18 2H6a1 1 0 0 0-.707.293L2.294 5.292A1 1 0 0 0 2 6v13c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6a1 1 0 0 0-.294-.708M6.414 4h11.172l1 1H5.414zM4 19V7h16l.002 12z" />
                                                <path fill="currentColor" d="M7 14h3v3h4v-3h3l-5-5z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <h1 class="text-[#2E5077] text-base font-bold mb-2 lg:text-lg">Statistik Transaksi</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-start content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-sm text-base-300 lg:text-base">Transaksi Sukses</h2>
                                        <p class="text-xl font-bold text-slate-900 lg:text-2xl">35 Transaksi</p>
                                        <p class="text-base-300 text-sm lg:text-base">Rp.+200.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-base text-base-300">Menunggu Pembayaran</h2>
                                        <p class="text-xl font-bold text-slate-900 lg:text-2xl">10 Transaksi</p>
                                        <p class="text-base-300 text-sm lg:text-base">Rp.200.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-base text-base-300">Transaksi Dibatalkan</h2>
                                        <p class="text-xl font-bold text-slate-900 lg:text-2xl">75 Transaksi</p>
                                        <p class="text-base-300 text-sm lg:text-base">Rp.-200.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </AuthenticatedLayout>
</template>
