<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { deleteCategory, getAllCategory, Category } from '@/serivces/category';
import { toast } from '@steveyuowo/vue-hot-toast';
import CategoryTable from '@/components/table/CategoryTable.vue';
import Button from '@/components/elements/Button.vue';

const categories = ref<Category[]>([])
onMounted(() => {
    getAllCategory().then(({ data }) => {
        categories.value = data.data
    })
})

function handleDeleteCategory(id: string) {
    if (confirm('xoa')) {
        deleteCategory(id).then(() => {
            toast.success('Done')
            location.reload()
        })
    }
}
</script>

<template>
    <div class="flex flex-col gap-2">
        <h3 class="text-3xl font-medium text-gray-700">
            Category List
        </h3>
        <RouterLink to="/category/add">
            <Button label="Add Category" />
        </RouterLink>
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <CategoryTable :categories="categories" @onDelete="handleDeleteCategory" />
            </div>
        </div>
    </div>
</template>

<style scoped></style>
