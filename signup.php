<?php
?>
<html>
<head>
	<title>Computer Study Stuff</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/css_signup-login.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>
</head>
<body onLoad="page('home')">

<?php include('header.php');?>

<div class="body">
<div class="paper_signup">
<form action="reg_signup.php" onSubmit="return Sign_Up()" method="post">
<table class="form_signup1">

<tr>
<td>First Name</td>
<td><input type="text" size="30" id="First name" name="fn" placeholder="Enter First Name" required></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" size="30" id="Last name" name="ln" placeholder="Enter Last Name" required></td>
</tr>
<tr>
<td>Enter Email</td>
<td><input type="email" size="30" id="Mail Id" name="em" placeholder="xyz@abc.com" required></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" size="30" id="Password" name="pwd" placeholder="Enter Password" required></td><td id="PNotice" style="font-size:16px;">Password must be 8-25 charcter</td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" size="30" id="RPassword" placeholder="Enter Password Again" required></td><td id="RPNotice" style="font-size:16px;">Re-Enter Password</td>
</tr>
<tr>
<td>Profile Photo</td>
<td><input type="file" name="img" required></td>
</tr>
<tr>
<td>Collage Name</td>
<td><input type="text" size="30" id="Institute Name" name="in" placeholder="Enter Name of Your Collage" required></td>
</tr>
<tr>
<td>Semester</td>
	<td><select id="semester_signup" name="sem">
    		<option>-----Please Select Semester-----</option>
            <option>1st</option>
            <option>2nd</option>
        </select>
    </td>
</tr>
</table>
<br />
<button type="submit" name="submit" class="submit_signup">Sign Up</button>
</form>
</div>
</div>

<?php include('footer.php');?>


</body>
</html>