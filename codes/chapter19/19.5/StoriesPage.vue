<template>
  <div>
    <h2>Истории</h2>
    <!-- навигация -->
    <router-link :to="{name: 'stories.all'}">All</router-link>
    <router-link :to="{name: 'stories.famous'}">Trending</router-link>
    <!-- вывод маршрута -->
    <router-view></router-view>
  </div>
</template>
