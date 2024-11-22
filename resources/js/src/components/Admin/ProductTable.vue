<script setup lang="ts">
const { products } = defineProps(['products'])
const emit = defineEmits(["onDelete"]);

const handleDelete = (id: string) => {
    emit("onDelete", id)
}

</script>

<template>
    <table class="min-w-full">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                    Name
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                    Title
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                    Status
                </th>
                <th
                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                    Role
                </th>
                <th class="px-6 py-3 bg-gray-100 border-b border-gray-200" />
            </tr>
        </thead>

        <tbody class="bg-white">
            <tr v-for="(product, index) in products" :key="index">
                <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-50 h-50" :src="product.image" alt="profile pic">
                        </div>

                        <div class="ml-4">
                            <div class="text-sm font-medium leading-5 text-gray-900">
                                {{ product.name }}
                            </div>
                            <div class="text-sm leading-5 text-gray-500">
                                {{ product.name }}
                            </div>
                        </div>
                    </div>
                </td>

                <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                    <div class="text-sm leading-5 text-gray-900">
                        {{ product.name }}
                    </div>
                    <div class="text-sm leading-5 text-gray-500">
                        {{ product.name }}
                    </div>
                </td>

                <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                    <span
                        class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{
                            product.name }}</span>
                </td>

                <td class="px-6 py-4 text-sm leading-5 text-gray-500 border-b border-gray-200 whitespace-nowrap">
                    {{ product.price }}
                </td>

                <td class="flex gap-2 px-6 py-4 text-sm font-medium leading-5 whitespace-nowrap">
                    <RouterLink :to="`/product/edit/${product.id}`">
                        <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                    </RouterLink>
                    <button @click="handleDelete(product.id)" class="text-red-600 hover:text-red-900">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<style scoped></style>
