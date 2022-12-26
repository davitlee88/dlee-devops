<template>
    <AppLayout >
        
        <template #header>
            <h2 class="font-serif text-xl text-lime-900">
            Member Management
            </h2>
        </template>

        <section class="mb-10 bg-indigo-200">
            <h2 class="text-3xl text-center">Spacing</h2>
            <div class="m-12">Margin</div>
            <div Class="p-8">Pedding</div>
        </section>

        <section class="mb-10 bg-green-200">
            <h2 class="text-3xl text-center">Sizing</h2>
            <div class="w-32 h-32">Kotak 1</div>
        </section>

        <section class="mb-96 font-serif max-w-3xl mx-auto">
            <h2 class="mb-2 text-4xl font-bold">Belajar Typography pada tailwindSCC</h2>
            <div class="mb-4 text-lg text-gray-500">
                By <a href="#" class="text-gray-700 font-semibold">Sri Lelita</a>, 26 Desember 2022
            </div>
            <p class="mb-4">
                Lorem ipsum dolor sit amet <a href="#" class="underline font-semibold text-blue-600">consectetur</a> adipisicing elit. At velit possimus voluptatibus odio ducimus deserunt, repudiandae dicta, id quaerat aliquam, atque fuga quia maxime nesciunt rem veritatis officia delectus? Id eos ad odit illum magni tempore inventore, delectus repudiandae minima ducimus sit, quam doloribus, sunt aliquam. Beatae quia esse illum.
            </p>
            <blockquote class="mb-4 italic font-thin text-xl">
                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus quaerat consequatur accusantium inventore dignissimos totam, eveniet possimus quas praesentium molestias?"
            </blockquote>
            <p class="mb-4">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate sint nisi incidunt voluptatibus. Quis ratione officia sed, quasi mollitia at obcaecati amet, non quas, atque dolorum totam numquam et omnis?
            </p>
        </section>
        
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
defineProps([ 'data' ])
</script>