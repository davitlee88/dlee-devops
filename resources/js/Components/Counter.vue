<template>
    <div>
        <p>Cart :</p>
       {{ cart }}


    </div>

    <div class="mt-6">
        <button @click="tambah">Tambah</button>
        <button @click="kurang">Kurang</button>
    </div>
</template>

<script setup>
import { ref } from "vue"

const cart = ref([])

const item = {
    nama: 'test',
    harga: 1000,
}

const tambah = () => {
    cart.push(["item"])
}


</script>