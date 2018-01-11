function page(a)
{
 document.getElementById(a).className="active";
 document.getElementById(a).style.color="#008080"
}

function search_box()
{
    var x=document.getElementById("Search");
	var flag=true;
	if(x.value=="")
	{	
	 	flag=false;
		alert("Please enter a keyword ");
	}
}
function Login_Me()
{
	var x=document.getElementById("Email_id");
	var flag=true;
	if(x.value=="")
	{	
	 	flag=false;
		x.style.borderColor="red";
	}
	x=document.getElementById("Password");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="red";
	}
	if(x.value.length<8||x.value.length>25)
	{
		flag=false;
		x.style.borderColor="red";
		//document.getElementById("PNotice").style.color="red";
	}
	if(flag==true)
	alert("Signing In");	
}

function Contact_Us()
{
	var x=document.getElementById("First name");
	var flag=true;
	if(x.value=="")
	{	
	 	flag=false;
		x.style.borderColor="red";
	}
	x=document.getElementById("Last name");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="red";
	}
	x=document.getElementById("Mail Id");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="red";
	}
	x=document.getElementById("message");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="red";
	}
	if(flag==true)
	alert("Thank You,We will get back to you shortly.");	
}

function Sign_Up()
{
	var x=document.getElementById("First name");
	var flag=true;
	if(x.value=="")
	{	
	 	flag=false;
		x.style.borderColor="#000";
	}
	x=document.getElementById("Last name");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="#000";
	}
	x=document.getElementById("Mail Id");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="#000";
	}
	x=document.getElementById("Password");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="#000";
	}
	if(x.value.length<8||x.value.length>25)
	{
		flag=false;
		x.style.borderColor="#000";
		document.getElementById("PNotice").style.color="#000";
	}
	var y=document.getElementById("RPassword");
	if(x.value!=y.value)
	{
		flag=false;
		y.style.borderColor="#000";
		document.getElementById("RPNotice").style.color="#000";
		document.getElementById("RPNotice").innerHTML="Must be Same As Upper Password";
	}
	return flag;
	
}
function Newsletter_Reg()
{
	x=document.getElementById("newsletter_email");
	if(x.value=="")
	{
		flag=false;
		x.style.borderColor="red";
	}
	if(flag==true)
	alert("Thank You,For showing interest in us");	
}	
