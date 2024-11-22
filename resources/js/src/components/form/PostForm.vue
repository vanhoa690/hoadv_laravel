<script setup lang="ts">
import { watchEffect } from 'vue'
import { getDetail, PostFormParams } from '@/serivces/post';
import { useForm, useField } from "vee-validate";
import { validationSchema } from '@/validation/post';
import { onMounted, ref } from 'vue';
import { getAllCategory, Category } from '@/serivces/category';
import { useEditor, EditorContent } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'

const emit = defineEmits(["onSubmit"]);
const { postId } = defineProps(['postId'])

const categories = ref<Category[]>([])

onMounted(() => {
    getAllCategory().then(({ data }) => {
        categories.value = data.data
    })
})

const { handleSubmit, resetForm, errors } = useForm({
    validationSchema
});

const { value: title } = useField("title");
const { value: content } = useField("content");
const { value: image } = useField("image");
const { value: category } = useField("category");

watchEffect(() => {
    if (!postId) return
    getDetail(postId).then(({ data }) => {
        resetForm({
            values: { ...data.data, category: data.data.category.id }
        })
    })
})
const onSubmit = handleSubmit((values: PostFormParams) => {
    emit("onSubmit", { ...values, category_id: values.category });
});


const editor = useEditor({
    content: '<p>I’m running Tiptap with Vue.js. 🎉</p>',
    extensions: [StarterKit],
})
</script>

<template>
    <form @submit="onSubmit">
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700" for="name">Title</label>
                <input v-model="title"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500">{{ errors.title }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="price">Category</label>
                <select v-model="category"
                    class="block w-full mt-2 p-2 leading-tight text-gray-700 bg-white border border-gray-400 rounded-l appearance-none focus:outline-none focus:bg-white focus:border-gray-500">
                    <option v-for="(category, index) in categories" :key="index" :value="category.id">{{ category.name
                        }}</option>
                </select>
                <small class="text-red-500">{{ errors.category }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="price">Content</label>
                <input v-model="content"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <editor-content v-model="content" />
                <small class="text-red-500">{{ errors.content }}</small>
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
