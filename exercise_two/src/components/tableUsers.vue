<template>
    <div class="example">
        <button class="addUserButton" @click="mostrarFormulario">Display table</button>
        <div v-if="mostrar" id="regForm" class="showTable">
            <table v-if="mostrar">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contrasena</th>
                </tr>
                <tr v-for="user in usersData" :key="user.id">
                    <td>{{ user.nombre }}</td>
                    <td>{{ user.correo }}</td>
                    <td>{{ user.contrasena }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>
  
<script>    
    import axios from 'axios';

  export default {
    data() {
      return {  
        mostrar: false,
        usersData: [], // Esta variable almacenará los datos de los usuarios
      };
    },
    methods: {
        async cargarDatosDeUsuarios() {
            try {
            const response = await axios.get('/users.json'); // Ruta al archivo JSON en la carpeta "public"
            this.usersData = response.data.usuarios; // Almacena los datos en la variable usersData
            console.log('Datos de usuarios cargados:', this.usersData);
            } catch (error) {
            console.error('Error al cargar los datos de usuarios:', error);
            }
        },
        mostrarFormulario() {
            this.mostrar = !this.mostrar;
            if (this.mostrar) {
            this.cargarDatosDeUsuarios(); // Llama al método para cargar los datos cuando se muestra la tabla
            }
        },
    }
  }
</script>
  
<style>
    .showTable{
        padding: 20px;
        background-color: lightpink;
        border-radius: 20px;
        margin: 10px;
    }
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid black;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>