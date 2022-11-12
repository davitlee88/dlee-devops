<template>
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
            Dashboard
        </NavLink>
        <NavLink :href="route('app.users.index')" :active="route().current('app.users*')">
            Users
        </NavLink>
        <NavLink href="/app/members" :active="route().current('app.members*')">
            Members
        </NavLink>
    </div>
</template>

<script setup>
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>