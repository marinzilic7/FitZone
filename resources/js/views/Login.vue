<template>
    <div class="container">
        <div class="login-form d-flex justify-content-center align-items-center vh-100">
            <form
                action="
            "
            class="col-12 col-sm-12 col-md-10 col-lg-7 p-5 rounded-3 shadow-sm login-form-details"
            >
            <div class="mb-3 d-flex justify-content-center">
                <img src="../../images/logo.png" alt="">
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
                <button class="btn p-3  w-100 mt-3 login-btn">Prijava</button>
                <p class="mt-3 text-light text-center">Nemaš racun? <span><RouterLink to="/register" class="text-warning">Registriraj se</RouterLink></span></p>
                <p class="text-center text-light text-decoration-underline">Pogledaj kao gost</p>
            </form>
        </div>
    </div>
</template>

<script >

//NASTAVLJAMO SUTRA

</script>

<style scoped>

.login-form-details{
    background-color: #282828;
    padding:7vh !important;
}

.login-btn{
    background-color: #FFBA00;
    border: none;

}

.login-btn:hover{
    background-color: #FFBA00;
    opacity: 0.8;
    border: none;
}

</style>
