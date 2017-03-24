import Vue from 'vue'
import App from './App'
import Home from './components/Home'
import Category from './components/Category.vue'
import Create from './components/Create'

import VueRouter from 'vue-router'

Vue.use(VueRouter)

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

  const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes
  })

  /* eslint-disable no-new */
  new Vue({
    el: '#app',
    router,
    template: '<app></app>',
    components: {
      App
    }
  })
