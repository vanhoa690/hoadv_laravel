<script setup lang="ts">
import { useForm, useField } from "vee-validate";
import { User } from '@/serivces/auth';
import { validationSchema } from '@/validation/auth';

const emit = defineEmits(["onSubmit"]);
const { isRegister } = defineProps(['isRegister'])

const { handleSubmit, errors } = useForm({ validationSchema });

const { value: name } = useField("name");
const { value: email } = useField("email");
const { value: password } = useField("password");

const onSubmit = handleSubmit((values: User) => {
    emit("onSubmit", values);
});

</script>

<template>
    <form @submit="onSubmit">
        <div class="gap-6 mt-4">
            <div v-if="isRegister">
                <label class="text-gray-700" for="name"> Name </label>
                <input v-model="name"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="text">
                <small class="text-red-500"> {{ errors.name }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="name">Email</label>
                <input v-model="email"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="email">
                <small class="text-red-500">{{ errors.email }}</small>
            </div>
            <div>
                <label class="text-gray-700" for="price">Password</label>
                <input v-model="password"
                    class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
                    type="password">
                <small class="text-red-500">{{ errors.password }}</small>
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
