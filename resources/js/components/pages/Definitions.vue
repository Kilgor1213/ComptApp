<template>
  <v-row justify="center">
    <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Plan comptable</v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        <v-spacer></v-spacer>
        <v-btn to="/plan">
          click for more</v-btn>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
    <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Bilan</v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
         <v-btn to="/bilan">
          click for more</v-btn>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
     <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Compte de résultat</v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
     <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Passif
        </v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum
           <v-btn to="/passifs">
          click for more</v-btn>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
      <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Actifs
         
        </v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum
            <v-btn to="/actifs">
          click for more</v-btn>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>

     <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Chiffres d'affaires
         
        </v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum
            <v-btn to="/ca">
          click for more</v-btn>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
    
     <v-expansion-panels accordion>
      <v-expansion-panel>
        <v-expansion-panel-header>Bénéfice
         
        </v-expansion-panel-header>
        <v-expansion-panel-content>
          Lorem ipsum
            <v-btn to="/benefice">
          click for more</v-btn>
        </v-expansion-panel-content>
      </v-expansion-panel>
    </v-expansion-panels>
  </v-row>
</template>


<script>

  export default {
      name:"Definitions",
      components:{}
  }
</script>
