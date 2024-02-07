let p1 = {
	name :"phoetharr",
	email :"phoetharr30@gmail.com",
	height: 120,

}

let p2 = {
	name :"mg mg",
	email :"mgmg@gmail.com",
	height: 123,
}

function check (name , email)
{
 if (name == p1.name  &&  email == p1.email)
	{
		alert("Your name " + p1.name + "and  your email is " + p1.email);
	}

else if (name == p2.name  &&  email == p2.email)
	{
		alert("Your name" + p2.name + "and  your email is" + p2.email);
	}

else{
	alert("Wrong Username and Password");

	}
}
let Name = prompt("Please enter your name");
let Email = prompt("Please enter your email");
check(Name , Email)