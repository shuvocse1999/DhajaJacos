<template>
	<div>
	

        <form @submit.prevent="createuser" class="form-signin" style="border-top: 5px solid orange;">
            <center><img src="/logo.jpg"  style="height: 80px;"></center><br>
            <h2 class="form-signin-heading">Create a User Information</h2>
            <div class="form-group">

                <input type="text" name="name"  id="name" class="form-control" placeholder="User Name"  v-model="form.name">
                <small class="text-danger" v-if="errorshow.name">{{errorshow.name[0]}}</small>
            </div>

            <div class="form-group">

                <input type="email" name="email"  id="email" class="form-control" placeholder="E-mail"  v-model="form.email">
                 <small class="text-danger" v-if="errorshow.email">{{errorshow.email[0]}}</small>
            </div>



            <div class="form-group">

                <input type="password" name="password" id="password" class="form-control" placeholder="Password"  v-model="form.password">
                  <small class="text-danger" v-if="errorshow.password">{{errorshow.password[0]}}</small>
            </div>



            <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password"  v-model="form.password_confirmation">
                   <small class="text-danger" v-if="errorshow.password_confirmation">{{errorshow.password_confirmation[0]}}</small>
            </div>

           
          
            <button class="btn btn-lg btn-success btn-block" type="submit">Create</button>
            <center>
            	  <router-link to="/user-view" class="btn btn-sm btn-outline-primary btn-block">View User</router-link>
            </center>

        </form>

    

	</div>
</template>

<script>
	export default{

  beforeCreate(){
            if(!Users.login()){
             this.$router.push({ name:'login' })
            }
        },
        data(){
            return{
                form:{
                    name:null,
                    email:null,
                    password:null,
                    password_confirmation:null,
                },
                errorshow:'',
            }
        },

        methods:{
            createuser(){
                const token = localStorage.getItem('token');
                // alert(token)
                axios.post('/api/auth/user',this.form,{ headers: {"Authorization" : `Bearer ${token}`} })
                .then(response=>{
                    this.form = '';
                    this.errorshow = '';
                     Toast.fire({
                      icon: 'success',
                      title: 'Create data successfully'
                    })
                     

                })
                .catch(error=> {
                    this.errorshow = error.response.data.errors
                     Toast.fire({
                      icon: 'warning',
                      title: 'Create is Failed'
                    })

                })
            }
        }
    }
</script>

<style>
	
</style>