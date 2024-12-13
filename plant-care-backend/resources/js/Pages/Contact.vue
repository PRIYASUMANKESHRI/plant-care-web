<template>
    <AppLayout>
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
            <p>If you have any questions or inquiries, feel free to reach out to us!</p>
            
            <h2 class="text-2xl font-semibold mt-6">Our Address</h2>
            <p>123 Plant Care Lane, Green City, GC 12345</p>
            
            <h2 class="text-2xl font-semibold mt-6">Get in Touch</h2>
            <p>Email: <a href="mailto:info@plantcare.com" class="text-blue-500">info@plantcare.com</a></p>
            <p>Phone: <a href="tel:+1234567890" class="text-blue-500">+1 (234) 567-890</a></p>
            
            <h2 class="text-2xl font-semibold mt-6">Follow Us</h2>
            <p>
                <a href="https://facebook.com/plantcare" class="text-blue-500">Facebook</a> |
                <a href="https://twitter.com/plantcare" class="text-blue-500">Twitter</a> |
                <a href="https://instagram.com/plantcare" class="text-blue-500">Instagram</a>
            </p>
            
            <h2 class="text-2xl font-semibold mt-6">Location</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509123!2d144.9537353153163!3d-37.81627997975157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11e1b3%3A0x5045675218ceed0!2sPlant%20Care%20Headquarters!5e0!3m2!1sen!2sus!4v1616161616161!5m2!1sen!2sus"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
            ></iframe>
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