<script setup lang="ts">
// import { onMounted, ref } from 'vue';
// import { deletePost, getAllPost, Post } from '@/serivces/post';
// import { toast } from '@steveyuowo/vue-hot-toast';
// import PostTable from '@/components/table/PostTable.vue';
import Button from '../../components/elements/Button.vue';

// const posts = ref<Post[]>([])
// onMounted(() => {
//     getAllPost().then(({ data }) => {
//         posts.value = data.data
//     })
// })

// function handleDeletePost(id: string) {
//     if (confirm('xoa')) {
//         deletePost(id).then(() => {
//             toast.success('Done')
//             location.reload()
//         })
//     }
// }
</script>

<template>
    <div class="flex flex-col gap-2">
        <h3 class="text-3xl font-medium text-gray-700">
            Post List
        </h3>
        <RouterLink to="/post/add">
            <Button label="Add Post" />
        </RouterLink>
        <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
            <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                <!-- <PostTable :posts="posts" @onDelete="handleDeletePost" /> -->
            </div>
        </div>
    </div>
</template>

<style scoped></style>
