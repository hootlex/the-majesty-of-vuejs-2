<template>
  <div>
    <img class="logo" src="./assets/logo.png">
    <h1>Добро пожаловать в маршрутизацию</h1>
    <router-link :to="{ name: 'hello'}" exact>Главная</router-link>
    <router-link :to="{ name: 'login'}">Логин</router-link>
    <router-link :to="{ name: 'stories.all'}">Истории</router-link>
    <transition name="fade">
      <!-- вывод маршрута -->
      <router-view></router-view>
    </transition>
  </div>
</template>

<style type="text/css">
.router-link-active {
  color: green;
  border-bottom: 1px solid green;
}

.fade-enter-active {
  transition: opacity 1s
}

.fade-enter {
  opacity: 0
}
</style>
