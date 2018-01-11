<html>
<head>
	<title>Computer Study Stuff</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/css_contact.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>
</head>

<body onLoad="page('contact_us')">

<?php include('header.php');?>

<div class="body">
<div class="paper_contactus">
<table class="form_contactus1" >
<form action="reg_contactus.php" onSubmit="return Contact_Us()" method="post">

<tr>
<td>First Name</td>
<td><input type="text" size="30" id="First name" name="fn" placeholder="Enter First Name" required></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" size="30" id="Last name" name="ln" placeholder="Enter Last Name" required></td>
</tr>
<tr>
<td>Email Id</td>
<td><input type="email" size="30" id="Mail Id" name="em" placeholder="xyz@abc.com" required></td>
</tr>
<tr>
<td>Contact No</td>
<td><input type="tel" size="30" id="contact number" name="num" placeholder="Enter Contact No." required></td>
</tr>
<tr>
<td>Subject</td>
<td><input type="text" size="30" spellcheck="true" id="Subject" name="sub" placeholder="Subject"></td>
</tr>
<tr>
<td>Message</td>
<td><textarea rows="4" cols="40" spellcheck="true"  id="message" name="msg" placeholder="Enter Your Message.." required></textarea></td>
</tr>
</table>
<br />
<button type="submit" name="submit" class="submit_contactus">Submit</button>
</form>
</table>
</div>	
</div>

<?php include('footer.php');?>


</body>
</html>