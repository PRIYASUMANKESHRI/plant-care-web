<template>
    <aside class="bg-gray-200 p-4">
        <h2 class="text-lg">Navigation</h2>
        <ul>
            <li><router-link to="/">Home</router-link></li>
            <li><router-link to="/about">About</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
            <!-- Add more links as needed -->
        </ul>
    </aside>
</template>

<script setup>
import { defineOptions } from 'vue';

defineOptions({
    name: 'Sidebar'
});
</script>

<style scoped>
/* Add styles for the sidebar here */
</style> 