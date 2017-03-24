<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <h1>Welcome to Routing!</h1>
    <!-- instead of 'to' use name: 'yourName' -->
    <router-link :to="{ name: 'home'}">Home</router-link>
    <router-link :to="{ name: 'login'}">Login</router-link>
    <!-- route outlet -->
    <router-view></router-view>
  </div>
</template>
