<template>
    <header class="bg-gray-800 text-white p-4 flex items-center justify-between sticky top-0 z-50">
        <!-- Logo Section -->
        <div class="flex items-center logo">
            <InertiaLink href="/" class="flex items-center">
                <img src="/images/logos/logo.png" alt="Plant Care Logo" class="w-12 h-12 mr-4">
                <h1 class="text-2xl font-semibold">Plant Care</h1>
            </InertiaLink>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-6">           
            <InertiaLink href="/" class="text-white hover:text-green-400 flex items-center">
                <i class="fas fa-home mr-2"></i>Home
            </InertiaLink>
            <InertiaLink href="/about" class="text-white hover:text-green-400 flex items-center">
                <i class="fas fa-info-circle mr-2"></i>About
            </InertiaLink>
            <InertiaLink href="/blogs" class="text-white hover:text-green-400 flex items-center">
                <i class="fas fa-blog mr-2"></i>Blogs
            </InertiaLink>
            <InertiaLink href="/contact" class="text-white hover:text-green-400 flex items-center">
                <i class="fas fa-envelope mr-2"></i>Contact
            </InertiaLink>                        
        </div>

        <!-- User Actions -->
        <div class="hidden md:flex items-center space-x-4">
            <template v-if="!$page.props.auth.user">
                <InertiaLink href="/login" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Login</InertiaLink>
                <InertiaLink href="/register" class="bg-gray-700 text-white px-4 py-2 rounded-md hover:bg-gray-600">Sign Up</InertiaLink>
            </template>
            <template v-else>
                <div class="relative">
                    <button @click="toggleDropdown" class="bg-gray-700 text-white px-4 py-2 rounded-md hover:bg-gray-600">
                        <i class="fas fa-user mr-2"></i>{{ $page.props.auth.user.name.toLowerCase() }}
                    </button>
                    <div v-if="isDropdownOpen" class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2">
                        <InertiaLink href="/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"><i class="fas fa-user-circle mr-2"></i>Profile</InertiaLink>
                        <InertiaLink href="/logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"><i class="fas fa-sign-out-alt mr-2"></i>Logout</InertiaLink>
                    </div>
                </div>
            </template>
        </div>

        <!-- Mobile Navigation -->
        <div class="md:hidden flex items-center">
            <button @click="toggleMobileMenu" class="text-white text-2xl">
                <i :class="isMobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div v-if="isMobileMenuOpen" class="absolute top-16 left-0 w-full bg-gray-800 text-white flex flex-col items-start p-4 space-y-2">
           
            <InertiaLink href="/" class="w-full text-left px-4 py-2 hover:bg-gray-700">Home</InertiaLink>
            <InertiaLink href="/about" class="w-full text-left px-4 py-2 hover:bg-gray-700">About</InertiaLink>
            <InertiaLink href="/blogs" class="w-full text-left px-4 py-2 hover:bg-gray-700">Blogs</InertiaLink>
            <InertiaLink href="/contact" class="w-full text-left px-4 py-2 hover:bg-gray-700">Contact</InertiaLink>            
            <InertiaLink href="/help" class="w-full text-left px-4 py-2 hover:bg-gray-700">Help</InertiaLink>
            <InertiaLink href="/login" class="w-full text-left px-4 py-2 bg-green-500 hover:bg-green-600">Login</InertiaLink>
            <InertiaLink href="/register" class="w-full text-left px-4 py-2 bg-gray-700 hover:bg-gray-600">Sign Up</InertiaLink>
        </div>
    </header>
</template>

<script setup>
import { InertiaLink } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
const isMobileMenuOpen = ref(false);
const toggleMobileMenu = () => {
    isMobileMenuOpen.value = !isMobileMenuOpen.value;
};
const isDropdownOpen = ref(false);
const toggleDropdown = () => {
    isDropdownOpen.value = !isDropdownOpen.value;
};  
</script>

<style scoped>
header {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
</style>