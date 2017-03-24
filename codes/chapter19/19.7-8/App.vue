<template>
  <div>
    <img class="logo" src="./assets/logo.png">
    <h1>Welcome to Routing</h1>
    <router-link :to="{ name: 'hello'}" exact>Home</router-link>
    <router-link :to="{ name: 'login'}">Login</router-link>
    <router-link :to="{ name: 'stories.all'}">Stories</router-link>
    <transition name="fade">
      <!-- route outlet -->
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
  .fade-enter{
    opacity: 0
  }
</style>
