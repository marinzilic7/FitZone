<script setup>
import Navbar from "../components/Navbar.vue";
</script>

<template>
    <Navbar />

    <div class="info">
        <div class="d-flex flex-column align-items-start ms-5 me-5">
            <img src="../images/logo.png" alt="" class="mt-2"/>
            <p class="text-light col-12 col-lg-9 col-xl-6  mt-3 fs-5">
                Fitness je stanje optimalnog fizičkog i mentalnog blagostanja,
                postignuto redovitom tjelovježbom i uravnoteženom prehranom.
                Obuhvaća snagu, fleksibilnost, izdržljivost i opću zdravstvenu
                kondiciju. Održavanje tjelesne kondicije može povećati
                energetske razine, smanjiti rizik od kroničnih bolesti i
                poboljšati kvalitetu života.
            </p>
            <button class="btn btn-warning mt-1 col-lg-2 col-md-3 col-sm-3 col-12">Kreni</button>
            <div class="d-flex justify-content-between col-12 col-xl-3 col-lg-5 mt-3">
                <div>
                    <h1 class="text-warning">4k</h1>
                    <p class="text-warning">Clients</p>
                </div>
                <div>
                    <h1 class="text-warning">3.4k+</h1>
                    <p class="text-warning">Happy Client</p>
                </div>
                <div>
                    <h1 class="text-warning">3k+</h1>
                    <p class="text-warning">Perfect Result</p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.info {
    position: relative;
    background-image: url("../images/home_cover.jpg");
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0;
    pointer-events: none;
}

.info::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: -1;
}
</style>
