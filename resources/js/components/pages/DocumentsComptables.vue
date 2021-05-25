<template>
    <v-row dense>


 <!-- Card pour le Plan Comptable -->
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
             Plan Comptable
            </v-card-title>
            <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">

         <PC/>
            </v-card-actions>
          <v-divider></v-divider>
        </v-card>
      </v-col>


 <!-- Card pour le Bilan -->
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
             Bilan
            </v-card-title>
            <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">

         <Bilan/>
            </v-card-actions>
          <v-divider></v-divider>
        </v-card>
      </v-col>

<!-- Card pour Compte de résultat -->
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
              Compte de résultat
            </v-card-title>
               <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">
         <CR/>
            </v-card-actions
          >
          <v-divider></v-divider>
        </v-card>
      </v-col>


<!-- Card pour Cash Flow -->
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
              Cash Flow
            </v-card-title>
               <v-card-text>
              Bla bla bla 
              </v-card-text>
          </v-img>
          <v-card-actions class="justify-center">
         <CF/>
            </v-card-actions
          >
          <v-divider></v-divider>
        </v-card>
      </v-col>
    </v-row>

</template> 

<script>
import Bilan from '../widgets/Bilan.vue';
import PC from '../widgets/PlanComptable.vue';
import CR from '../widgets/CompteResultat.vue';
import CF from '../widgets/CashFlow.vue';


export default {
    name:"DocumentsComptables",
    components: {Bilan, PC, CR, CF}

        
    
}
</script>
