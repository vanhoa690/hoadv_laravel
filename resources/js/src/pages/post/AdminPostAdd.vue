<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import { addPost, PostFormParams } from '@/serivces/post';
import { useRouter } from 'vue-router';
import PostForm from '@/components/form/PostForm.vue';

const router = useRouter()

function handleAddPost(values: PostFormParams) {
    addPost(values).then(() => {
        toast.success('Done')
        router.push('/post/list')
    })
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Post Add
            </h2>
            <PostForm @onSubmit="handleAddPost" />
        </div>
    </div>
</template>

<style scoped></style>
