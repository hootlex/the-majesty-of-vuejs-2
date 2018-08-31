<template>
  <div id="app">
    <img class="logo" src="./assets/logo.png">
    <login></login>
    <register :stories="stories"></register>
    <stories :stories="stories"></stories>
  </div>
</template>

<script>
import Login from './components/Login.vue'
import Register from './components/Register.vue'
import Stories from './components/Stories.vue'
export default {
  components: {
    Login,
    Register,
    Stories
  },
  data () {
    return {
      stories: [
        {
          plot: 'Моя лошадь потрясающая.',
          writer: 'Мистер Уибл',
          upvotes: 28,
          voted: false
        },
        {
          plot: 'Нарвалы изобрели шашлык.',
          writer: 'Мистер Уибл',
          upvotes: 8,
          voted: false
        },
        {
          plot: 'Тёмная сторона Силы сильнее.',
          writer: 'Дарт Вейдер',
          upvotes: 52,
          voted: false
        },
        {
          plot: 'Просто так в Мордор не попадёшь',
          writer: 'Боромир',
          upvotes: 74,
          voted: false
        }
      ]
    }
  }
}

</script>

<style>
html {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

#app {
  color: #2c3e50;
  margin-top: -100px;
  max-width: 600px;
  font-family: Source Sans Pro, Helvetica, sans-serif;
  text-align: center;
}

#app a {
  color: #42b983;
  text-decoration: none;
}

.logo {
  width: 100px;
  height: 100px
}
</style>