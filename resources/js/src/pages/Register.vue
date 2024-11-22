<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import { useRouter } from 'vue-router';
import { registerUser, User } from '@/serivces/auth';
import AuthForm from '@/components/AuthForm.vue';

const router = useRouter()

function handleRegister(values: User) {
    registerUser(values).then(() => {
        toast.success('Done')
        router.push('/login')
    })
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Register
            </h2>
            <AuthForm @onSubmit="handleRegister" />
        </div>
    </div>
</template>

<style scoped></style>
