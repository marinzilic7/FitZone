

<script setup>

    import Navbar from "../components/Navbar.vue";
    import Footer from "../components/Footer.vue";
</script>


<template>
    <Navbar />
    <div>
        <h3 class="text-center text-light mt-5 ">Svi treninzi</h3>
        <div class="card d-flex ms-5 flex-wrap" v-for="training in trainings" style="width: 18rem;" >
            <img  :src="'/images/' + training.image" class="card-img-top" alt="Image description" />
            <div class="card-body bg-dark">
                <h5 class="card-title text-light">{{training.name}}  </h5>
                <p class="card-text text-light ">
                   {{ training.description }}
                </p>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>

export default {
    data() {
        return {
            trainings: [],
        };
    },
    created() {
        this.getTraining();
    },
    methods: {
        getTraining() {
            axios
                .get("/getTraining")
                .then((response) => {
                    this.trainings = response.data.trainings;
                    console.log("Lista treninga: ", this.trainings);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};

</script>

<style scoped>

</style>
