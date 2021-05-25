<template>
  <v-stepper v-model="e1">
    <v-stepper-header>
      <v-stepper-step
        :complete="e1 > 1"
        step="1"
      >
        Notre mission
      </v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step
        :complete="e1 > 2"
        step="2"
      >
        Notre vision
      </v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step step="3">
        Notre but
      </v-stepper-step>
    </v-stepper-header>

    <v-stepper-items>
      <v-stepper-content step="1">
        <v-card
          class="mb-12"
          color="#F3E5F5"
          height="200px"
        >
        </v-card>

        <v-btn
          color="#C5CAE9"
          @click="e1 = 2"
        >
          Continue
        </v-btn>

        <v-btn text
        color="#9FA8DA">
          
          Cancel
        </v-btn>
      </v-stepper-content>

      <v-stepper-content step="2">
        <v-card
          class="mb-12"
          color="grey lighten-1"
          height="200px"
        ></v-card>

        <v-btn
          color="teal lighten-2"
          @click="e1 = 3"
        >
          Continue
        </v-btn>

        <v-btn text
        @click ="e2 = -1">
          Cancel
        </v-btn>
      </v-stepper-content>

      <v-stepper-content step="3">
        <v-card
          class="mb-12"
          color="grey lighten-1"
          height="200px"
        >
        Test <v-btn>Click</v-btn>
        </v-card>

        <v-btn
          color="teal lighten-2"
          @click="e1 = 1"
        >
          Continue
        </v-btn>

        <v-btn text
        @click ="e2 = -1">
          Cancel
        </v-btn>
      </v-stepper-content>
    </v-stepper-items>
  </v-stepper>
</template>

<script>
  export default {
      name:"Intro",
    data () {
      return {
        e1: 1,
        e2: 1,
      }
    },
  }
</script>