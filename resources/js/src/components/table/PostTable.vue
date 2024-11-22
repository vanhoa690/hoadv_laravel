<script setup lang="ts">
const { posts } = defineProps(['posts'])
const emit = defineEmits(["onDelete"]);

const handleDelete = (id: string) => {
    emit("onDelete", id)
}

</script>

<template>
    <table class="min-w-full leading-normal">
        <thead>
            <tr>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Title
                </th>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Content
                </th>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Image
                </th>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Category
                </th>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Created at
                </th>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(post, index) in posts" :key="index">
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p class="text-gray-900 whitespace-nowrap">
                        {{ post.title }}
                    </p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p class="text-gray-900 whitespace-nowrap">
                        {{ post.content }}
                    </p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <img v-if="post.image" :src="post.image" :alt="post.title" class="w-5 h-5">
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p v-if="post.category" class="text-gray-900 whitespace-nowrap">
                        {{ post.category.name }}
                    </p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p class="text-gray-900 whitespace-nowrap">
                        {{ post.createdAt }}
                    </p>
                </td>
                <td class="flex gap-2 px-5 py-5 text-sm font-medium bg-white border-b border-gray-200">
                    <RouterLink :to="`/post/edit/${post.id}`">
                        <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                    </RouterLink>
                    <button @click="handleDelete(post.id)" class="text-red-600 hover:text-red-900">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<style scoped></style>
