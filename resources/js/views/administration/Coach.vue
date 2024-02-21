<script setup>
import Navbar from "../../components/Navbar.vue";
import Footer from "../../components/Footer.vue";
</script>

<template>
    <Navbar />
    <div>
        <button
            class="btn float-end mt-3 me-3 btn-warning"
            data-bs-toggle="modal"
            data-bs-target="#exampleModal"
            data-bs-whatever="@mdo"
        >
            Dodaj trenera
        </button>

        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5
                            class="modal-title text-light"
                            id="exampleModalLabel"
                        >
                            Dodaj trenera
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body bg-dark">
                        <form @submit.prevent="addCoach()" method="POST">
                            <div class="mb-3">
                                <label
                                    for="recipient-name"
                                    class="col-form-label text-light"
                                    >Ime:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="recipient-name"
                                    v-model="coach.firstName"
                                    required
                                />
                            </div>

                            <div class="mb-3">
                                <label
                                    for="recipient-name"
                                    class="col-form-label text-light"
                                    >Prezime:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="recipient-name"
                                    v-model="coach.lastName"
                                    required
                                />
                            </div>

                            <div class="mb-3">
                                <label
                                    for="message-text"
                                    class="col-form-label text-light"
                                    >Description:</label
                                >
                                <textarea
                                    class="form-control"
                                    id="message-text"
                                    v-model="coach.description"
                                    required
                                ></textarea>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="recipient-name"
                                    class="col-form-label text-light"
                                    >Email:</label
                                >
                                <input
                                    type="email"
                                    class="form-control"
                                    id="recipient-name"
                                    v-model="coach.email"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="recipient-name"
                                    class="col-form-label text-light"
                                    >Godine</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="recipient-name"
                                    v-model="coach.age"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label
                                    for="recipient-name"
                                    class="col-form-label text-light"
                                    >Kontakt:</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="recipient-name"
                                    v-model="coach.phone"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label"
                                    >Dodaj sliku
                                </label>
                                <input
                                    class="form-control form-control-sm"
                                    id="formFileSm"
                                    type="file"
                                    @change="imageChange"
                                    required
                                />
                            </div>
                            <button type="submit" class="btn btn-warning w-100">
                                Dodaj
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer bg-dark">
                        <button
                            type="button"
                            class="btn btn-secondary w-100"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-center mt-5 text-light">Svi treneri</h3>
        <div class="container mt-5">
        <table class="table table-striped table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ime</th>
                    <th scope="col">Prezime</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Email</th>
                    <th scope="col">Godine</th>
                    <th scope="col">Kontakt</th>
                    <th scope="col">Izbrisi</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="coach in coaches">
                    <th scope="row">{{ coach.id }}</th>
                    <td>{{ coach.firstName }}</td>
                    <td>{{ coach.lastName }}</td>
                    <td>{{ coach.description }}</td>
                    <td>{{ coach.email }}</td>
                    <td>{{ coach.age }}</td>
                    <td>{{ coach.phone }}</td>
                    <td>
                        <button class="btn btn-sm" @click="deleteCoach(coach.id)">
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
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <Footer />
</template>

<script>
    import axios from "axios";
export default {

    data() {
        return {
            coach: {
                firstName: "",
                lastName: "",
                description: "",
                email: "",
                age: "",
                phone: "",
                image: "",
            },
            message: "",
            csrfToken: "",
            coaches: [],
        };
    },
    created(){
        this.getCoaches();
        this.fetchCsrfToken();
    },
    methods: {

        fetchCsrfToken() {
            axios
                .get("/sanctum/csrf-cookie")
                .then((response) => {
                    this.csrfToken = response.data.csrf_token;
                })
                .catch((error) => {
                    console.error(error);
                });
        },
        imageChange(event) {
            this.coach.image = event.target.files[0];
        },

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

        deleteCoach(id) {
            axios
                .post(`/deleteCoach/${id}`)
                .then((response) => {
                    this.message = response.data.message;
                    this.getCoaches();
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        addCoach(){
            let coach = new FormData();
            coach.append("firstName", this.coach.firstName);
            coach.append("lastName", this.coach.lastName);
            coach.append("description", this.coach.description);
            coach.append("email", this.coach.email);
            coach.append("age", this.coach.age);
            coach.append("phone", this.coach.phone);
            coach.append("image", this.coach.image);



            axios.defaults.headers.common["X-CSRF-TOKEN"] = this.csrfToken;

            axios
                .post("/addCoach", coach)
                .then((response) => {
                    this.message = response.data.message;
                    this.getCoaches();
                    $("#exampleModal").modal("hide");
                    this.coach = {
                        firstName: "",
                        lastName: "",
                        description: "",
                        email: "",
                        age: "",
                        contact: "",
                        image: null,
                    };

                })
                .catch((error) => {
                    if (error.response && error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    } else {
                        console.log(error);
                    }
                });
        }
    },
};
</script>

<style lang="scss" scoped></style>
