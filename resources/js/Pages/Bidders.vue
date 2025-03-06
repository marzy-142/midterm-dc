<template>
    <div class="bidders">
        <h2>Bidders</h2>
        <input
            v-model="search"
            type="text"
            placeholder="Search bidders..."
            class="search-box"
        />
        <div class="cards">
            <div
                v-for="bidder in filteredBidders"
                :key="bidder.id"
                class="card"
            >
                <h3>{{ bidder.first_name }} {{ bidder.last_name }}</h3>
                <p>Email: {{ bidder.email }}</p>
                <p>Address: {{ bidder.address }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        bidders: Array,
    },
    data() {
        return {
            search: "",
        };
    },
    computed: {
        filteredBidders() {
            return this.bidders.filter(
                (bidder) =>
                    bidder.first_name
                        .toLowerCase()
                        .includes(this.search.toLowerCase()) ||
                    bidder.last_name
                        .toLowerCase()
                        .includes(this.search.toLowerCase())
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
