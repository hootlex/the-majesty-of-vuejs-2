<template>
  <div>
    <h2>Истории</h2>
    <!-- навигация -->
    <router-link :to="{name: 'stories.all'}">Все</router-link>
    <router-link :to="{name: 'stories.famous'}">Популярные</router-link>
    <!-- вывод маршрута -->
    <router-view></router-view>
  </div>
</template>
