<template>
    <div>
        <nav>
            <ul>
                <li><inertia-link href="/">Home</inertia-link></li>
                <li><inertia-link href="/bidders">Bidders</inertia-link></li>
                <li><inertia-link href="/cars">Cars</inertia-link></li>
            </ul>
        </nav>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "App",
};
</script>

<style scoped>
nav ul {
    display: flex;
    justify-content: space-around;
    list-style-type: none;
    padding: 10px;
}

nav ul li {
    padding: 10px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
}
</style>
