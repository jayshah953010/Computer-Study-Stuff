<html>
<head>
	<link href="css/common.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/css_Forget.css" rel="stylesheet" type="text/css" media="all">
	<script src="js.js"></script>
</head>
<?php include('header.php');?>
<div class="body">
<div class="paper_forget_middle">
<?php 
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "css");
$query='select * from lsignup where Email="'.$_REQUEST["p_mail"].'"';
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result)==1)
{
echo '<form action="Forget_Process.php?mail='.$_REQUEST["p_mail"].'" class="form_forget1" onSubmit="return forget_middle()" method="post">';
echo '<table>';
echo '<tr><td>Security Question</td><td>:</td><td>'.$row["Security_Que"].'</td></tr>';
echo '<tr><td>Security Answer</td><td>:</td><td><input type="text" name="p_ans" required /></td></tr><br/>';
echo '<tr><td>Enter New Password</td><td>:</td><td><input type="password" size="30" id="Password" name="p_pass" placeholder="* * * * * * * * *" required /></td><td id="PNotice" style="font-size:16px;">Password must be 8-25 charcter</td></tr>';
echo '</table>';
echo '<button type="submit" value="password" name="p_button" class="send_forget1">Next</button><br /><br />
';
echo '</form>';
}
else
{
echo '<p class="wrong_mail">Wrong Mail ID : Please Enter Correct Email Address</p>';
echo '<p class="wrong_mail"><a href="forgot_pwd.php" class="alink">Go Back</a> - And Try Again</p>';
}
?>
</div>
<?php include('footer.php');?>
</div>
</body>
</html>
