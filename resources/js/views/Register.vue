<template>
    <div class="container">
        <div
            class="login-form d-flex justify-content-center align-items-center vh-100"
        >
            <form
                action="
            "
                class="col-12  col-sm-12 col-md-10 col-lg-7 p-5 rounded-3 shadow-sm login-form-details"
            >
            <div class="mb-3 d-flex justify-content-center">
                <img src="../../images/logo.png" alt="">
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
                <div class="form-floating mb-3">
                    <input
                        type="email"
                        class="form-control"
                        id="floatingInput"
                        placeholder="name@example.com"
                    />
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input
                        type="password"
                        class="form-control"
                        id="floatingPassword"
                        placeholder="Password"
                    />
                    <label for="floatingPassword">Lozinka</label>
                </div>
                <button class="btn p-3 w-100 mt-3 login-btn">Registracija</button>
                <p class="mt-3 text-light text-center">
                    Imas racun?
                    <span
                        ><RouterLink to="/" class="text-warning"
                            >Prijavi se</RouterLink
                        ></span
                    >
                </p>
            </form>
        </div>
    </div>
</template>

<script setup></script>

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
