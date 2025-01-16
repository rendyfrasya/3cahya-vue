<script setup>
import { Head, Link } from '@inertiajs/vue3';


</script>

<template>

    <Head title="coba" />




    <div class="drawer lg:drawer-open">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <div class="navbar bg-base-100">
                <div class="flex-none">
                    <label for="my-drawer" class="btn btn-square btn-ghost drawer-button lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16">
                            </path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl font-extrabold text-[#2E5077] lg:hidden">3 Cahaya Utama</a>
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-36 p-2 shadow">
                        <li>
                            <a class="justify-between">
                                Profile
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- Page content here -->
            <div class="flex flex-col mt-4 mx-6">
                <div class="flex justify-between align-middle mb-12">
                    <div class="flex flex-col">
                        <h1 class="text-5xl font-extrabold mb-1">Overveiw</h1>
                        <p class="text-lg text-base-300">Rekapitulasi data penjualan</p>
                    </div>
                    <p class="flex gap-2">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
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
                        20 Mei - 26 Mei 2024
                    </p>
                </div>
                <div class="flex flex-col mb-12">
                    <h1 class="text-[#2E5077] text-lg font-bold mb-2">Statistik Produk</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-base text-base-300">Total Produk</h2>
                                        <p class="text-xl font-bold text-slate-900">200 Produk</p>
                                    </div>
                                    <div class="">
                                        <p class="text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
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
                                        <h2 class="card-title text-base text-base-300">Total Masuk</h2>
                                        <p class="text-xl font-bold text-slate-900">+200 Produk</p>
                                    </div>
                                    <div class="">
                                        <p class="text-success">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
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
                                        <h2 class="card-title text-base text-base-300">Total Keluar</h2>
                                        <p class="text-xl font-bold text-slate-900">-200 Produk</p>
                                    </div>
                                    <div class="">
                                        <p class="text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70"
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
                    <h1 class="text-[#2E5077] text-lg font-bold mb-2">Statistik Transaksi</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-start content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-base text-base-300">Transaksi Sukses</h2>
                                        <p class="text-2xl font-bold text-slate-900">35 Transaksi</p>
                                        <p class="text-base-300">Rp.+200.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-base text-base-300">Menunggu Pembayaran</h2>
                                        <p class="text-2xl font-bold text-slate-900">10 Transaksi</p>
                                        <p class="text-base-300">Rp.200.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-white shadow-xl border border-slate-200 text-primary-content">
                            <div class="card-body">
                                <div class="flex justify-between content-center">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="card-title text-base text-base-300">Transaksi Dibatalkan</h2>
                                        <p class="text-2xl font-bold text-slate-900">75 Transaksi</p>
                                        <p class="text-base-300">Rp.-200.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <footer class="absolute bottom-0 footer footer-center bg-slate-200 text-base-content p-4">
                <aside>
                    <p>Copyright © {new Date().getFullYear()} - All right reserved by ACME Industries Ltd</p>
                </aside>
            </footer>
        </div>
        <div class="drawer-side border-r-slate-100 border-[1px]">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="menu bg-base-200 text-base-content min-h-full w-[13rem] p-4">
                <div class="hidden lg:flex lg:my-4 lg:mx-4 ">
                    <h1 class="flex justify-center text-[#2E5077] font-bold text-lg">3 Cahaya Utama</h1>
                </div>
                <ul>
                    <small class="text-base-300">Main Menu</small>
                    <Link :href="route('dashboard')" class="side-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M7.755 13.38v6.83a1.54 1.54 0 0 1-1.54 1.54h-1.81a1.54 1.54 0 0 1-1.55-1.54v-6.83a1.54 1.54 0 0 1 1.55-1.55h1.81a1.54 1.54 0 0 1 1.54 1.55m6.7-9.58v16.41a1.54 1.54 0 0 1-1.55 1.54h-1.81a1.55 1.55 0 0 1-1.55-1.54V3.8a1.56 1.56 0 0 1 1.55-1.55h1.81a1.55 1.55 0 0 1 1.55 1.55m6.69 5.18v11.23a1.54 1.54 0 0 1-1.54 1.54h-1.81a1.54 1.54 0 0 1-1.55-1.54V8.98a1.55 1.55 0 0 1 1.55-1.55h1.85a1.55 1.55 0 0 1 1.5 1.55" />
                    </svg>
                    Dashboard
                    </Link>
                    <li>
                        <a class="flex gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M468.915 401.333q.345 1.631.406 3.295l.013.706v21.333c0 23.564-42.981 42.667-96 42.667c-52.49 0-95.14-18.723-95.987-41.961l-.013-.706v-21.333l.013-.706q.06-1.66.402-3.288c5.88 4.419 13.037 8.494 21.331 11.983c19.36 8.144 45.463 13.344 74.254 13.344c29.932 0 56.956-5.629 76.546-14.335c7.323-3.255 13.697-6.982 19.035-10.999M234.667 34.347l192 106.667l.001 78.722c-15.727-4.038-33.92-6.402-53.334-6.402c-29.239 0-55.704 5.375-75.228 14.052c-26.733 11.882-40.343 30.052-42.063 48.441l-.049.557l.122 172.713l-21.449 11.917l-192-106.667V141.014zm234.248 302.986q.345 1.631.406 3.295l.013.706v21.333c0 23.564-42.981 42.667-96 42.667c-52.49 0-95.14-18.723-95.987-41.961l-.013-.706v-21.333l.013-.706q.06-1.66.402-3.288c5.88 4.419 13.037 8.494 21.331 11.983c19.36 8.144 45.463 13.344 74.254 13.344c29.932 0 56.956-5.629 76.546-14.335c7.323-3.255 13.697-6.982 19.035-10.999M170.666 233.455l.001 144.598l42.667 23.704V257.158zm-85.332-47.406v144.594L128 354.348V209.752zm288 48.618c52.489 0 95.14 18.722 95.987 41.961l.013.706v21.333c0 23.564-42.981 42.667-96 42.667c-52.49 0-95.14-18.723-95.987-41.961l-.013-.706v-21.333l.142-2.341c2.734-22.476 44.606-40.326 95.858-40.326m-54.676-106.251l-125.579 70.086l41.588 23.104l125.867-69.926zm-83.991-46.662L108.8 151.68l41.662 23.146L276.04 104.74z" />
                                </svg>
                            </span>
                            Product
                        </a>
                    </li>
                </ul>
                <ul>
                    <small class="text-base-300">Settings</small>
                    <li>
                        <a class="flex gap-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="m17.653 10.35l2.056.336a.35.35 0 0 1 .291.343v1.913a.35.35 0 0 1-.288.342l-2.058.362a5.8 5.8 0 0 1-.49 1.185l1.217 1.69a.35.35 0 0 1-.036.45l-1.353 1.352a.35.35 0 0 1-.445.04l-1.707-1.198q-.566.315-1.193.5l-.363 2.048a.35.35 0 0 1-.343.287h-1.913a.35.35 0 0 1-.343-.29l-.34-2.039a6 6 0 0 1-1.197-.495l-1.694 1.186a.35.35 0 0 1-.446-.038L5.655 16.97a.35.35 0 0 1-.036-.448l1.197-1.674a6 6 0 0 1-.5-1.204l-2.029-.36A.35.35 0 0 1 4 12.942v-1.913c0-.17.123-.315.29-.343l2.03-.338q.183-.63.5-1.203L5.636 7.453a.35.35 0 0 1 .039-.445l1.352-1.352c.12-.12.31-.136.448-.037l1.68 1.2a6 6 0 0 1 1.196-.491l.333-2.036A.35.35 0 0 1 11.028 4h1.913c.17 0 .314.122.343.288l.359 2.047q.624.182 1.193.497l1.685-1.211a.35.35 0 0 1 .45.036l1.352 1.352c.12.12.136.308.039.446l-1.2 1.71q.31.565.49 1.185M9.565 12a2.435 2.435 0 1 0 4.87 0a2.435 2.435 0 0 0-4.87 0"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            Web Settings
                        </a>
                    </li>
                </ul>
                <div class="fixed bottom-0 p-4 w-full">
                    <Link :href="route('logout')" method="POST" as="button" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M5 3h6a3 3 0 0 1 3 3v4h-1V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-4h1v4a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3m3 9h11.25L16 8.75l.66-.75l4.5 4.5l-4.5 4.5l-.66-.75L19.25 13H8z" />
                    </svg>
                    <p class="text-base ml-2">logout</p>
                    </Link>
                </div>
            </div>
        </div>
    </div>


</template>