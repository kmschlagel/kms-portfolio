function checkform()
{
	var error = "";
	
	
	if(document.getElementById('name').value == "")
	{
		error = "Please enter your full name.\n";
	}
	
	var user_email = document.getElementById('email').value;
	
	var reg_exp_email = /^([a-zA-Z0-9]+([\.+_-][a-zA-Z0-9]+)*)@(([a-zA-Z0-9]+((\.|[-]{1,2})[a-zA-Z0-9]+)*)\.[a-zA-Z]{2,6})$/;
	
	var valid_email = reg_exp_email.test(user_email);
	
	if(!valid_email)
	{
		error += "Please enter a valid email address.\n";
	}
	
	if(document.getElementById('subject').value == "")
	{
		error += "Please specify a subject.\n";
	}
	
		
	if(document.getElementById('comments').value == "")
	
	{
		error += "Please submit a comment.\n";
	}
	

	//don't change this part
	if(error == "")
	{
		return true;
	
	}
	else alert(error);
	{
		return false;	
	}
}