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
                        v-model="formData.nombre"
                        type="text">
                        <label>Correo</label>
                        <input id="emailInput"
                        required ="true"
                        v-model="formData.correo"
                        type="text">
                        <label>Contrasena</label>
                        <input id="passwordInput"
                        required ="true"
                        v-model="formData.contrasena"
                        type="password">
                        <br>
                    <button type="submit" class="submitButton" >Agregar Usuario</button>
                    </div>
                </fieldset>
            </form>
            <p>Name: {{ formData.nombre }}</p>
            <p>Email: {{ formData.correo }}</p>
            <p>Password: {{ formData.contrasena }}</p>
        </div>
    </div>
</template>
  
<script>
  import { ref, defineProps, defineEmits } from 'vue';
  export default {
    data() {
      return {  
        mostrar: false,
        formData: {
            nombre: '',
            correo: '',
            contrasena: ''
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
            nombre: this.formData.nombre,
            correo: this.formData.correo,
            contrasena: this.formData.contrasena
        };
            localStorage.setItem('userData', JSON.stringify(jsonData));
            console.log(jsonData);
            this.formData = {
                nombre: '',
                correo: '',
                contrasena: ''
            };
        }
    }
  };
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