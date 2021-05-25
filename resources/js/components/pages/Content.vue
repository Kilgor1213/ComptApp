<template>
<div>
    <Navbar/>
    <div>
       <h1 class="TitreDef"> Quelques définitions </h1>
    <v-row dense>
      <v-col
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            class="white--text align-end"
            gradient="to bottom, rgba(250,0,0,.1), rgba(0,100,0,.5)"
            height="200px"
          >
            <v-card-title>
             Actifs
            </v-card-title>
            <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">
          <Actif/>
            </v-card-actions>
          <v-divider></v-divider>
        </v-card>
      </v-col>

      <v-col
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            class="white--text align-end"
            gradient="to bottom, rgba(250,0,0,.1), rgba(0,100,0,.5)"
            height="200px"
          >
            <v-card-title>
              Passifs
            </v-card-title>
               <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">
            <Passif/>
            </v-card-actions
          >
          <v-divider></v-divider>
        </v-card>
      </v-col>


       <v-col
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            class="white--text align-end"
            gradient="to bottom, rgba(250,0,0,.1), rgba(0,100,0,.5)"
            height="200px"
          >
            <v-card-title>
              Chiffres d'affaires (CA)
            </v-card-title>
               <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">
            <CA/>
            </v-card-actions
          >
          <v-divider></v-divider>
        </v-card>
      </v-col>


       <v-col
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            class="white--text align-end"
            gradient="to bottom, rgba(250,0,0,.1), rgba(0,100,0,.5)"
            height="200px"
          >
            <v-card-title>
              Bénéfice
            </v-card-title>
               <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">
            <Benefice/>
            </v-card-actions
          >
          <v-divider></v-divider>
        </v-card>
      </v-col>

       <v-col
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            class="white--text align-end"
            gradient="to bottom, rgba(250,0,0,.1), rgba(0,100,0,.5)"
            height="200px"
          >
            <v-card-title>
              TVA
            </v-card-title>
               <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center"
            ><v-btn color="#F8BBD0">Cliquer pour en voir plus</v-btn
            ></v-card-actions
          >
          <v-divider></v-divider>
        </v-card>
      </v-col>
    </v-row>
    </div>
    <div>
       <h1 class="TitreDef"> Les Documents Comptables </h1>
       <DocumentsComptables/>
    </div>
    <div>
       <Chapitre1/>
    </div>

    
    <Footbar/>
</div>
</template>
 
 <script>
import Navbar from '../layout/Navbar.vue';
import Footbar from '../layout/Footbar.vue';
import Chapitre1 from './Chapitre1.vue';
import Chapitre2 from './Chapitre2.vue';
import PC from '../widgets/PlanComptable.vue';
import Actif from '../widgets/Actif.vue';
import Passif from '../widgets/Passif.vue';
import CA from '../widgets/CA.vue';
import Benefice from '../widgets/Benefice.vue';
import DocumentsComptables from './DocumentsComptables.vue';

 export default {
  data () {
    return {
      dialog: false
    }
  },
     name:"Content",
     components:{Navbar, Footbar, Chapitre1, Chapitre2, PC, DocumentsComptables, Actif, Passif, CA, Benefice}

 };

 </script>

 <style scoped>

 .TitreDef {
     padding:20px

 }

 </style>