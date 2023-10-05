<script>
  import Catalogue from './components/MovieCatalogue.vue';
  import Headerr from './components/Header.vue';
  export default{
    name: "App",
    components: {
      Catalogue,
      Headerr
    }
  }
</script>

<template>
  <header>
    <Headerr />
  </header>

  <main>
    <Catalogue />
  </main>
</template>

<style scoped>
  body{
    background-color: red;
    width: 100%;
  }
</style>
