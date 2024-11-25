<script setup lang="ts">
const { users } = defineProps(['users'])
const emit = defineEmits(["onDelete"]);
console.log(users);

const handleDelete = (id: string) => {
    emit("onDelete", id)
}

</script>

<template>
    <div class="flex flex-col mt-6">
        <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                                Name
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                                Title
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                                Status
                            </th>
                            <th
                                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-200">
                                Role
                            </th>
                            <th class="px-6 py-3 bg-gray-100 border-b border-gray-200" />
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        <tr v-for="(user, index) in users" :key="index">
                            <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-50 h-50" v-if="user.profile?.avatar" :src="user.profile.avatar"
                                            alt="profile pic">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium leading-5 text-gray-900">
                                            {{ user.name }}
                                        </div>
                                        <div class="text-sm leading-5 text-gray-500">
                                            {{ user.email }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                <div class="text-sm leading-5 text-gray-900">
                                    {{ user.profile?.phone }}
                                </div>
                                <div class="text-sm leading-5 text-gray-500">
                                    {{ user.email }}
                                </div>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">{{
                                        user.email }}</span>
                            </td>

                            <td
                                class="px-6 py-4 text-sm leading-5 text-gray-500 border-b border-gray-200 whitespace-nowrap">
                                {{ user.createdAt }}
                            </td>

                            <td class="flex gap-2 px-6 py-4 text-sm font-medium leading-5 whitespace-nowrap">
                                <RouterLink :to="`/user/edit/${user.profile?.id}`">
                                    <button class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                </RouterLink>
                                <button @click="handleDelete(user.id)"
                                    class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
