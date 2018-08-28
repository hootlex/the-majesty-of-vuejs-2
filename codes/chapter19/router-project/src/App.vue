<template>
  <div id="app">
    <img src="./assets/logo.png">
    <h1>Добро пожаловать в маршрутизацию!</h1>
    <router-link :to="{name: 'hello'}" exact>Главная</router-link>
    <router-link :to="{name: 'login'}">Логин</router-link>
    <router-link :to="{ name: 'stories.all'}">Истории</router-link>

    <transition enter-active-class="animated rollIn">
      <router-view></router-view>
    </transition>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.router-link-active {
  color: green;
}
</style>
