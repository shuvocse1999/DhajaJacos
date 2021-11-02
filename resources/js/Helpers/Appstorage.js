class Appstorage {

	storetoke(token){
		localStorage.setItem('token',token)
	}

	storeuser(user){
		localStorage.setItem('user',user)
	}

	store(token,user){
		this.storetoke(token)
		this.storeuser(user)
	}

	clear(){
		localStorage.removeItem('token')
		localStorage.removeItem('user')
	}

	gettoke(token){
		localStorage.getItem('token',token)
	}

	getuser(user){
		localStorage.getItem('user',user)
	}
}
export default Appstorage = new Appstorage()