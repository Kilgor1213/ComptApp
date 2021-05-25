<template>
  <v-card
    class="mx-auto overflow-hidden"
    height="auto"
  >
    <v-app-bar
      color="#1E88E5"
    >
      <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

      <v-toolbar-title>Compt'App</v-toolbar-title>
    
  
     
     <v-tabs color="indigo darken-2" slider-color="indigo lighten-1">
      <v-tab key="0" to="/"> <v-icon left>mdi-home</v-icon>Home</v-tab>
      <v-tab key="1" to="/about"> <v-icon left>mdi-account</v-icon>Le Projet</v-tab>
      <v-tab key="2" to="/cours"> <v-icon left>mdi-book</v-icon>Cours</v-tab>
      <v-tab key="3" to="/exercices"> <v-icon left>mdi-fountain-pen-tip</v-icon>Exercices</v-tab>
      <v-tab key="4" to="/login"> <v-icon left>mdi-login</v-icon>Login</v-tab>
      <v-tab key="5" to="/signup"> <v-icon left>mdi-account-plus</v-icon>Signup</v-tab>


     </v-tabs>
    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >
      <v-list
        nav
        dense
      >
        <v-list-item-group
          v-model="group"
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item>
            <v-list-item-icon>
              <v-tab key="0" to="/">
              <v-icon>mdi-home</v-icon>
              </v-tab>
            </v-list-item-icon>
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <v-tab key="1" to="/about">
              <v-icon>mdi-account</v-icon>
              </v-tab>
            </v-list-item-icon>
            <v-list-item-title>Le Projet</v-list-item-title>
            </v-list-item>

             <v-list-item>
            <v-list-item-icon>
              <v-tab key="2" to="/cours">
              <v-icon>mdi-book</v-icon>
              </v-tab>
            </v-list-item-icon>
            <v-list-item-title>Cours</v-list-item-title>
            </v-list-item>

             <v-list-item>
            <v-list-item-icon>
              <v-tab key="3" to="/exercices">
              <v-icon>mdi-fountain-pen-tip</v-icon>
              </v-tab>
            </v-list-item-icon>
            <v-list-item-title>Exercices</v-list-item-title>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
  </v-card>
</template>

<script>
  export default {
    name:"Navbar",
    data: () => ({
      return: {
        search:""
      }, 
      drawer: false,
      group: null,
    }),
   
  }
</script>

<style>
.v-tabs-bar {
  float: right !important;
}

</style>