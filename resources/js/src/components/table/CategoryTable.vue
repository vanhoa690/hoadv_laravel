<script setup lang="ts">
const { categories } = defineProps(['categories'])
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
                    Name
                </th>
                <th
                    class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Slug
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
            <tr v-for="(category, index) in categories" :key="index">
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p class="text-gray-900 whitespace-nowrap">
                        {{ category.name }}
                    </p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p class="text-gray-900 whitespace-nowrap">
                        {{ category.slug }}
                    </p>
                </td>
                <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                    <p class="text-gray-900 whitespace-nowrap">
                        {{ category.createdAt }}
                    </p>
                </td>
                <td class="flex gap-2 px-5 py-5 text-sm font-medium bg-white border-b border-gray-200">
                    <RouterLink :to="`/category/edit/${category.id}`">
                        <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                    </RouterLink>
                    <button @click="handleDelete(category.id)" class="text-red-600 hover:text-red-900">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<style scoped></style>
