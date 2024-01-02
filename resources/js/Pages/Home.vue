<script setup>
defineProps({
    products: Array
});
</script>

<template>
    <div class="container mx-auto xl:px-20">

        <div class="min-h-screen grid grid-cols-4 gap-4">

            <div v-for="product in products" :key="product.id" class="p-2 bg-white border-2 border-cyan-500 rounded-2xl flex flex-col justify-between">

                <img :src="product.photo_url" alt="" class="rounded-xl">
                <div class="flex justify-between">
                    <h1 class="font-medium text-lg">{{ product.name }}</h1>
                    <h2 class="font-bold text-lg text-orange-500">${{ product.price }},00</h2>
                </div>
                <p>{{ product.description }}</p>
                <button class="bg-green-600 rounded-3xl px-8 py-4 text-lg font-bold text-white">Comprar</button>
            </div>

        </div>

    </div>
</template>