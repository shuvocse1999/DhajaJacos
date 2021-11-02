class Notification{
	
	success(){
		new Noty({
		type:'success',
		layout:'topRight',
		timeout:2000,
		text: 'Successfully Done !',
		}).show();
	}

	update(){
		new Noty({
		type:'success',
		layout:'topRight',
		timeout:2000,
		text: 'Data Update Successfully Done !',
		}).show();
	}

	alert(){
		new Noty({
		type:'alert',
		layout:'topRight',
		timeout:2000,
		text: 'are you sure?',
		}).show();
	}

	error(){
		new Noty({
		type:'error',
		layout:'topRight',
		timeout:2000,
		text: 'Something Went wrong!!',
		}).show();
	}

	deleted(){
		new Noty({
		type:'error',
		layout:'topRight',
		timeout:2000,
		text: 'Deleted Data Successfully!!',
		}).show();
	}

	warning(){
		new Noty({
		type:'warning',
		layout:'topRight',
		timeout:2000,
		text: 'Oops! wrong!!',
		}).show();
	}
	imagealert(){
		new Noty({
		type:'warning',
		layout:'topRight',
		timeout:2000,
		text: 'Image Size Less then  500kb !',
		}).show();
	}
}

export default Notification = new Notification()