<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import { editPost, PostFormParams } from '@/serivces/post';
import PostForm from '@/components/form/PostForm.vue';
import { useRoute, useRouter } from 'vue-router';

const router = useRouter()
const route = useRoute()

const { id } = route.params

function handleEditPost(values: PostFormParams) {
    editPost(id as string, values).then(() => {
        toast.success('Done')
        router.push('/post/list')
    })
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Post Edit
            </h2>
            <PostForm :postId="id" @onSubmit="handleEditPost" />
        </div>
    </div>
</template>

<style scoped></style>
