<template>
	
<div  id="userView">
<br>
<br>
<br>
			<div class="col-sm-12 col-12 bg-white p-0 p-4 border-bottom">
				<h3 class="font-weight-bold head">
					<img src="/logo.jpg" class="img-fluid" style="height: 40px;">
				&nbsp;&nbsp;Users Information</h3>
			</div>

			<div class="container-fluid mt-4">
				<div class="card mb-4 border-0">
					<div class="card-header">
						<div class="card-title">
							View Users
						</div>
					
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<div id="searchbar">

							<label>Search</label>
							<input type="text"  v-model="searchtext">
						</div>
						<table class="table table-bordered" cellspacing="0">
							<thead class="bgtable">
								<tr class="text-light">
									<th>User ID</th>
									<th>User Name</th>
									<th>User Mail</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr v-for="data in searchUser" :key="data.id">
									<td>{{data.id}}</td>
									<td>{{data.name}}</td>
									<td>{{data.email}}</td>
									<td>
										<a class="text-dark" @click="deleteitem(data.id)" style="cursor:pointer"><i class="fa fa-trash  pr-2"></i>Delete</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>



					</div>
				</div>
			</div>




		
</div>
</template>

<script type="text/javascript">
export default{
	name:'userView',
		created(){
		if (!Users.login()) {
			this.$router.push({name:'login'})
		}

	},
	data(){
		return{
			showdata:[],
			searchtext:[],
		}
	
	},
	computed:{
		searchUser(){

				return this.showdata.filter(user => {
				// return user.name.toLowerCase().match(this.searchtext)

			return user.name.toLowerCase().indexOf(this.searchtext) > -1 || 
			user.email.toLowerCase().indexOf(this.searchtext) > -1

			})
		}
	},
	methods:{
		deleteitem(id){

			Swal.fire({
				  title: 'Are you sure?',
				  text: "You won't be able to revert this!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
				  if (result.isConfirmed) {
				  	const token = localStorage.getItem('token');
				  	axios.get('/api/auth/user-delete/'+id,{ headers: {"Authorization" : `Bearer ${token}`} })
			.then(response=>{

				this.showdata = this.showdata.filter(user=>{
					return user.id != id
				})
				// console.log(id)
				  Swal.fire(
				      'Deleted!',
				      'Your data has been deleted.',
				      'success'
				    )
				Notification.deleted()

			})
			.catch(error=>{
				console.log(error.response.data.message)
				Swal.fire(
				      'Check!',
				      error.response.data.message,
				      'error'
				    )
			})
				  
				  }
				})

			
		},

	},

	mounted(){
		     const token = localStorage.getItem('token');
		axios.get('/api/auth/user-info',{ headers: {"Authorization" : `Bearer ${token}`} })
			.then(response=>{
				// console.log(response.data)
				// alert(response.data)
				this.showdata = response.data
			})
			.catch(error=>{console.log(error)})
	}
	
}
</script>

<style scope>
#image{
	height:100px;
	width:100px;
}

#searchbar{
	float:right;
}
</style>