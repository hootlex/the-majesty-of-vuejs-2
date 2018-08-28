<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <h1>Добро пожаловать в маршрутизацию!</h1>
    <router-link to="/" exact>Главная</router-link>
    <router-link to="/login">Логин</router-link>
    <a v-link="{ path: '/' }">Главная</a>
    <a v-link="{ path: '/login' }">Логин</a>
    <!-- вывод маршрута -->
    <router-view></router-view>
  </div>
</template>

<script>
// import Components as usual

</script>
