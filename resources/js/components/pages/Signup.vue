<template>
<div>
  <Navbar/>  
	<div class="divimg"  height="600px" style="background: linear-gradient(344deg, rgba(255,255,255,1) 0%, rgba(150,150,150,1) 66%, rgba(0,0,0,1) 100%);
;">
	<v-form @subit="handleSubmit">
		<v-row>
			<v-col cols="12" sm="6">
				<v-text-field class="TextInput" style="padding-top:50px; padding-left:30px;" filled v-model="firstname" box full-width single-line label="Prénom" background-color="#f4f8f7" 
				color="grey darken-2" prepend-inner-icon="mdi-border-color"></v-text-field>
			</v-col>
			<v-col cols="12" sm="6">
			<v-text-field class="TextInput" style="padding-top:50px; padding-right:30px;" filled v-model="lastname" box full-width single-line label="Nom" background-color="#f4f8f7"
			 color="grey darken-2" prepend-inner-icon="mdi-border-color"></v-text-field>
			</v-col>
			<v-col cols="12" sm="6">
				<v-text-field class="TextInput" style="padding-top:50px; padding-left:30px;" filled v-model="email" box full-width single-line label="Email" background-color="#f4f8f7" 
				color="grey darken-2" prepend-inner-icon="mdi-email-outline"></v-text-field>
			</v-col>
			<v-col cols="12" sm="6">
				<v-text-field class="TextInput" style="padding-top:50px; padding-right:30px;" filled v-model="password" box full-width single-line label="Mot de passe" background-color="#f4f8f7" 
				color="grey darken-2" prepend-inner-icon="mdi-lock-outline"></v-text-field>
			</v-col>
			<v-col cols="12" sm="6" style="text-align:center;">
				<v-text-field class="TextInput" style="padding-top:50px; padding-left:30px;" filled v-model="password_confirm" box full-width single-line label="Mot de passe à confirmer" background-color="#f4f8f7" 
				color="grey darken-2" prepend-inner-icon="mdi-lock-outline" ></v-text-field>
			</v-col>
			<v-col cols="12" style="text-align:center; padding-bottom:75px;">
				<v-btn round large dark ripple id="sign-up">Créer le compte</v-btn>
			</v-col>
		</v-row>
	</v-form>
	  	</div>
	<Footbar/>
</div>
</template>


<style>
.TextInput {
	padding-left: 20px;
	padding-right:20px
}
</style>


<script>
import Navbar from '../layout/Navbar.vue';
import Footbar from '../layout/Footbar.vue';


export default {
  name: "Login",
   components:{Navbar, Footbar},
   data() {
	   return {
		   firstname: '',
		   lastname: '',
		   email: '',
		   password: '',
		   password_confirm: '',

	   }
   },
   methods: {
	   handleSubmit() {
		   const data = {
			   firstname: this.firstname,
			   lastname: this.lastname,
			   email: this.email,
			   password: this.password,
			   password_confirm: this.password_confirm   
		   }
		   console.log('submitted')}
   }
};

</script>

<style scoped>
.active {
    padding:20px,
}
.LoginForm {
	text-align:center;
	padding-left:500px;
	padding-right:225px;
}
	


</style>
