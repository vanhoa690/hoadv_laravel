<script setup lang="ts">
import { toast } from '@steveyuowo/vue-hot-toast';
import { useRoute, useRouter } from 'vue-router';
import { User } from '@/serivces/user';
import UserProfileForm from '@/components/form/UserProfileForm.vue';
import { editUserProfile } from '@/serivces/user';

const router = useRouter()
const route = useRoute()

const { id } = route.params

function handleEditProfile(values: User) {
    editUserProfile(id as string, values).then(() => {
        toast.success('Done')
        router.push('/user/list')
    })
}
</script>

<template>
    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg font-semibold text-gray-700 capitalize">
                Edit Profile User
            </h2>
            <UserProfileForm :userId="id" @onSubmit="handleEditProfile" />
        </div>
    </div>
</template>

<style scoped></style>
