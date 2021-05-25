<template>
<div>
  <Navbar/>
  <h1> Voici l'exercice théorique </h1>
 
<Footbar/>
</div>
</template>

<script>
import Navbar from '../../layout/Navbar.vue';
import Footbar from '../../layout/Footbar.vue';


  export default {
      name:"TheorieEX",
     components:{Navbar, Footbar},

  }
</script>
