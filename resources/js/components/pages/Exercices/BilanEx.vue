<template>
<div>
  <Navbar/>
  <v-simple-table>
    <template v-slot:default>
       <thead>
        <tr>
          <th class="text-center">
          </th>
        </tr>
       </thead>
      <tbody>
        <tr
          v-for="item in actifs"
          :key="item.name"
        >
          <td>{{ item.name }}</td>
          <td>{{ item.montant }}</td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>

<Footbar/>
</div>
</template>


<script>
import Navbar from '../../layout/Navbar.vue';
import Footbar from '../../layout/Footbar.vue';


  export default {
      name:"BilanEX",
     components:{Navbar, Footbar},

    data () {
      
      return {
        actifs: [
          {
            name: 'Actifs Circulants',
            
          },
          {
            name: 'Caisse',
            montant: "",
          },
          {
            name: 'Banque',
            montant: "",
          },
          {
            name: 'Poste',
            montant: "",
          },
          {
            name: 'Créances clients',
            montant: "",
          },
          {
            name: 'Stock de marchandises',
            montant: "",
          },
          {
            name: 'Actifs immobilisés',
          },
          {
            name: 'Mobilier',
            montant: "",
          },
          {
            name: 'Infrastructures informatiques',
            montant: "",
          },
          {
            name: 'Véhicules',
            montant: "",
          }, 
          {
            name: 'Immeubles',
            montant: "",
          },
          {
            name: 'Total Actifs',
            montant: "",
          },

        ],
        passifs: [
          {
            name: 'Capitaux Etrangers à CT',
          },
          {
            name: 'Dettes fournisseurs',
            montant: "x",
          },
          {
            name: 'Autres dettes',
            montant: 262,
          },
          {
            name: 'Emprunt Bancaire',
            montant: 305,
          },
          {
            name: 'Capitaux Etrangers à LT',
            montant: 356,
          },
          {
            name: 'Dividendes',
            montant:200,
          },
          {
            name: 'Hypothèque',
            montant:300,
          },
          {
            name: 'Capitaux Propres',
            montant: 408,
          },
          {
            name: 'Capital-actions',
            montant: 452,
          },
          {
            name: 'Réserves',
            montant: 518,
          }, 
          {
            name: 'Total Passifs',
            montant: 518,
          },

        ],
      }
    },
  }
</script>
