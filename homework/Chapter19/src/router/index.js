import Vue from 'vue'
import Home from '@/components/Home'
import Category from '@/components/Category.vue'
import Create from '@/components/Create'

import Router from 'vue-router'

Vue.use(Router)

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/category/:name',
    name: 'show',
    component: Category,
    children: [
      {
        path: 'pokemons/new',
        component: Create
      }
    ]
  }
]

export default new Router({
  mode: 'history',
  base: '/',
  routes
})
