<template>
    <footer class="bg-gray-900 text-white pt-8 ">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-4 px-4">
            <!-- About Section -->
            <div>
                <h3 class="text-xl font-semibold mb-2">About Plant Care</h3>
                <p class="text-sm">Plant Care provides tools and insights to help you take better care of your plants.</p>
            </div>
            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold mb-2">Quick Links</h3>
                <ul class="space-y-2">
                    <li><InertiaLink href="/privacy-policy" class="hover:text-green-400">Privacy Policy</InertiaLink></li>
                    <li><InertiaLink href="/terms-of-service" class="hover:text-green-400">Terms of Service</InertiaLink></li>
                    <li><InertiaLink href="/help" class="hover:text-green-400">Help</InertiaLink></li>
                </ul>
            </div>
            <!-- Social Media -->
            <div>
                <h3 class="text-xl font-semibold mb-2">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-green-400"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-green-400"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-green-400"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="bg-gray-800 text-center mt-4">
            <p>&copy; 2024 Plant Care. All rights reserved.</p>
        </div>
    </footer>
</template>
<script setup>
import { InertiaLink } from '@inertiajs/inertia-vue3';
</script>
<style scoped>
footer {
    background-color: #4cbb17;
}
</style>
