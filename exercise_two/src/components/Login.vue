<template>
    <div class="loginContainer">
        <form @submit.prevent="handleSubmit">
            <fieldset class="loginFieldset">
                <legend>Login</legend>
                <input placeholder="email" v-model="email">
                <input placeholder="password" v-model="password">
                <button type="submit">Login</button>
            </fieldset>
        </form>
                <p class="error" v-if="errorMessage">{{ errorMessage }}</p>
    </div>
</template>


<script>
import axios from 'axios'; // Importa axios

export default {
  data() {
    return {
      email: '',
      password: '',
      errorMessage: '', // Para mostrar mensajes de error
    };
  },
  methods: {
        async handleSubmit() {
        try {
            // Realiza la solicitud HTTP para obtener el archivo JSON
            const response = await axios.get('../../public/users.json');
            const userData = response.data; // Obtiene los datos del archivo JSON

            // Comprueba si el correo y la contraseña coinciden con los datos del archivo JSON
            const user = userData.usuarios.find((user) => user.correo === this.email && user.contrasena === this.password);

                if (user) {
                // Inicio de sesión exitoso
                    console.log('Inicio de sesión exitoso');
                    this.errorMessage = '';
                    const loginSuccessful = true; 

                    if (loginSuccessful) {
                        this.$emit('login-success', true); // Emite un evento de inicio de sesión exitoso
                    } else {
                        this.$emit('login-success', false); // Emite un evento de inicio de sesión fallido
                    }
            } else {
                //Inicio de sesion fallido
                this.errorMessage = 'Credenciales incorrectas. Por favor, inténtalo de nuevo.';
            }
        } catch (error) {
            //Peticion de datos fallida
            console.error(error);
            this.errorMessage = 'Ocurrió un error al obtener los datos del usuario.';
        }
        },
    },
    };
</script>
  

<style>
    .loginContainer{
        background-color: lightblue;
        border-radius: 20px;
        padding: 10px;
    }
    .loginFieldset{
        display: flex;
        gap: 10px;
    }
</style>