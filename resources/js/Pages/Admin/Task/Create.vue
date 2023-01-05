<script setup>
import { useForm, usePage } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue';


const form = useForm({
    message: null,
    user_id: usePage().props.value.user.id,
    _token: usePage().props.value.csrf_token,
})
</script>

<template>
    <AppLayout title="Dashboard">
        <div class="container px-6 mx-auto grid">
            <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Add a task
            </h2>
            <form class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800" @submit.prevent="form.post('/admin/task')">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Message</span>
                    <textarea v-model="form.message" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Enter some long form content."></textarea>
                </label>
                <div v-if="form.errors.message">{{ form.errors.message }}</div>
                <button class="px-4 py-2 mt-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit" :disabled="form.processing">Add</button>
            </form>
        </div>
    </AppLayout>
</template>
