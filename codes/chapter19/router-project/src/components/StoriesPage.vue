<template>
  <div>
    <h2>Stories</h2>
    <!-- navigation -->
    <router-link :to="{name: 'stories.all'}" exact>All</router-link>
    <router-link :to="{name: 'stories.famous'}">Trending</router-link>
    <!-- route outlet -->
    <router-view></router-view>
  </div>
</template>
