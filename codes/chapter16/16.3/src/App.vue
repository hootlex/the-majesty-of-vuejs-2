<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <login></login>
    <register></register>
    <stories></stories>
  </div>
</template>

<script>
import Login from './components/Login.vue'
import Register from './components/Register.vue'
import Stories from './components/Stories.vue'
export default {
  components: {
    Login,
    Register,
    Stories
  }
}
</script>

<style>
html {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

#app {
  color: #2c3e50;
  margin-top: -100px;
  max-width: 600px;
  font-family: Source Sans Pro, Helvetica, sans-serif;
  text-align: center;
}

#app a {
  color: #42b983;
  text-decoration: none;
}

.logo {
  width: 100px;
  height: 100px
}
</style>
