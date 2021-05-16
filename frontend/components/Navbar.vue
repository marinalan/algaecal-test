<template>
<div>
    <!-- Image and text -->
    <b-navbar variant="faded" type="light" id="navbar">
      <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
      <b-container>
        <b-navbar-brand href="#">
          <img src="~/assets/images/algaecal_logo.png" class="d-inline-block align-top" id="navbrand_logo" alt="Kitten">
        </b-navbar-brand>
        <b-collapse id="nav-text-collapse" is-nav>
          <b-navbar-nav>
          </b-navbar-nav>
          <b-navbar-nav class="ml-auto">
            <b-nav-item href="/videos">Videos</b-nav-item>
            <b-nav-item href="#">Logout</b-nav-item>
          </b-navbar-nav>
        </b-collapse>
      </b-container>
    </b-navbar>
</div>
</template>
<script>
import { mapGetters } from 'vuex'

export default {
  computed: {
    ...mapGetters(['isAuthenticated','loggedInUser'])
  }
}
</script>

<style scoped>
  .navbar {
    width: 100%;
  }
  #navbar {
    position: fixed;
    top: 0;
  }
  #navbrand_logo {
    height: 50px;
  }
</style>