<template>
    <AppLayout>
        
        <template #header>
            Member Management
        </template>
        
        <div>
                <table class="min-w-full w-full bg-red">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Name
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Email
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Actions
                            </th>
                        </tr>
                    </thead>
                <tbody>
                    <tr v-for="(item, index) in data" class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td v-text="index + 1" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"></td>
                        <td v-text="item.name" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"></td>
                        <td v-text="item.email" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"></td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            @mdo
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>

    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
defineProps([ 'data' ])
</script>