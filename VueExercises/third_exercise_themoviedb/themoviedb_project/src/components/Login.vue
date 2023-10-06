<script>
    import { createApp } from 'vue';
    import axios from 'axios';
    import VueAxios from 'vue-axios';
    
    const app = createApp();

    app.use(VueAxios, axios);

    export default{
        data(){
            return {
                movieData: null, // Se usa para almacenar la informacion del request realizado
                loading: true, // Se tiene por default en true para mostrar la carga de la solicitud
                error: null, //Dependiendo del resultado de la solicitud cambia su estado
                username: '',
                password: '',
                requestoken: null,
                Login: false,
                SessionKey: ''
            };
        },
        mounted(){
                console.log("username:"+localStorage.getItem('username'));
                app.axios.get('https://api.themoviedb.org/3/authentication/token/new',{
                    headers: {
                        'Authorization': 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2YTcxYTExM2RkZGQ4ZDQ3NmU4YjhlMDdkYjgzYmI5ZCIsInN1YiI6IjY1MTlkOTY1MDcyMTY2MDEzOWM1ZDQ4MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fvwRaFzNROAhNcfeY1qE_fR1eUi4rKTly4QCrm8u-C4',
                        'accept': 'application/json'
                    }
                })
                .then((resp)=>{
                    //Almacenamos nuestro request token generado para logear al usuario a futuro.
                    this.requestoken = resp.data.request_token;
                    /* Se cambia el estado del Loading para que se muestren los resultados */
                    this.loading = false;
                })
                .catch((error) => {
                    // Aqui va el codigo para manejar los errores
                    this.error = "Hubo un error al intentar crear un request token.";
                })
        },
        methods: {
            iniciarSesion(){
                app.axios.post('https://api.themoviedb.org/3/authentication/token/validate_with_login',{
                'username': this.username,
                'password': this.password,
                'request_token': this.requestoken
                }, {
                    headers: {
                        'Authorization': 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2YTcxYTExM2RkZGQ4ZDQ3NmU4YjhlMDdkYjgzYmI5ZCIsInN1YiI6IjY1MTlkOTY1MDcyMTY2MDEzOWM1ZDQ4MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fvwRaFzNROAhNcfeY1qE_fR1eUi4rKTly4QCrm8u-C4',
                        'accept': 'application/json',
                        'content-type': 'application/json'
                    }
                })
                .then((resp)=>{
                    this.movieData = resp.data; //Almacenamos la informacion en una variable local
                    // Se cambia el estado del Loading para que se muestren los resultados 
                    this.loading = false;

                        app.axios.post('https://api.themoviedb.org/3/authentication/session/new', {
                            'request_token': this.requestoken
                        }, {
                            headers: {
                                'Authorization': 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2YTcxYTExM2RkZGQ4ZDQ3NmU4YjhlMDdkYjgzYmI5ZCIsInN1YiI6IjY1MTlkOTY1MDcyMTY2MDEzOWM1ZDQ4MCIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.fvwRaFzNROAhNcfeY1qE_fR1eUi4rKTly4QCrm8u-C4', // Reemplaza con tu token de acceso
                                'accept': 'application/json',
                            },
                        })
                        .then((resp) => {
                            this.SessionKey = resp.data;
                            console.log(this.SessionKey.session_id);
                            localStorage.setItem('username', this.username);
                            this.$router.push('/index/'+this.SessionKey.session_id);
                        })
                        .catch((error) => {
                            console.error('Error al verificar la sesión:', error);
                        });
                })
                .catch((error) => {
                    // Aqui va el codigo para manejar los errores
                    this.error = "Hubo un error al intentar iniciar sesion.";
                }) 
            },
            showLoginForm(flag){
                this.Login = flag;
            },
            destroySession(){
                    localStorage.removeItem('username');
            }
        }
        
    }
</script>

<template>
    <div class="global-container">    
        <div class="login-container" v-if="Login">
            <h1>Login</h1>
            <form @submit.prevent="iniciarSesion">
                <label>Username</label>
                <input type="text" v-model="username">
                <label>Contrasena</label>
                <input type="password" v-model="password">
                <br><br>
                <button type="submit"> Entrar </button>
            </form>
        </div>
        <div class="menu-options" v-else>
            <button @click="showLoginForm(true)">Login</button>
            <button @click="destroySession">Register</button>
        </div>
    </div>
</template>

<style>
    .login-container, .menu-options{
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        height: 250px;
        width: 15%;

        background-color: cadetblue;
        padding: 20px;
    }
    .menu-options{
        gap: 20px;
        height: 100px;
    }
    .menu-options button{
        width: 100%;
    }

    .login-container form{
        display: flex;
        flex-direction: column;
    }
    .global-container{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
        height: 100vh;
    }
</style>