var password = document.getElementById("password"), 
conform_password = document.getElementById("conform_password");

function validatepassword(){
	if(password.value ! = conform_password.value){
		conform_password.setCustomValidity("password does not match");
	}else{
		conform_password.setCustomValidity('');
	}
}


    password.onchange = validatepassword;
	conform_password.onkeyup = validatepassword;