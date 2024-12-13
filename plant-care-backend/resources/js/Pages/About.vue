<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'; // Import the AppLayout component
</script>

<template>
    <AppLayout>
        <header class="bg-green-600 text-white p-6 text-center">
            <h1 class="text-4xl font-bold">About Plant Care</h1>
            <p class="mt-2">Learn more about our mission and values.</p>
        </header>

        <section class="p-6">
            <h2 class="text-3xl font-semibold text-center">Our Mission</h2>
            <p class="mt-4 text-center">
                At Plant Care, we strive to provide the best tools and resources for plant enthusiasts to help them nurture their green companions.
            </p>
        </section>

        <section class="p-6">
            <h2 class="text-3xl font-semibold text-center">Our Values</h2>
            <ul class="mt-4 list-disc list-inside">
                <li>Passion for plants</li>
                <li>Commitment to sustainability</li>
                <li>Community engagement</li>
                <li>Innovation in plant care technology</li>
            </ul>
        </section>
    </AppLayout>
</template>

<style scoped>
.container {
    max-width: 1200px; /* Updated max-width */
}
</style> 