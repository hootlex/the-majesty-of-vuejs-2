<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <h1>Welcome to Routing!</h1>
    <router-link to="/" exact>Home</router-link>
    <router-link to="/login">Login</router-link>
    <a v-link="{ path: '/' }">Home</a>
    <a v-link="{ path: '/login' }">Login</a>
    <!-- route outlet -->
    <router-view></router-view>
  </div>
</template>

<script>
// import Components as usual

</script>
