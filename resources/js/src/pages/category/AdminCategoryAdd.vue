<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import { addCategory, Category } from '@/serivces/category';
import { useRouter } from 'vue-router';
import CategoryForm from '@/components/Admin/CategoryForm.vue';

const router = useRouter()

function handleAddCategory(values: Category) {
    addCategory(values).then(() => {
        toast.success('Done')
        router.push('/category/list')
    })
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Category Add
            </h2>
            <CategoryForm @onSubmit="handleAddCategory" />
        </div>
    </div>
</template>

<style scoped></style>
