<template>
	<div>
        <form @submit.prevent="login" class="form-signin" style="border-top: 5px solid orange;">
            <center><img src="/logo.jpg"  style="height: 80px;"></center><br>
            <h2 class="form-signin-heading">Please Login</h2>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>

                <input type="email" name="email"  id="email" class="form-control" placeholder="Email address"  v-model="form.email">

               <small class="text-danger" v-if="errorshow.email" >{{errorshow.email[0]}}</small>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"  v-model="form.password">
                <small class="text-danger" v-if="errorshow.password" >{{errorshow.password[0]}}</small>
            </div>




      
            <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>


       
               <center>
               <router-link to="/register">Registration as Account</router-link><br>
               </center>     
                         
          


        </form>

    

	</div>
</template>

<script>
	export default{
        created(){
            if(Users.login()){
             this.$router.push({ name:'dashboard' })
            }
        },
        data(){
            return{
                form:{
                    name:null,
                    email:null,
                },
                errorshow:'',
            }
        },

        methods:{
            login(){
                axios.post('/api/auth/login',this.form)
                .then(res=> {
                    Toast.fire({
                      icon: 'success',
                      title: 'Signed in successfully'
                    })
                    Users.responseAfterLogin(res)
                    this.$router.push({ name:'dashboard' })
                })
                .catch(error=> {
                  this.errorshow = error.response.data.errors;
                    Toast.fire({
                      icon: 'warning',
                      title: 'Email Or Password does Not Exists'
                    })
                })
            }
        }
    }


</script>

<style >

</style>