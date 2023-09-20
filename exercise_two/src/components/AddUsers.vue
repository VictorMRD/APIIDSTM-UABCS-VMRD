<template>
    <div class="example">
        <button class="addUserButton" @click="mostrarFormulario">Display Add User Form</button>
        <div v-if="mostrar" id="regForm" class="registerForm">
            <form @submit.prevent="submitForm">
                <fieldset>
                    <legend>Register a new User</legend>
                    <div class="container"> 
                        <label>Nombre del Usuario</label>
                        <input id="nameName"
                        required ="true"
                        v-model="formData.name"
                        type="text">
                        <label>Correo</label>
                        <input id="emailInput"
                        required ="true"
                        v-model="formData.email"
                        type="text">
                        <label>Contrasena</label>
                        <input id="passwordInput"
                        required ="true"
                        v-model="formData.password"
                        type="password">
                        <br>
                    <button type="submit" class="submitButton" >Agregar Usuario</button>
                    </div>
                </fieldset>
            </form>
            <p>Name: {{ formData.name }}</p>
            <p>Email: {{ formData.email }}</p>
            <p>Password: {{ formData.password }}</p>
        </div>
    </div>
</template>
  
<script>

  export default {
    data() {
      return {  
        mostrar: false,
        formData: {
            name: '',
            email: '',
            password: ''
        }
      }
    },
    methods: {
        mostrarFormulario() {
        this.mostrar = !this.mostrar;
        },
        submitForm() {
        // Construir el objeto JSON con los datos del formulario
        const jsonData = {
            name: this.formData.name,
            email: this.formData.email,
            password: this.formData.password
        };
            localStorage.setItem('userData', JSON.stringify(jsonData));
            console.log(jsonData);
            this.formData = {
                name: '',
                email: '',
                password: ''
            };
        }
    }
  }
</script>
  
<style>
    .registerForm{
        padding: 20px;
        background-color: lightgray;
        border-radius: 20px;
        margin: 10px;
    }
    .addUserButton{
        background-color: lightgreen;
        padding: 10px 20px;

        font-size: 20px;
        font-weight: bold;

        border-radius: 10px;
    }
    .container{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        gap: 5px;
    }
    .submitButton{
        width: 80%;
        padding: 7px;
        background-color: lightgreen;
        border-radius: 10px;
        font-size: 15px;
        font-weight: bold;
    }
</style>