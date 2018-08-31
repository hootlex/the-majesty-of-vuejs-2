<template>
  <div id="login">
    <h2>Вход</h2>
    <input type="email" placeholder="Электронная почта">
    <input type="password" placeholder="Пароль">
    <button type="submit" class="btn">Войти</button>
  </div>
</template>

<script>
export default {
  created () {
    console.log('логин')
  }
}
</script>
