<template>
    <div>
        <nav class="flex gap-4 bg-gray-800 p-4">
            <Link
                href="/"
                class="text-white bg-gray-700 px-4 py-2 rounded hover:bg-gray-600"
                >Home</Link
            >
            <Link
                href="/bidders"
                class="text-white bg-gray-700 px-4 py-2 rounded hover:bg-gray-600"
                >Bidders</Link
            >
            <Link
                href="/cars"
                class="text-white bg-gray-700 px-4 py-2 rounded hover:bg-gray-600"
                >Cars</Link
            >
        </nav>

        <main>
            <slot />
        </main>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style scoped></style>
