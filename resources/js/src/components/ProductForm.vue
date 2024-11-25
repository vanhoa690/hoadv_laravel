<script setup lang="ts">
import { watchEffect } from 'vue'
import { getDetail, ProductFormParams } from '../serivces/product';
import { useForm, useField } from "vee-validate";
import { validationSchema } from '@/validation/product';

const emit = defineEmits(["onSubmit"]);
const { productId } = defineProps(['productId'])

const { handleSubmit, resetForm, errors } = useForm({
    validationSchema
});

const { value: name } = useField("name");
const { value: price } = useField("price");
const { value: image } = useField("image");

watchEffect(() => {
    if (!productId) return
    getDetail(productId).then(({ data }) => {
        resetForm({
            values: data
        })
    })
})
const onSubmit = handleSubmit((values: ProductFormParams) => {
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
                <label class="text-gray-700" for="price">Price</label>
                <input v-model="price"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="number">
                <small class="text-red-500">{{ errors.price }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="price">Image</label>
                <input v-model="image"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500">{{ errors.image }}</small>
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
