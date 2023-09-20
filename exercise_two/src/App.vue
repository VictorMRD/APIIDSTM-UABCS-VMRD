<script setup>
  import AddUsers from './components/AddUsers.vue';
  import TableUsers from './components/tableUsers.vue';
  import Login from './components/login.vue';
  import { ref } from 'vue';

  const isLoggedIn = ref(false);

  const handleLoginSuccess = (isSuccessful) => {
    isLoggedIn.value = isSuccessful;
  };
</script>

<template>
  <header>

  </header>

  <main>
    <div class="mainContainer">  
      <Login @login-success="handleLoginSuccess" />
      <AddUsers v-if="isLoggedIn" />
      <TableUsers v-if="isLoggedIn" />
    </div>
  </main>
</template>

<style scoped>
  .mainContainer{
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
    height: 97vh;
    background-color: gray;
  }
  
</style>
