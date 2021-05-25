<template>
  <v-footer
  width="100%"
   dark
  align="center"
  relative
  >
  
      <v-card-text class="socialMedia" dark>
        <v-btn
          v-for="icon in icons"
          :key="icon"
          class="mx-4 white--text"
          icon
        >
          <v-icon size="24px">
            {{ icon }}
          </v-icon>
        </v-btn>
      </v-card-text>

      <v-card-text class="white--text pt-0">
        Ce projet est en cours de construction et sera amélioré avec le temps. Pour toutes questions relatives à la Comptabilité ou une demande d'implémentation, merci de me contacter sur les réseaux.
      </v-card-text>

      <v-divider></v-divider>

      <v-card-text class="textFooter">
        {{ new Date().getFullYear() }} — <strong>Vuetify</strong> - <strong>By Tristan TISSOT</strong> #FormationDigitale
      </v-card-text>
   
  </v-footer>
</template>

<script>
  export default {
    name:"Footbar",
    data: () => ({
      icons: [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-linkedin',
        'mdi-instagram',
      ],
    }),
  }
</script>

<style scoped>

.socialMedia {
    align-items:center;
};

.textFooter {
    text-align: center;
}
</style>