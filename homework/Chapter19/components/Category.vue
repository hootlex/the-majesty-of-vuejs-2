<template>
  <div class="hello">
    <h1>Category: {{category.name}}</h1>
    <ul class="list-group">
      <li v-for="pokemon in category.pokemons" class="list-group-item">
        <h3>{{ pokemon.name }} <br> Level: {{pokemon.level}} </h3>
      </li>
    </ul>

    <button @click="goBack" class="btn btn-lg btn-primary">Back to Categories</button>
    <router-link :to="{ path: this.$route.params.name + '/pokemons/new', params: { name: this.$route.params.name }}" tag="button" class="btn btn-lg btn-success">Add new pokemon</router-link>
    <!-- <button
      v-link="{ path: '/category/' + this.$route.params.name + '/pokemons/new' }"
      class="btn btn-lg btn-success">
      Add new pokemon
    </button> -->
  <router-view></router-view>
</div>
</template>

<script>
import {pokedex} from '../pokedex.js'
export default {
  mounted () {
    this.category = pokedex.categories.find(this.findCategory)
  },
  data () {
    return {
      category: {}
    }
  },
  methods: {
    findCategory (category) {
      return category.name === this.$route.params.name
    },
    goBack () {
      this.$router.push('/')
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  color: #42b983;
}
</style>
