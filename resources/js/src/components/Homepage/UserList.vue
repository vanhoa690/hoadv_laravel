<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { getAllUser, User } from '@/serivces/user';

const users = ref<User[]>([])

onMounted(() => {
    getAllUser().then(({ data }) => {
        users.value = data.data
    })
})
</script>

<template>
    <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
        <ul>
            <li v-for="(user, index) in users" :key="index" class="flex items-center">
                <img class="w-10 h-10 object-cover rounded-full mx-4" v-if="user.profile?.avatar"
                    :src="user.profile?.avatar" alt="avatar">
                <p>
                    <a class="text-gray-700 font-bold mx-1 hover:underline" href="#">{{ user.name }}</a>
                    <span class="text-gray-700 text-sm font-light">Created 23 Posts</span>
                </p>
            </li>
        </ul>
    </div>
</template>

<style scoped></style>
