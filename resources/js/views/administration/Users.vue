<script setup>
import Navbar from "../../components/Navbar.vue";
import Footer from "../../components/Footer.vue";
import Modal from "../../components/Modal.vue";
</script>

<template>
    <Navbar />
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

    <h1 class="text-center mt-3 text-light">Svi korisnici</h1>
    <div class="container mt-5">
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Prezime</th>
                    <th scope="col">Email</th>
                    <th scope="col">Uloga</th>
                    <th scope="col">Izbrisi</th>
                    <th scope="col">Opcije</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users">
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.firstName }}</td>
                    <td>{{ user.lastName }}</td>
                    <td>{{ user.email }}</td>
                    <td>{{ user.role }}</td>
                    <td>
                        <button class="btn btn-sm" @click="deleteUser(user.id) ">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="25"
                                fill="currentColor"
                                class="bi bi-person-dash text-danger"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"
                                />
                                <path
                                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"
                                />
                            </svg>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-sm"  title="Postavi kao administratora" @click="adminUser(user.id)">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="25"
                                height="25"
                                fill="currentColor"
                                class="bi bi-person-workspace text-success"
                                viewBox="0 0 16 16"

                            >
                                <path
                                    d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"
                                />
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"
                                />
                            </svg>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <Modal />
    <Footer />
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            users: [],
            data:[],
        };
    },
    created() {
        this.getUser();
        this.getData();
    },
    methods: {
        getUser() {
            axios
                .get("/getUsers")
                .then((response) => {
                    this.users = response.data.users;
                    console.log(this.users);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        deleteUser(id) {
            axios
                .post(`/deleteUser/${id}`)
                .then((response) => {
                    this.message = response.data.message;
                    this.getUser();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        adminUser(id){
            axios
                .post(`/adminUser/${id}`)
                .then((response) => {
                    this.message = response.data.message;
                    this.getUser();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getData() {
            axios
                .get("/getUserData")
                .then((response) => {
                    this.data = response.data;
                    console.log(this.data.role);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style lang="scss" scoped></style>
