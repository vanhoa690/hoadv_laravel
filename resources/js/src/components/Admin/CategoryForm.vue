<script setup lang="ts">
import { watchEffect } from 'vue'
import { getDetail, CategoryFormParams } from '@/serivces/category';
import { useForm, useField } from "vee-validate";
import { validationSchema } from '@/validation/category';

const emit = defineEmits(["onSubmit"]);
const { categoryId } = defineProps(['categoryId'])

const { handleSubmit, resetForm, errors } = useForm({
    validationSchema
});

const { value: name } = useField("name");
const { value: slug } = useField("slug");

watchEffect(() => {
    if (!categoryId) return
    getDetail(categoryId).then(({ data }) => {
        resetForm({
            values: data.data
        })
    })
})
const onSubmit = handleSubmit((values: CategoryFormParams) => {
    emit("onSubmit", values);
});

</script>

<template>
    <form @submit="onSubmit">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700" for="name">Name</label>
                <input v-model="name"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500">{{ errors.name }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="price">Slug</label>
                <input v-model="slug"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500">{{ errors.slug }}</small>
            </div>

        </div>
        <div class="flex justify-end mt-4">
            <button
                class="px-4 py-2 text-gray-200 bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                Save
            </button>
        </div>
    </form>
</template>

<style scoped></style>
