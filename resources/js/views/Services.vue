<script setup>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
</script>

<template>
    <Navbar />
    <div>
        <h1 class="text-center mt-5 text-light">Svi naši treneri</h1>

        <div class="card d-flex ms-5 flex-wrap" v-for="coach in coaches" style="width: 18rem;" >
            <img  :src="'/images/' + coach.image" class="card-img-top" alt="Image description" />
            <div class="card-body bg-dark">
                <h5 class="card-title text-light">{{coach.firstName}}  {{ coach.lastName }}</h5>
                <p class="card-text text-light ">
                   {{ coach.description }}
                </p>
            </div>
            <ul class="list-group list-group-flush ">
                <li class="list-group-item bg-dark text-light">Email: {{coach.email}}</li>
                <li class="list-group-item bg-dark text-light">Godine: {{ coach.age }}</li>
                <li class="list-group-item bg-dark text-light">Kontakt: {{ coach.phone }}</li>
            </ul>
        </div>
    </div>
    <Footer />
</template>

<script>
export default {
    data() {
        return {
            coaches: [],
        };
    },
    created() {
        this.getCoaches();
    },
    methods: {
        getCoaches() {
            axios
                .get("/getCoaches")
                .then((response) => {
                    this.coaches = response.data.coaches;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style></style>
