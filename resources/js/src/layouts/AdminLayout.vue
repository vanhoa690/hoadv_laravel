<script setup lang="ts">
import AdminHeader from '../components/Admin/AdminHeader.vue';
import Sidebar from '../components/Admin/Sidebar.vue';
</script>

<template>
    <div class="flex h-screen bg-gray-200">
        <Sidebar />
        <div class="flex-1 flex flex-col overflow-hidden">
            <AdminHeader />
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    <RouterView />
                </div>
            </main>
        </div>
    </div>
</template>

<style scoped></style>
