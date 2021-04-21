/* Registration Function */

function formdata()
{
	var name1= document.getElementById("firstname").value;
	var email1= document.getElementById("email").value;
	var telephone1= document.getElementById("telephone").value;
	var address1= document.getElementById("address").value; 

	localStorage.setItem("input1",firstname.value);
	localStorage.setItem("input2",email.value);
	localStorage.setItem("input3",telephone.value);
	localStorage.setItem("input4",address.value);

	u =confirm("Confirm your registration ?");
	if (u ==true)
	{
		user_info();

	} 
	
	else
	{
		window.location.href = "register.html";
	}
};



function user_info()
{
	alert("Succussfully registered!\n\n"+ 
    "Name : "+localStorage.getItem("input1")+"\n"+
    "Email : "+localStorage.getItem("input2")+"\n"+
    "Telephone : "+localStorage.getItem("input3")+"\n"+
    "Address : "+localStorage.getItem("input4")+"\n");
}

