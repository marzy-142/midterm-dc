<template>
    <div class="cars">
        <h2>Cars</h2>
        <input
            v-model="search"
            type="text"
            placeholder="Search cars..."
            class="search-box"
        />
        <div class="cards">
            <div v-for="car in filteredCars" :key="car.id" class="card">
                <h3>{{ car.make }} {{ car.model }} ({{ car.year }})</h3>
                <p>Miles: {{ car.miles }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        cars: Array,
    },
    data() {
        return {
            search: "",
        };
    },
    computed: {
        filteredCars() {
            return this.cars.filter(
                (car) =>
                    car.make
                        .toLowerCase()
                        .includes(this.search.toLowerCase()) ||
                    car.model.toLowerCase().includes(this.search.toLowerCase())
            );
        },
    },
};
</script>

<style scoped>
.search-box {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.card {
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
}
</style>
