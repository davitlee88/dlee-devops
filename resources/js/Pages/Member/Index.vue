<template>
    <AppLayout>
        
        <template #header>
            Ini Header
        </template>
        
        <ul v-for="item in data">
            <li>{{ item.name }}</li>
        </ul>

    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
defineProps([ 'data' ])
</script>