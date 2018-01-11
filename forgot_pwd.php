<html>
<head>
	<title>Computer Study Stuff</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
	<script src="js.js"></script>
	<!--<link href="css/css_Paper.css" rel="stylesheet" type="text/css" media="all">-->
    <link href="css/css_Forget.css" rel="stylesheet" type="text/css" media="all">
	<script src="js_Paper.js"></script>
	<script>
	function fun(a)
	{
	 document.getElementById('infop').style.display="none";
	 document.getElementById('infom').style.display="none";
	 document.getElementById('infob').style.display="none";
	 document.getElementById(a).style.display="block";
	}
	function funprocess()
	{
	 document.getElementById("process_text").style.display="block";
	 document.getElementById("process_text").innerHTML="Process - Forget";
	 document.getElementById("procp").style.display="none";
	 document.getElementById("procm").style.display="none";
	 document.getElementById("procb").style.display="none";
	 
	 if(document.getElementById("p").checked)
	 {
	 document.getElementById("process_text").innerHTML="Process - Forget Password";
	 document.getElementById("procp").style.display="block";
	 document.getElementById("procm").style.display="none";
	 document.getElementById("procb").style.display="none";
	 }
	 else if(document.getElementById("m").checked)
	 {
	 document.getElementById("process_text").innerHTML="Process - Forget Mail ID"; 
	 document.getElementById("procp").style.display="none";
	 document.getElementById("procm").style.display="block";
	 document.getElementById("procb").style.display="none";
	 }
	 else if(document.getElementById("b").checked)
	 {
	 document.getElementById("process_text").innerHTML="Process - Forget Both";
	 document.getElementById("procp").style.display="none";
	 document.getElementById("procm").style.display="none";
	 document.getElementById("procb").style.display="block";
	 }
	}
    </script>
</head>

<body onLoad="page('home')">
<?php include('header.php');?>
<?php 
session_start();
$_SESSION['activepage']="forgot_pwd.php";
?>
<div class="body">
<div class="paper_forgotpwd">
<div class="form_forget">
Which type of help you need???<br /><br />
<input type="radio" name="forget" id="p" onClick="fun('infop')"> Forget Password<br />
<input type="radio" name="forget" id="m" onClick="fun('infom')"> Forget Mail Id<br />
<input type="radio" name="forget" id="b" onClick="fun('infob')"> Forget Both<br />
<input type="submit" value="Submit" id="submit_forget" onClick="funprocess()"/>
</div>

<div id="infop" class="about_need">
<p style="font-size:23px; padding-bottom:8px; border-bottom:1px solid #FFF;">Forget Password</p>
<p>You can reset your password by conformation of code sent by us to your registered mail ID after enter that mail ID...</p>
</div>

<div id="infom" class="about_need">
<p style="font-size:23px; padding-bottom:8px; border-bottom:1px solid #FFF;">Forget Mail ID</p>
<p>You can recover your Mail ID by conformation of Mobile Number (Hint will be given) and Password...</p>
</div>

<div id="infob" class="about_need">
<p style="font-size:23px; padding-bottom:8px; border-bottom:1px solid #FFF;">Forget Both</p>
<p>You can reset your password and recover your mail Id by conformation of code sent by us to your registered mail ID after enter your Mobile Number...</p>
</div>

<p id="process_text">Process</p>

<div id="procp" class="process">
Enter Your Mail ID: <input type="text" size="30" id="Mail Id" name="mail" placeholder="xyz@abc.com">
<button type="submit" value="Send" class="send">Send</button><br /><br />
Enter Code: <input type="text" size="10" maxlength="4" id="Code" name="code" placeholder="4-digit Code"><br /><br />
Reset Password: <input type="text" size="30" id="Pass" name="pass" placeholder="* * * * * * * * *">
<button type="submit" value="reset" class="send">Reset</button>
</div>

<div id="procm" class="process">
Enter Your Mobile No: <input type="text" size="30" id="Mobile" name="mobile" placeholder="Mobile No"><br /><br />
Enter Password: <input type="text" size="30" id="Pass" name="pass" placeholder="* * * * * * * * *"><br /><br />
<button type="submit" value="getID" class="send">Get Mail ID</button><br /><br />
</div>

<div id="procb" class="process">
Enter Your Mobile No: <input type="text" size="30" id="Mobile" name="mobile" placeholder="Mobile No">
<button type="submit" value="Send" class="send">Send</button><br /><br />
Enter Code: <input type="text" size="10" maxlength="4" id="Code" name="code" placeholder="4-digit Code"><br /><br />
Reset Password: <input type="text" size="30" id="Pass" name="pass" placeholder="* * * * * * * * *">
<button type="submit" value="reset" class="send">Reset</button>

</div>

</div>	
</div>
<?php include('footer.php');?>


</body>
</html>