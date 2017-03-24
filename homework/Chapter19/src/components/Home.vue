<template>
  <div class="hello">
    <h2 class="subtitle">Pokémon categories</h2>
    <ul class="list-group">
      <li v-for="category in categories"  class="list-group-item">
        <p class="category-title">{{ category.name }} ({{category.pokemons.length}})</p>
        <router-link
          :to="{ name: 'show', params: { name: category.name }}"
          tag="button" class="btn btn-primary"
        >
          Show
        </router-link>
      </li>
 </ul>
  </div>
</template>

<script>
import {pokedex} from '../pokedex.js'
export default {
  data () {
    return {
      categories: pokedex.categories
    }
  }
}
</script>
<style scoped>
  .category-title {
    font-size: 30pt;
    font-weight: 100;
  }
</style>
