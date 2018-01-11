<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "css");
$Email=$_REQUEST["mail"];
if($_POST["p_button"]=="password")
{
$query='select * from lsignup where Email="'.$Email.'" and Security_Ans="'.$_REQUEST["p_ans"].'"';
$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		
	$row = mysqli_fetch_array($result);
	$query_update='UPDATE lsignup SET Password= "'.$_REQUEST["p_pass"].'" WHERE Email="'.$row["Email"].'"';
	$result_update=mysqli_query($con,$query_update);
	header('Location:forgot_pwd.php?msg=Success_P');
	}
	else
	header('Location:forgot_pwd.php?pro=Pro_Pass');
}

else if($_POST["m_button"]=="mail")
{
$query='select MailID from login where Mobile="'.$_REQUEST["m_mobile"].'" and Password="'.$_REQUEST["m_pass"].'"';
$result=mysqli_query($con,$query);
//echo $_REQUEST["m_mobile"].$_REQUEST["m_pass"];
	$row = mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1)
	{
	header('Location:Forget.php?msg=Success_M&mail='.$row["MailID"].'');
	}
	else
	header('Location:Forget.php?pro=Pro_Mail');
}

else if($_POST["b_button"]=="both")
{
$query='select * from login where Mobile="'.$_REQUEST["b_mobile"].'" and Question="'.$_REQUEST["b_que"].'"';
$result=mysqli_query($con,$query);
echo $_REQUEST["b_mobile"].$_REQUEST["b_que"];
	if(mysqli_num_rows($result)==1)
	{
	$row = mysqli_fetch_array($result);
	$query_update='UPDATE login SET Password= "'.$_REQUEST["b_pass"].'" WHERE LID="'.$row["LID"].'"';
	$result_update=mysqli_query($con,$query_update);
	header('Location:Forget.php?msg=Success_B&mail='.$row["MailID"].'');
	}
	else
	header('Location:Forget.php?pro=Pro_Both');
}
?>