<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar';
import { useInitials } from '@/composables/useInitials';
const { getInitials } = useInitials();

defineProps({
    post: Object,
});
</script>

<template>
    <Link :href="route('posts.show', post.slug)" class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
        <img :src="post.preview_image" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40" />
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10" />

        <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm/6 text-gray-300">
            <time :datetime="post.created_at" class="mr-8">{{ post.created_at }}</time>
            <div class="-ml-4 flex items-center gap-x-4">
                <svg viewBox="0 0 2 2" class="-ml-0.5 size-0.5 flex-none fill-white/50">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <div class="flex gap-x-2.5 items-center">
                    <Avatar class="h-8 w-8 overflow-hidden rounded-lg">
                        <AvatarImage :src="post.user.avatar" :alt="post.user.name" />
                        <AvatarFallback class="rounded-lg text-black dark:text-white">
                            {{ getInitials(post.user.name) }}
                        </AvatarFallback>
                    </Avatar>
                    {{ post.user.name }}
                </div>
            </div>
        </div>
        <h3 class="mt-3 text-lg/6 font-semibold text-white">
            <Link :href="route('posts.show', post.slug)">
                <span class="absolute inset-0" />
                {{ post.title }}
            </Link>
        </h3>
    </Link>
</template>

<style scoped>

</style>