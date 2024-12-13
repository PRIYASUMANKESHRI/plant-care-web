<template>
    <div>
        <Header />
        <main>
            <slot></slot>
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Header from './Header.vue';
import Footer from './Footer.vue';
</script>

<style scoped>
/* Add any layout-specific styles here */
</style> 