<template>
    <AppLayout>
        <div class="container mx-auto p-4 max-w-7xl">
            <h1 class="text-3xl font-bold mb-4">Help & Support</h1>
            <p>If you have any questions or need assistance, you are in the right place! Here are some resources to help you:</p>
            
            <h2 class="text-2xl font-semibold mt-6">Frequently Asked Questions</h2>
            <p>Check out our <router-link to="/faq" class="text-blue-500">FAQ section</router-link> for answers to common questions.</p>
            
            <h2 class="text-2xl font-semibold mt-6">Contact Support</h2>
            <p>If you need further assistance, feel free to reach out to our support team:</p>
            <p>Email: <a href="mailto:support@plantcare.com" class="text-blue-500">support@plantcare.com</a></p>
            <p>Phone: <a href="tel:+1234567890" class="text-blue-500">+1 (234) 567-890</a></p>
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