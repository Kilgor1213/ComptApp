<template>
<div height="100%">
  <Navbar/>  
	<div class="divimg" height="600px" style="background: linear-gradient(344deg, rgba(255,255,255,1) 0%, rgba(150,150,150,1) 66%, rgba(0,0,0,1) 100%);
;">
		<v-form>
			<v-row text-xs-center justify="center">
				<v-col cols="12">
					<v-text-field class="TextInput" style="padding-top:50px; padding-left:30px; padding-right:30px;" filled full-width single-line label="Email" background-color="#f4f8f7" 
					color="grey darken-2" prepend-inner-icon="mdi-email-outline"></v-text-field>
				</v-col>
				<v-col cols="12">
					<v-text-field class="TextInput" style="padding-top:50px; padding-left:30px; padding-right:30px;" v-model="password" filled full-width single-line label="Mot de passe" background-color="#f4f8f7" 
					color="grey darken-2" prepend-inner-icon="mdi-lock-outline"></v-text-field>
				</v-col>
				<v-col style="text-align:center; padding-bottom:75px;">
					<v-btn dark>Login</v-btn>
				</v-col>
			</v-row>
		</v-form>
	</div>


	<Footbar/>
</div>
</template>


<style scoped>

	
</style>


<script>
import Navbar from '../layout/Navbar.vue';	
import Footbar from '../layout/Footbar.vue';


export default {
  name: "Login",
   components:{Navbar, Footbar}
};

</script>

