<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <h1>Добро пожаловать в маршрутизацию!</h1>
    <router-link :to="{ name: 'home'}">Главная</router-link>
    <router-link :to="{ name: 'login'}">Логин</router-link>
    <!-- вывод маршрута -->
    <router-view></router-view>
  </div>
</template>
