<script setup lang="ts">
import { onMounted, ref } from 'vue';
import { deleteUser, getAllUser, User } from '@/serivces/user';
import { toast } from '@steveyuowo/vue-hot-toast';
import UserTable from '@/components/table/UserTable.vue';

const users = ref<User[]>([])
onMounted(() => {
    getAllUser().then(({ data }) => {
        users.value = data.data
    })
})

function handleDeleteUser(id: string) {
    if (confirm('xoa')) {
        deleteUser(id).then(() => {
            toast.success('Done')
            location.reload()
        })
    }
}
</script>

<template>
    <div class="container">
        <h3 class="text-3xl font-medium text-gray-700">
            User List
        </h3>
        <UserTable :users="users" @onDelete="handleDeleteUser" />
    </div>
</template>

<style scoped></style>
