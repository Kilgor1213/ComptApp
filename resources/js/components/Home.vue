<template>
<div>
    <Navbar/>

<div class="TopHome">
  <v-container> 
    <v-img style="position: relative;" class="ImgHome" src="https://www.geneve.com/-/media/geneva/website/home/homepage-hero/videos/day-trip-image_220321.jpg?cx=0.3&cy=0.59&cw=2000&ch=900&hash=1EA4DC806C87046FF595A381641302BA">
    </v-img>
    <section class="TextHome" style="position: absolute; bottom: 50%; left: 20%;">
      <h1 color="grey lighten-1" style="font-size: 2.5em; letter-spacing: 2px;"> Bienvenue sur Compt'App </h1>
      <h2> La plateforme d'apprentissage de la compta par excellence </h2>
    </section>

     </v-container>
    <v-spacer></v-spacer>
    <section style="padding-top:60px; padding-bottom:60px; background:#FFE0B2; margin-bottom:30px; text-align:center;">
      <h1> "Tout seul on va plus vite, mais à deux on va plus loin"</h1>
     <p> -Proverbe africain</p>
    </section>
<div>
  <v-row>
    <v-col>
<!-- Card pour Théorie -->
<div>
 <v-card
    class="mx-auto"
    max-width="344"
  style="margin-left:100px;"
    cols="6"
        md="4"
       
  >
    <v-img
      src="https://newco.ch/storage/blog/13/DZ5hXH0Cs0xmi5jJnfxylUbBWwwFuBHBAWf7oU3F.jpg"
      height="200px"
    ></v-img>

    <v-card-title>
      De la théorie à foison
    </v-card-title>

    <v-card-subtitle>
      Améliore tes connaissances
    </v-card-subtitle>

    <v-card-actions>
      <v-btn
        color="orange lighten-2"
        text
      >
        Explore
      </v-btn>

      <v-spacer></v-spacer>

      <v-btn
        icon
        @click="show = !show"
      >
        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
    </v-card-actions>

    <v-expand-transition>
      <div v-show="show">
        <v-divider></v-divider>

        <v-card-text>
          I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
        </v-card-text>
      </div>
    </v-expand-transition>
  </v-card>
</div>
    </v-col>
    <v-col>

<!-- Card pour Pratique -->
<div>
 <v-card
    class="mx-auto"
    max-width="344"
  style="margin-left:100px;"
    cols="12"
        sm="6"
        
  >
    <v-img
      src="https://www.leblogdesrapportshumains.fr/wp-content/uploads/2015/08/Suivre-son-chemin.jpg"
      height="200px"
    ></v-img>

    <v-card-title>
      De la pratique à ne plus en finir
    </v-card-title>

    <v-card-subtitle>
      Améliore tes compétences
    </v-card-subtitle>

    <v-card-actions>
      <v-btn
        color="orange lighten-2"
        text
      >
        Explore
      </v-btn>

      <v-spacer></v-spacer>

      <v-btn
        icon
        @click="show = !show"
      >
        <v-icon>{{ show ? 'mdi-chevron-up' : 'mdi-chevron-down' }}</v-icon>
      </v-btn>
    </v-card-actions>

    <v-expand-transition>
      <div v-show="show">
        <v-divider></v-divider>

        <v-card-text>
          I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier, not with all the bed making you'll be doing. Then we'll go with that data file! Hey, you add a one and two zeros to that or we walk! You're going to do his laundry? I've got to find a way to escape.
        </v-card-text>
      </div>
    </v-expand-transition>
  </v-card>
</div>
    </v-col>
  </v-row>
</div>
</div>
<v-spacer></v-spacer>
    <Footbar/>
</div>
</template>
 
 <script>
import Navbar from './layout/Navbar.vue';
import Footbar from './layout/Footbar.vue';
import Intro from '../components/pages/Introduction.vue';


 export default {

     name:"Home",
     components:{Navbar, Footbar,Intro},
     data: () => ({
       show:false,
     })

  }
</script>

<style scoped>
.TopHome {
  padding-top: 40px;
  padding-bottom:40px;
  text-align: left;
  position:left
 
};

.ImgHome {
  padding-left: 200px;
  text-align: left important!;
  
};
.TextHome {
padding-left: 200px;
text-align: left;
padding-top: 200px;
}

</style>