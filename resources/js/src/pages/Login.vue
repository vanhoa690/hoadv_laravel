<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import AuthForm from '@/components/AuthForm.vue';
import { loginUser, User } from '@/serivces/auth';
import { useRouter } from 'vue-router';

const router = useRouter()

function handleLogin(values: User) {
    loginUser(values)
        .then(({ data }) => {
            sessionStorage.setItem('token', data.token)
            toast.success('Done')
            router.push('/post/list')
        })
        .catch(() => toast.error('Error'))
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Login
            </h2>
            <AuthForm @onSubmit="handleLogin" />
        </div>
    </div>
</template>

<style scoped></style>
