<script setup>
  import AddUsers from './components/AddUsers.vue';
  import TableUsers from './components/tableUsers.vue';
  import Login from './components/Login.vue';
  import { ref } from 'vue';

  const isLoggedIn = ref(false);

  const handleLoginSuccess = (isSuccessful) => {
    isLoggedIn.value = isSuccessful;
  };
  const receiveUserData = (data) => {
    userData.value.push(data);
  };
</script>

<template>
  <header>

  </header>

  <main>
    <div class="mainContainer">  
      <Login @login-success="handleLoginSuccess" />
      <AddUsers v-if="isLoggedIn" @user-added="receiveUserData"/>
      <TableUsers v-if="isLoggedIn" :usersData="userData"/>
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
