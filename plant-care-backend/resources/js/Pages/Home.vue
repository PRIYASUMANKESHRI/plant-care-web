<script setup>
import AppLayout from '@/Pages/Layouts/AppLayout.vue'; // Import the AppLayout component
</script>

<template>
    <AppLayout>
        <header class="bg-green-600 text-white p-6 text-center">
            <h1 class="text-4xl font-bold">Welcome to Plant Care</h1>
            <p class="mt-2">Your ultimate solution for plant care management.</p>
        </header>

        <section class="p-6">
            <h2 class="text-3xl font-semibold text-center">Core Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold">Plant Scanning</h3>
                    <p>Scan your plants to get instant care tips and information.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold">Care Tracking</h3>
                    <p>Track your plants' health and growth over time.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold">Reminders</h3>
                    <p>Set reminders for watering, fertilizing, and more.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold">Subscription Plans</h3>
                    <p>Choose a plan that suits your plant care needs.</p>
                </div>
            </div>
        </section>

        <section class="bg-green-100 p-6 mt-6">
            <h2 class="text-3xl font-semibold text-center">Introducing Hydroponic Farming</h2>
            <p class="mt-2 text-center">Stay tuned for our upcoming features on hydroponic farming!</p>
        </section>
    </AppLayout>
</template>

<style scoped>
.container {
    max-width: 1200px;
}
</style>