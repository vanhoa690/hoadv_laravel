<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import { editCategory, Category } from '@/serivces/category';
import CategoryForm from '@/components/Admin/CategoryForm.vue';
import { useRoute, useRouter } from 'vue-router';

const router = useRouter()
const route = useRoute()

const { id } = route.params

function handleEditCategory(values: Category) {
    editCategory(id as string, values).then(() => {
        toast.success('Done')
        router.push('/category/list')
    })
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Category Edit
            </h2>
            <CategoryForm :categoryId="id" @onSubmit="handleEditCategory" />
        </div>
    </div>
</template>

<style scoped></style>
