<script setup>
import MainLayout from "@/Pages/MainLayout.vue";
import { defineProps, ref, computed } from "vue";

const props = defineProps({
    cars: Array,
});

const search = ref("");

const filteredCars = computed(() => {
    if (!props.cars) return [];
    if (!search.value) return props.cars;
    return props.cars.filter((car) =>
        `${car.make} ${car.model} ${car.year}`
            .toLowerCase()
            .includes(search.value.toLowerCase())
    );
});
</script>

<template>
    <MainLayout>
        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Cars</h1>
            <input
                v-model="search"
                type="text"
                placeholder="Search Cars"
                class="p-2 mb-4 border border-gray-300 rounded w-full"
            />

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div
                    v-for="car in filteredCars"
                    :key="car.id"
                    class="p-4 bg-white rounded-lg shadow-md"
                >
                    <h2 class="text-lg font-bold">
                        {{ car.make }} {{ car.model }}
                    </h2>
                    <p>Year: {{ car.year }}</p>
                    <p>Miles: {{ car.miles }}</p>
                </div>
            </div>

            <div v-if="!filteredCars.length" class="text-center text-gray-600">
                No Cars Found
            </div>
        </div>
    </MainLayout>
</template>
