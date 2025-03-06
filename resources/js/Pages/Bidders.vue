<script setup>
import { defineProps, ref, computed } from "vue";
import MainLayout from "@/Pages/MainLayout.vue";

const props = defineProps({
    bidders: Array,
});

const search = ref("");

const filteredBidders = computed(() => {
    if (!props.bidders) return [];
    if (!search.value) return props.bidders;
    return props.bidders.filter((bidder) =>
        `${bidder.first_name} ${bidder.last_name}`
            .toLowerCase()
            .includes(search.value.toLowerCase())
    );
});
</script>

<template>
    <MainLayout>
        <div class="p-6 bg-gray-100 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Bidders</h1>

            <input
                v-model="search"
                type="text"
                placeholder="Search Bidders"
                class="p-2 mb-4 border border-gray-300 rounded w-full"
            />

            <div v-if="filteredBidders.length">
                <div
                    v-for="bidder in filteredBidders"
                    :key="bidder.id"
                    class="p-4 mb-2 bg-white shadow-md rounded"
                >
                    <h2 class="text-lg font-bold">
                        {{ bidder.first_name }} {{ bidder.last_name }}
                    </h2>
                    <p>Email: {{ bidder.email }}</p>
                    <p>Address: {{ bidder.address }}</p>
                </div>
            </div>

            <div v-else>
                <p>No Bidders Found</p>
            </div>
        </div>
    </MainLayout>
</template>
