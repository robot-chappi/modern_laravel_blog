<script setup>
import {ref} from 'vue';
import {useDark, useToggle} from "@vueuse/core";
import {Inertia} from '@inertiajs/inertia';
import {Head} from '@inertiajs/inertia-vue3';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';

defineProps({
    title: String,
});

const showMobileMenu = ref(false);
const isDark = useDark();
const toggleDark = useToggle(isDark);

const logout = () => {
    Inertia.post(route('logout'));
};

</script>

<style>
.scrollbar::-webkit-scrollbar {
    width: 5px;
    @apply bg-gray-200 dark:bg-transparent
}

.scrollbar::-webkit-scrollbar-thumb {
    border-radius: 10px;
    @apply bg-purple-600
}

.scrollbar::-webkit-scrollbar-track {
    border-radius: 10px;
    @apply bg-gray-200 dark:bg-transparent

}
</style>

<template>
    <div>
        <Head :title="title"/>

        <Banner/>

        <div class="flex h-screen bg-gray-50 dark:bg-gray-900">
            <!-- Desktop sidebar -->
            <aside
                class="z-20 scrollbar hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
            >
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a
                        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                        href="#"
                    >
                        Modern Blog
                    </a>
                    <ul class="mt-6">
                        <li class="relative px-6 py-3">
                          <span
                              :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                              aria-hidden="true"
                          ></span>

                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-table w-5"></i>
                                <span class="ml-4">Dashboard</span>
                            </NavLink>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-list w-5"></i>
                                <span class="ml-4">Posts</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-tv w-5"></i>
                                <span class="ml-4">Categories</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-tag w-5"></i>
                                <span class="ml-4">Tags</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-star w-5"></i>
                                <span class="ml-4">Reviews</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-comment w-5"></i>
                                <span class="ml-4">Comments</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-users w-5"></i>
                                <span class="ml-4">Users</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-heart w-5"></i>
                                <span class="ml-4">Features</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-share-nodes w-5"></i>
                                <span class="ml-4">Social Networks</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-square w-5"></i>
                                <span class="ml-4">Advantages</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-money-bill w-5"></i>
                                <span class="ml-4">Pricing</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-headphones w-5"></i>
                                <span class="ml-4">Team</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-shield w-5"></i>
                                <span class="ml-4">Cooperation</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-newspaper w-5"></i>
                                <span class="ml-4">Newsletter</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-circle-question w-5"></i>
                                <span class="ml-4">FAQ</span>
                            </NavLink>
                        </li>
                    </ul>
                    <div class="px-6 my-6">
                        <NavLink
                            class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            :href="route('welcome')"
                        >
                            Go to home page
                            <span class="ml-2" aria-hidden="true"> > </span>
                        </NavLink>
                    </div>
                </div>
            </aside>

            <!-- Mobile sidebar -->
            <aside
                v-if="showMobileMenu"
                class="fixed scrollbar inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            >
                <div class="py-4 text-gray-500 dark:text-gray-400">
                    <a
                        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                        href="#"
                    >
                        Modern Blog
                    </a>
                    <ul class="mt-6">
                        <li class="relative px-6 py-3">
                          <span
                              :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                              aria-hidden="true"
                          ></span>

                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-table w-5"></i>
                                <span class="ml-4">Dashboard</span>
                            </NavLink>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-list w-5"></i>
                                <span class="ml-4">Posts</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-tv w-5"></i>
                                <span class="ml-4">Categories</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-tag w-5"></i>
                                <span class="ml-4">Tags</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-star w-5"></i>
                                <span class="ml-4">Reviews</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-users w-5"></i>
                                <span class="ml-4">Users</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-heart w-5"></i>
                                <span class="ml-4">Features</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-share-nodes w-5"></i>
                                <span class="ml-4">Social Networks</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-square w-5"></i>
                                <span class="ml-4">Advantages</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-money-bill w-5"></i>
                                <span class="ml-4">Pricing</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-headphones w-5"></i>
                                <span class="ml-4">Team</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-shield w-5"></i>
                                <span class="ml-4">Cooperation</span>
                            </NavLink>
                        </li>
                        <li class="relative px-6 py-3">
                            <span
                                :class="route().current('admin.dashboard') ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : ''"
                                aria-hidden="true"
                            ></span>
                            <NavLink
                                :href="route('admin.dashboard')"
                                :active="route().current('admin.dashboard')"
                            >
                                <i class="fa-solid fa-circle-question w-5"></i>
                                <span class="ml-4">FAQ</span>
                            </NavLink>
                        </li>
                    </ul>
                    <div class="px-6 my-6">
                        <NavLink
                            class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            :href="route('welcome')"
                        >
                            Go to home page
                            <span class="ml-2" aria-hidden="true"> > </span>
                        </NavLink>
                    </div>
                </div>
            </aside>
            <div class="flex flex-col flex-1 w-full">
                <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                    <div
                        class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
                    >
                        <!-- Mobile hamburger -->
                        <button
                            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                            @click.prevent="showMobileMenu = !showMobileMenu"
                            aria-label="Menu"
                        >
                            <svg
                                class="w-6 h-6"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Search input -->
                        <div class="flex justify-center flex-1 lg:mr-32">
                            <div
                                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
                            >
                                <div class="absolute inset-y-0 flex items-center pl-2">
                                    <svg
                                        class="w-4 h-4"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="text"
                                    placeholder="Search for projects"
                                    aria-label="Search"
                                />
                            </div>
                        </div>
                        <ul class="flex items-center flex-shrink-0 space-x-6">
                            <!-- Theme toggler -->
                            <li class="flex">
                                <button @click="toggleDark()">
                                    <div v-if="!isDark">
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div v-if="isDark">
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </div>
                                </button>
                                <button
                                    class="rounded-md focus:outline-none focus:shadow-outline-purple"
                                    @click="toggleDark()"
                                >
                                    <template>
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                            ></path>
                                        </svg>
                                    </template>
                                    <template>
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </template>
                                </button>
                                <button
                                    class="rounded-md focus:outline-none focus:shadow-outline-purple"
                                    @click="toggleDark()"
                                >
                                    <template>
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                            ></path>
                                        </svg>
                                    </template>
                                    <template>
                                        <svg
                                            class="w-5 h-5"
                                            aria-hidden="true"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                clip-rule="evenodd"
                                            ></path>
                                        </svg>
                                    </template>
                                </button>
                            </li>
                            <!-- Notifications menu -->
                            <!--                            <Dropdown align="right" width="48">-->
                            <!--                                <template #trigger>-->
                            <!--                                    <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">-->
                            <!--                                        <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">-->
                            <!--                                    </button>-->

                            <!--                                    <span v-else class="inline-flex rounded-md">-->
                            <!--                                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">-->
                            <!--                                                        {{ $page.props.user.name }}-->

                            <!--                                                        <svg-->
                            <!--                                                            class="ml-2 -mr-0.5 h-4 w-4"-->
                            <!--                                                            xmlns="http://www.w3.org/2000/svg"-->
                            <!--                                                            viewBox="0 0 20 20"-->
                            <!--                                                            fill="currentColor"-->
                            <!--                                                        >-->
                            <!--                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />-->
                            <!--                                                        </svg>-->
                            <!--                                                    </button>-->
                            <!--                                                </span>-->
                            <!--                                </template>-->

                            <!--                                <template #content>-->
                            <!--                                    &lt;!&ndash; Account Management &ndash;&gt;-->
                            <!--                                    <div class="block px-4 py-2 text-xs text-gray-400">-->
                            <!--                                        Manage Account-->
                            <!--                                    </div>-->

                            <!--                                    <DropdownLink :href="route('profile.show')">-->
                            <!--                                        Profile-->
                            <!--                                    </DropdownLink>-->

                            <!--                                    <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">-->
                            <!--                                        API Tokens-->
                            <!--                                    </DropdownLink>-->

                            <!--                                    <div class="border-t border-gray-100" />-->

                            <!--                                    &lt;!&ndash; Authentication &ndash;&gt;-->
                            <!--                                    <form @submit.prevent="logout">-->
                            <!--                                        <DropdownLink as="button">-->
                            <!--                                            Log Out-->
                            <!--                                        </DropdownLink>-->
                            <!--                                    </form>-->
                            <!--                                </template>-->
                            <!--                            </Dropdown>-->
                            <li class="relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button
                                            class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple "
                                            aria-label="Notifications"
                                            aria-haspopup="true"
                                        >
                                            <svg
                                                class="w-5 h-5"
                                                aria-hidden="true"
                                                fill="currentColor"
                                                viewBox="0 0 20 20"
                                            >
                                                <path
                                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                                                ></path>
                                            </svg>
                                        </button>
                                    </template>
                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-black dark:text-white">
                                            Manage Notifications
                                        </div>

                                        <DropdownLink :href="route('admin.dashboard')">
                                            <div class="flex justify-between items-center">
                                                Comments
                                                <span>
                                                <i class="fa-solid fa-comment w-5"></i>
                                                </span>
                                            </div>
                                        </DropdownLink>
                                        <DropdownLink :href="route('admin.dashboard')">
                                            <div class="flex justify-between items-center">
                                                Likes
                                                <span>
                                                <i class="fa-solid fa-heart w-5"></i>
                                                </span>
                                            </div>
                                        </DropdownLink>
                                        <DropdownLink :href="route('admin.dashboard')">
                                            <div class="flex justify-between items-center">
                                                Newsletter
                                                <span>
                                                <i class="fa-solid fa-newspaper w-5"></i>
                                                </span>
                                            </div>
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </li>
                            <!-- Profile menu -->
                            <li class="relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos"
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover"
                                                 :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                        </button>
                                        <span v-else class="inline-flex rounded-md">

                                           <button type="button"
                                                   class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                               {{ $page.props.user.name }}
                                               <svg
                                                   class="ml-2 -mr-0.5 h-4 w-4"
                                                   xmlns="http://www.w3.org/2000/svg"
                                                   viewBox="0 0 20 20"
                                                   fill="currentColor"
                                               >
                                                   <path fill-rule="evenodd"
                                                         d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                         clip-rule="evenodd"/>
                                               </svg>
                                           </button>

                                       </span>
                                    </template>
                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-black dark:text-white">
                                            Manage Profile
                                        </div>

                                        <DropdownLink :href="route('profile.show')">
                                            <div class="flex justify-between items-center">
                                                Profile
                                                <span>
                                                <i class="fa-solid fa-comment w-5"></i>
                                                </span>
                                            </div>
                                        </DropdownLink>
                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <DropdownLink as="button">
                                                <div class="flex justify-between items-center">
                                                    Log out
                                                    <span>
                                                <i class="fa-solid fa-door-closed w-5"></i>
                                                </span>
                                                </div>
                                            </DropdownLink>
                                        </form>
                                    </template>
                                </Dropdown>
                            </li>
                        </ul>
                    </div>
                </header>
                <div v-if="$slots.header" class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header"/>
                    </div>
                </div>
                <!-- Page Content -->
                <main class="h-full overflow-y-auto">
                    <slot/>
                </main>
            </div>
        </div>

    </div>
</template>

