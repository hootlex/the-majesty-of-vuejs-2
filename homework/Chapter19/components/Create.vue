<template>
  <div class="hello">
    <h1>Add a new pokemon!</h1>
    <input v-model="newPokemon.name" class="form-control">
    <br>
    <button class="btn btn-lg btn-danger" @click="cancel">Cancel</button>
    <button class="btn btn-lg btn-warning" @click="add">Add</button>
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
      category: {},
      newPokemon: {
        name: '',
        level: '1',
        hungry: true
      }
    }
  },
  methods: {
    findCategory (category) {
      return category.name === this.$route.params.name
    },
    cancel () {
      this.$router.push('/category/' + this.$route.params.name)
    },
    add () {
      this.category.pokemons.push(this.newPokemon)
      this.$router.push('/category/' + this.$route.params.name)
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
