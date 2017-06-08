<template>
  <div class="row">
    <div class="col-md-offset-2 col-md-8">
      <h2>Sign In</h2>
      <form class="form-inline">
        <div class="form-group">
          <input class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  created () {
    console.log('login')
  }
}
</script>
