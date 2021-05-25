<template>
<div>
    <Navbar/>
        <v-row>
            <v-col cols="12" sm="4" style="border-right: 2px solid black; padding: 2.5em;">
                <h1 class="titreProjet" style="justify;">Pourquoi ce projet ?</h1>
                <p> Dans le cadre de ma formation à Réalise, je devais réaliser un projet qui me tenait à coeur, 
                c'est pourquoi j'ai décidé de créer une application Web, où dans une mesure pédagogique, apprendre la comptabilité 
                aux étudiants de l'école de commerce afin de donner un soutien. </p>
                <br>
                <p> Ce projet sera rempli de théorie vue en cours, ainsi que d'exercices basés
                sur la pratique pour aider les étudiants dans leurs quêtes de savoir.</p>
            
                <h1 class="titreProjet" style="margin-top: 10px;">Contexte</h1>
                <p> Tout au long de mon parcours, j'ai observé que beaucoup d'étudiants n'arrivent pas la matière principale de cette école. 
                Ainsi, cette plateforme sera disponible pour valider ses compétences et en apprendre davantage sur ce vaste sujet qu'est la comptabilité.
                </p>
             </v-col>

            <v-col cols="12" sm="4" style="border-right: 2px solid black; padding: 2.5em;">         
                <h1 class="titreProjet"> Qui suis-je ? </h1>
                <p>Ayant moi-même fini l'école de Commerce Aimée-Sitelmann en 2017, avec l'obtention du CFC
                en employé de commerce et la Maturité-Professionnelle en Economie et Services, je me suis dirigé vers des études supérieures
                avec la Haute école de Gestion que je reprendrai, en septembre 2020 pour ma troisième année.
                <br>
                J'ai toujours aimé apprendre des choses et transmettre le savoir une fois acquis, pour permettre de voir la réussite des autres.</p>
                
            </v-col>

            <v-col cols="12" sm="4" style=" padding: 2.5em;">
                <h1 class="titreProjet"> Mes remerciements </h1>
                <p>Grâce à Réalise et sa #FormationDigitale, j'ai pu prendre connaissance de cet univers intriguant et puissant qui se trouve dans
                l'informatique. Cette formation m'a appris premièrement à utiliser Linux, qui de base semblait lointain et pourtant proche vue ma nature de geek.
                Ensuite, j'ai touché le coeur du sujet, en développant sur les différentes technologies telles HTML, CSS, Javascript et beaucoup de framework/librairies
                qui sont actuellement en vogue.
                </p>
            </v-col>
        </v-row>
    <Footbar/>
</div>
</template>
 
 <script>
import Navbar from '../layout/Navbar.vue';
import Footbar from '../layout/Footbar.vue';
 export default {

data () {
  return {
  }
},
     name:"About",
     components:{Navbar, Footbar},
     

 };

 </script>

 <style scoped>
 
p {
    text-align: justify;
    line-height: 1.5em;
}

 .titreProjet {
     text-align:center;
     margin-bottom: 10px;
 }

 </style>