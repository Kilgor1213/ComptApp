<template>
<div>
    <Navbar/>
    
  <template>
  <v-expansion-panels focusable>
    <v-expansion-panel
      v-for="(element, index) in elements" :key="index"
    >
      <v-expansion-panel-header>Exercice {{index + 1}} - {{ element.title }}  </v-expansion-panel-header>
      <v-expansion-panel-content ripple>
        <div style="margin-top:1px; padding-top:5px;" >
       {{element.description}}
       <v-btn style="float:right; margin-top:1em" :href="element.href">Faire l'exercice</v-btn>
        </div>
      </v-expansion-panel-content>
    </v-expansion-panel>
  </v-expansion-panels>
</template>


  <div class="text-center" style="padding-top:40px;">
    <v-pagination
      v-model="page"
      :length="4"
      prev-icon="mdi-menu-left"
      next-icon="mdi-menu-right"
      @input="next"
    ></v-pagination>

  </div>
    <Footbar/>
</div>
</template>
 
 <script>
import Navbar from '../layout/Navbar.vue';
import Footbar from '../layout/Footbar.vue';

 export default {
    data () {
      return {
        elements: [
          {
            title: 'Théorie', 
            description: 'question à choix multiples',
            href: '/theorieex'
          }, 
           {
            title: 'Construction du bilan', 
            description: 'Durant cet exercice, il sera demandé de construire un bilan comme la théorie l´explique.',
            href: '/bilanex'
          }, 
          {
            title: 'Etablissement du Compte de résultat', 
            description: 'Le but étant de trouver le bénéfice net en fonction des charges et des produits à assigner.',
            href: ''
          },
           {
            title: 'Journalisation', 
            description: 'Journaliser les opérations comptables courantes de l´année.',
            href: ''
          }, 
           {
            title: 'Opérations transitoires', 
            description: 'Journaliser les écritures comptables pour finaliser la clôture.',
            href: ''
          }, 
        ],
        page: 1,
      }
    },
     name:"Exercices",
     components:{Navbar, Footbar},
     
  methods: {
    next (page) {
  api.getBillList(page)
    .then(response => {
      this.bills = response.data.content
      console.log(this.bills)
    })
    .catch(error => {
      console.log(error)
    })
}
  }
 };

 </script>