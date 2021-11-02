<template>
	<div>
	

        <form @submit.prevent="updateuser" class="form-signin" style="border-top: 5px solid orange;">
            <center><img src="/logo.jpg"  style="height: 80px;"></center><br>
            <h2 class="form-signin-heading">Update a User Information</h2>
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

           
          
            <button class="btn btn-lg btn-outline-info btn-block" type="submit">Update</button>
            <center>
                <br>
            	 <router-link to="/user-view" class="btn btn-sm btn-outline-primary btn-block">View User</router-link>
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
  beforeCreate(){
            if(!Users.login()){
             this.$router.push({ name:'login' })
            }
        },

        mounted(){
            let id = this.$route.params.id
            const token = localStorage.getItem('token');
        axios.get('/api/auth/user/'+id,{ headers: {"Authorization" : `Bearer ${token}`} })
            .then(response=>{
                console.log(response.data)
                // alert(response.data)
                this.form = response.data
            })
            .catch(error=>{console.log(error)})

        },


        methods:{
            updateuser(){
                 let id = this.$route.params.id
                const token = localStorage.getItem('token');
                axios.patch('/api/auth/user/'+id,this.form,{ headers: {"Authorization" : `Bearer ${token}`} })
                .then(response=>{

                     Toast.fire({
                      icon: 'success',
                      title: 'Update data successfully'
                    })
                      this.$router.push({name:'userview'})
                     

                })
                .catch(error=> {
                    this.errorshow = error.response.data.errors
                     Toast.fire({
                      icon: 'warning',
                      title: 'Somathing Wrong! Updated is Failed!'
                    })

                })
            }
        }
    }
</script>

<style>
	
</style>