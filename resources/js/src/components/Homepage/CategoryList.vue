<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { getAllCategory, Category } from '@/serivces/category';

const categories = ref<Category[]>([])

onMounted(() => {
    getAllCategory().then(({ data }) => {
        categories.value = data.data
    })
})
</script>

<template>
    <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
        <ul>
            <li v-for="(category, index) in categories" :key="index">
                <RouterLink class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline"
                    :to="`/category/${category.id}`">- {{
                        category.name
                    }}</RouterLink>
            </li>

        </ul>
    </div>
</template>

<style scoped></style>
