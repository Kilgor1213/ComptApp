<template>
  <v-app height="100%">
    <Navbar/>
        <router-view></router-view> 
  </v-app>
</template>

<script>

import Navbar from './components/layout/Navbar.vue';


export default {
  name: "App",
  components: {Navbar}
};
</script>

<style>

body {
  font-family: 'Nunito', sans-serif;
}
</style>