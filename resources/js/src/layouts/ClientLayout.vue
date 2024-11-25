<script setup lang="ts">
import Footer from '../components/Footer.vue';
import Header from '../components/Header.vue';
</script>

<template>
    <div id="app" class="font-roboto bg-gray-100">
        <Header />
        <div class="px-6 py-8">
            <RouterView />
        </div>
        <Footer />
    </div>
</template>

<style scoped></style>
