<template>
  <div id="app">
    <img src="./assets/logo.png">
    <h1>Welcome to Routing!</h1>
    <router-link :to="{name: 'hello'}" exact>Home</router-link>
    <router-link :to="{name: 'login'}">Login</router-link>
    <router-link :to="{ name: 'stories.all'}">Stories</router-link>
    <transition enter-active-class="animated rollIn" leave-active-class="animated rollOut">
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
.fade-enter, .fade-leave-to{
opacity: 0
}
.fade-enter-active, .fade-leave-active {
transition: opacity 1s
}
.fade-enter-to, .fade-leave {
opacity: 0.8
}
.router-link-active {
  color: green;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
