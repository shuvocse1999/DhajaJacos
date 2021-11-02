import Appstorage from './Appstorage'
import Token from './Token'

class Users {
	responseAfterLogin(res){
		const access_token = res.data.access_token
		const username = res.data.name
		if(Token.isValid(access_token)){
			Appstorage.store(access_token,username)
		}
		return false

	}

	hasToken(){
		const storetoken = localStorage.getItem('token')
		if (storetoken) {
			return Token.isValid(storetoken)? true : false
		}
		return false
	}

	login(){
		return this.hasToken()
	}
	logout(){
		Appstorage.clear()
	}
	username(){
		if(this.login()){
			return localStorage.getItem('user')
		}
		return false
	}

	userid(){
		if (this.login()) {
			const payload = Token.payload(localStorage.getItem('token'))
			return payload.sub
		}
		return false
	}

}

export default Users = new Users();