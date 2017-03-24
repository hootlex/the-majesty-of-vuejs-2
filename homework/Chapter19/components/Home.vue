<template>
  <div class="hello">
    <h1>All categories of pokemon</h1>
    <ul class="list-group">
   <li v-for="type in types"  class="list-group-item">
     <h3>{{ type.name }} ({{type.pokemons.length}})</h3>
     <router-link :to="{ name: 'show', params: { name: type.name }}" tag="button" class="btn btn-primary">Show pokemons</router-link>
     <!-- <button class="btn btn-primary" v-link="{ name: 'show', params: { name: type.name }}">Show pokemons</button> -->
   </li>
 </ul>
  </div>
</template>

<script>
import {pokedex} from '../pokedex.js'
export default {
  data () {
    return {
      types: pokedex.categories
    }
  }
}
</script>
<style scoped>
h1 {
  color: #42b983;
}
</style>
