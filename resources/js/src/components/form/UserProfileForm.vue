<script setup lang="ts">
import { useForm, useField } from "vee-validate";
import { validationSchema } from '@/validation/user';
import { watchEffect } from "vue";
import { getUserProfile, Profile } from "@/serivces/user";

const emit = defineEmits(["onSubmit"]);
const { userId } = defineProps(['userId'])

const { handleSubmit, errors, resetForm } = useForm({ validationSchema });

const { value: avatar } = useField("avatar");
const { value: phone } = useField("phone");

watchEffect(() => {
    if (!userId) return
    getUserProfile(userId).then(({ data }) => {
        resetForm({
            values: data.data
        })
    })
})

const onSubmit = handleSubmit((values: any) => {
    console.log(values);
    emit("onSubmit", values);
});

</script>

<template>
    <form @submit="onSubmit">
        <div class="flex flex-col gap-6 mt-4">
            <div>
                <label class="text-gray-700" for="name">Avatar</label>
                <input v-model="avatar"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500">{{ errors.avatar }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="name">phone</label>
                <input v-model="phone"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500">{{ errors.phone }}</small>
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
