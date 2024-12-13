<template>
    <AppLayout>
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-4">Blogs</h1>
            <p class="mb-4">Welcome to our blog section! Here you'll find articles focused on general plant care and beginner-friendly gardening tips.</p>
            
            <h2 class="text-2xl font-semibold mt-6">Hydroponics</h2>
            <p>Hydroponics is a method of growing plants without soil, using mineral nutrient solutions in an aqueous solvent. Here are some basic posts to get you started:</p>
            
            <ul class="list-disc pl-5 mt-2">
                <li><router-link to="/blogs/hydroponics-introduction">Introduction to Hydroponics</router-link></li>
                <li><router-link to="/blogs/hydroponics-tips">Top Tips for Hydroponic Gardening</router-link></li>
                <li><router-link to="/blogs/hydroponics-benefits">Benefits of Hydroponics</router-link></li>
            </ul>
            
            <!-- Add more blog posts as needed -->
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from './Layouts/AppLayout.vue'; // Adjust the path as necessary
</script>

<style scoped>
.container {
    max-width: 1200px;
}
</style> 