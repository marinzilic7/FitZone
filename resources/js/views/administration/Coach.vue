
<script setup>
import Navbar from "../../components/Navbar.vue";
import Footer from '../../components/Footer.vue';
</script>

<template>
    <Navbar />
    <div>
        <h1>Coach</h1>
    </div>
    <Footer />
</template>


<script>
export default {
    data() {
        return {
            users:[],
        }
    },
    methods: {
        getUser(){
            axios.get('/getUsers')
            .then(response => {
                this.users = response.data.users;
            })
            .catch(error => {
                console.log(error);
            })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>
