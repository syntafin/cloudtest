<script setup lang="ts">
import { usePage } from "@inertiajs/vue3";
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { EnvelopeIcon, PhoneIcon } from '@heroicons/vue/20/solid'

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Home',
        href: '/',
    },
    {
        title: usePage().props.post.title,
        href: route('posts.show', usePage().props.post.slug)
    }
];

defineProps<{
    name?: string;
    post: Object,
}>();
</script>

<template>
    <Head :title="post.title" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div>
            <div>
                <img class="h-48 w-full object-cover lg:h-48" :src="post.preview_image" alt="" />
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div class="sm:flex sm:items-end sm:space-x-5">
                    <div class="sm:flex sm:min-w-0 sm:flex-1 sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                        <div class="min-w-0 flex-1 sm:hidden md:block">
                            <h1 class="truncate text-2xl font-bold">{{ post.title }}</h1>
                        </div>
                    </div>
                </div>
                <div class="mt-6 hidden min-w-0 flex-1 sm:block md:hidden">
                    <h1 class="truncate text-2xl font-bold text-gray-900">{{ post.title }}</h1>
                </div>
                <div>
                    <h6>{{ post.category.name }}</h6>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center relative">
            <div class="absolute inset-0 rounded-2xl bg-linear-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10 blur-lg"></div>
            <div class="absolute inset-0 rounded-2xl bg-linear-to-tr from-sky-300 via-sky-300/70 to-blue-300 opacity-10"></div>
            <div class="flex w-full max-w-7xl flex-1 flex-col gap-4 rounded-xl p-4 relative rounded-2xl bg-sidebar ring-1 ring-white/10 backdrop-blur-sm">
                <div v-html="post.content"></div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>