<template>
  <div class="hello">
    <h3 class="subtitle">Add a new Pokémon!</h3>
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <input v-model="newPokemon.name" class="form-control">
      </div>
    </div>

    <br>
    <button class="btn btn-default" @click="cancel">Cancel</button>
    <button class="btn btn-success" @click="add">Save</button>
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
      this.$router.push('/category/' + this.category.name)
    },
    add () {
      this.category.pokemons.push(this.newPokemon)
      this.$router.push('/category/' + this.category.name)
    }
  }
}
</script>
