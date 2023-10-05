<template>
    <div class="example">
      <button class="addUserButton" @click="mostrarFormulario">Display table</button>
      <div v-if="mostrar" id="regForm" class="showTable">
        <table v-if="mostrar">
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contrasena</th>
            <th>Acciones</th>
          </tr>
          <tr v-for="user in usersData" :key="user.id">
            <td v-if="user !== editingUser">{{ user.nombre }}</td>
            <td v-else>
              <input v-model="editedUser.nombre" />
            </td>
            <td v-if="user !== editingUser">{{ user.correo }}</td>
            <td v-else>
              <input v-model="editedUser.correo" />
            </td>
            <td v-if="user !== editingUser">{{ user.contrasena }}</td>
            <td v-else>
              <input v-model="editedUser.contrasena" />
            </td>
            <td>
              <button @click="editarUsuario(user)" v-if="user !== editingUser">Editar</button>
              <button @click="guardarUsuario(user)" v-if="user === editingUser">Guardar</button>
            </td>
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
        editingUser: null, // Usuario actualmente en modo de edición
        editedUser: {}, // Datos editados temporales
      };
    },
    methods: {
        async cargarDatosDesdeLocalStorage() {
            // Intenta recuperar los datos del localStorage
            const jsonData = localStorage.getItem('userData');
            if (jsonData) {
            const userData = JSON.parse(jsonData);
            this.usersData.push(userData);
            console.log('Datos de usuarios cargados desde el localStorage:', userData);
            }
        },
        async cargarDatosDeUsuarios() {
            try { // Cargar datos desde el localStorage primero
            const response = await axios.get('/users.json'); // Luego, obtener los datos del archivo JSON
            this.usersData = response.data.usuarios; // Almacena los datos en la variable usersData
            console.log('Datos de usuarios cargados:', this.usersData);
            await this.cargarDatosDesdeLocalStorage();
            } catch (error) {
            console.error('Error al cargar los datos de usuarios:', error);
            }
        },
        mostrarFormulario() {
            this.mostrar = !this.mostrar;
            if (this.mostrar) {
            this.cargarDatosDeUsuarios();
            this.cargarDatosDesdeLocalStorage();
            }
        },
        editarUsuario(user) {
            // Inicia el modo de edición para el usuario seleccionado
            this.editingUser = user;
            this.editedUser = { ...user }; // Hacer una copia de los datos para editar
        },

        guardarUsuario(user) {
            // Guarda los cambios en el usuario editado
            const index = this.usersData.indexOf(user);
            if (index !== -1) {
                this.usersData[index] = { ...this.editedUser };
            }
                // Limpia el modo de edición
                this.editingUser = null;
                this.editedUser = {};
            },
        },
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