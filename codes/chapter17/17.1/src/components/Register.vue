<template>
  <div id="register">
    <h2>Register Form</h2>
    <input placeholder="First Name" class="form-control">
    <input placeholder="Last Name" class="form-control">
    <input placeholder="Email address" class="form-control">
    <input placeholder="Pick a password" class="form-control">
    <input placeholder="Confirm password" class="form-control">
    <button class="btn">Sign up</button>
    <famous :stories="stories"></famous>
  </div>
  </template>

  <script>
  import Famous from './Famous.vue'
  export default {
    props: ['stories'],
    components: {
      Famous
    },
    created () {
      console.log('register')
    }
  }
  </script>
