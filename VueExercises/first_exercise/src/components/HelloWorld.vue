<template>
  <div class="hello">
    <h3>Ingrese su Nombre</h3>
    <input type="text" v-model="persons.name" />
    <h3>Ingrese sus Apellidos</h3>
    <input type="text" v-model="persons.lastName" />
    <h3>Ingrese su Edad</h3>
    <input type="text" v-model="persons.age" />
    <br /><br />
    <button @click="agregarPersona">Confirmar</button>

    <ul>
      <li v-for="(person, index) in personsList" :key="index">
        {{ person.name }} - {{ person.lastName }} - {{ person.age }}
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  data() {
    return {
      persons: {
        name: "",
        lastName: "",
        age: 0,
      },
      personsList: [],
    };
  },
  methods: {
    agregarPersona() {
      console.log("hola")
      this.personsList.push({
        name: this.persons.name,
        lastName: this.persons.lastName,
        age: this.persons.age,
      });

      // Clear input fields after adding a person
      this.persons.name = "";
      this.persons.lastName = "";
      this.persons.age = 0;
    },
  },
};
</script>

<style scoped>
h3 {
  margin: 10px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
