<script setup>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
</script>

<template>
    <Navbar />
    <div>
        <h1 class="text-light text-center mt-5">Učlani se</h1>
        <div class="container-fluid mt-3">
            <div class="container">
                <div
                    class="login-form d-flex justify-content-center align-items-center"
                >
                    <form
                        method="POST"
                        class="col-12 col-sm-12 col-md-10 col-lg-7 p-5 rounded-3 shadow-sm login-form-details"
                    >
                        <div class="mb-3 d-flex justify-content-center">
                            <img src="../images/logo.png" alt="" />
                        </div>
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="floatingInput"
                                placeholder="ime"
                            />
                            <label for="floatingInput">Ime</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="floatingInput"
                                placeholder="prezime"
                            />
                            <label for="floatingInput">Prezime</label>
                        </div>
                        <div>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Odaberi trenera</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <select
                                class="form-select"
                                aria-label="Default select example"
                            >
                                <option selected>Odaberi trening</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <button class="btn p-3 w-100 mt-3 login-btn">
                            Učlani se
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
export default {
    data() {
        return {
            member: {
                firstName:"",
                lastName:"",
                trainer:"",
                training:"",
            },
        };
    },
    methods:{
        registerMember(){

        }
    }
};
</script>

<style scoped>
.login-form-details {
    background-color: #282828;
    padding: 5vh !important;
}

.login-btn {
    background-color: #ffba00;
    border: none;
}

.login-btn:hover {
    background-color: #ffba00;
    opacity: 0.8;
    border: none;
}
</style>
