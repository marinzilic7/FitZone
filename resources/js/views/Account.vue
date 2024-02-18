<script setup>
import Navbar from "../components/Navbar.vue";
import Footer from "../components/Footer.vue";
import Modal from "../components/Modal.vue";
import axios from "axios";
</script>

<template>
    <Navbar />
    <div>
        <div
            v-if="data.role === 'administrator'"
            class="position-absoulte start-0 top-0"
        >
            <div>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="40"
                    height="40"
                    fill="currentColor"
                    class="bi bi-list text-light"
                    viewBox="0 0 16 16"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling"
                >
                    <path
                        fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"
                    />
                </svg>
            </div>
        </div>
        <h1 class="text-center text-light mt-3">
            Pozdrav {{ data.firstName }}
        </h1>
        <h3 class="text-center text-light mt-2">Ovo su tvoji detalji računa</h3>
        <div class="container">
            <div
                class="login-form d-flex justify-content-center align-items-center"
            >
                <form
                    class="col-12 col-sm-12 col-md-10 col-lg-7 p-5 mt-3 rounded-3 shadow-sm login-form-details"
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
                            :value="data.firstName"
                            disabled
                        />
                        <label for="floatingInput">Ime</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            id="floatingInput"
                            placeholder="prezime"
                            :value="data.lastName"
                            disabled
                        />
                        <label for="floatingInput">Prezime</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input
                            type="email"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                            :value="data.email"
                            disabled
                        />
                        <label for="floatingInput">Email</label>
                    </div>

                    <div class="form-floating">
                        <input
                            type="password"
                            class="form-control"
                            id="floatingPassword"
                            placeholder="Password"
                            value="********"
                            disabled
                        />
                        <label for="floatingPassword">Lozinka</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input
                            type="text"
                            class="form-control"
                            id="floatingPassword"
                            placeholder="role"
                            :value="data.role"
                            disabled
                        />
                        <label for="floatingPassword">Uloga</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <Modal />
    <Footer />
</template>

<script>
export default {
    data() {
        return {
            data: [],
        };
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios
                .get("/getUserData")
                .then((response) => {
                    this.data = response.data;
                    console.log(this.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style scoped>
.login-form-details {
    background-color: #282828;
    padding: 5vh !important;
}
</style>
