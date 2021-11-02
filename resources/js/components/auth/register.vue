<template>
	<div>
	

        <form @submit.prevent="singup" class="form-signin" style="border-top: 5px solid orange;">
            <center><img src="/logo.jpg"  style="height: 80px;"></center><br>
            <h2 class="form-signin-heading">Please Rgistration</h2>
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

           
          
            <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
            <center>
            	 <router-link to="/"> Already have account?</router-link>
            </center>

        </form>

    

	</div>
</template>

<script>
	export default{


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
            singup(){
                axios.post('/api/auth/signup',this.form)
                .then(response=>{

                     Toast.fire({
                      icon: 'success',
                      title: 'Signup & Singed in successfully'
                    })
                     
                     Users.responseAfterLogin(response)
                     this.$router.push({name:'dashboard'})

                })
                .catch(error=> {
                    this.errorshow = error.response.data.errors
                     Toast.fire({
                      icon: 'warning',
                      title: 'Signup is Failed'
                    })

                })
            }
        }
    }
</script>

<style>
	
</style>