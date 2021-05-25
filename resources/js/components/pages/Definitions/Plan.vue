<template>
<div>
<Navbar/>
  <v-simple-table dark fixed-header>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">
            Comptes
          </th>
          <th class="text-left">
            Numéro
          </th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="item in accounts"
          :key="item.name"
        >
          <td>{{ item.name }}</td>
          <td>{{ item.numero }}</td>
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
data () {
      return {
        accounts: [
          {
            name: 'Frozen Yogurt',
            numero: 159,
          },
          {
            name: 'Ice cream sandwich',
            numero: 237,
          },
          {
            name: 'Eclair',
            numero: 262,
          },
          {
            name: 'Cupcake',
            numero: 305,
          },
          {
            name: 'Gingerbread',
            numero: 356,
          },
          {
            name: 'Jelly bean',
            numero: 375,
          },
          {
            name: 'Lollipop',
            numero: 392,
          },
          {
            name: 'Honeycomb',
            numero: 408,
          },
          {
            name: 'Donut',
            numero: 452,
          },
          {
            name: 'KitKat',
            numero: 518,
          },
        ],
      }
    },
     name:"Plan",
     components:{Navbar, Footbar,}
 };

</script>    

<style>

.text-left {
  text-align: left;
}


</style>