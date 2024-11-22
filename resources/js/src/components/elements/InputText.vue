<script setup lang="ts">
const { label, model, error } = defineProps(['label', 'model', 'error'])
</script>

<template>
    <div>
        <label class="text-gray-700" for="name">{{ label }}</label>
        <input :v-model="model"
            class="w-full mt-2 p-2 border border-gray-200 rounded-md focus:border-indigo-600 focus:ring focus:ring-opacity-40 focus:ring-indigo-500"
            type="text">
        <small class="text-red-500">{{ error }}</small>
    </div>
</template>

<style scoped></style>
