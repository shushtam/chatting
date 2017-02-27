function check()
{
	var nickname=document.getElementById("nickname").value;
	var email=document.getElementById("email").value;
	var password=document.getElementById("password").value;
	var reg_nick=/^[a-z0-9]+$/i;
	var pass=password.length;
	if(!reg_nick.test(nickname))
	{
		alert("Nickname must contain only letters and numbers");
	}
	if(pass<5)
	{
		alert("Password must be at least 5 characters");
	}
	
}
