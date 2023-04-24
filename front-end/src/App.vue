<style>
#app {
  font-family: 'Roboto', sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 14px;
    color: #444444;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}

html, body {
  height: 100%;
  margin: 0;
}


</style>

<template>
  <HeaderComponent />
  <div class="container content">
    <router-view/>
  </div>
  <FooterComponent />
</template>

<script>
import FooterComponent from './components/Footer.vue';
import HeaderComponent from './components/Header.vue';

export default {
  components: {
    FooterComponent,
    HeaderComponent
  }
}
</script>