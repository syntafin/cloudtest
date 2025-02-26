<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PostItem from './components/PostItem.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Home',
        href: '/',
    },
];

defineProps<{
    name?: string;
    posts: Object,
}>();
</script>

<template>
    <Head title="Home" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            {{ console.table(posts) }}
            <PostItem v-for="post in posts" :key="post.id" :post="post" />
        </div>
    </AppLayout>
</template>

<style scoped>

</style>