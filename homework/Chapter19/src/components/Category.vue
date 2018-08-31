<template>
  <div class="hello">
    <h2 class="subtitle">Категория покемонов "{{category.name}}"</h2>
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <ul class="list-group">
          <li v-for="pokemon in category.pokemons" class="list-group-item">
            <strong>{{ pokemon.name }}</strong> <br>
            Level: {{pokemon.level}}
          </li>
        </ul>
      </div>
    </div>

    <button type="button" @click="goBack" class="btn btn-info">Обратно к категориям</button>
    <router-link
      :to="{ path: category.name + '/pokemons/new',
      params: { name: category.name }}"
      tag="button"
      class="btn btn-success"
    >
      Добавить покемона
    </router-link>

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
