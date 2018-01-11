<html>
<head>
	<title>Change Profile</title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/css_signup-login.css" rel="stylesheet" type="text/css" media="all">
    <script src="js.js"></script>
</head>
<body onLoad="page('')">
<?php 
			if(session_id() == ''){session_start();}
			if(!(isset($_SESSION['login']))){$_SESSION["login"]=false;}
			
			if($_SESSION['login']==true)
			{
				$con = mysqli_connect("localhost","root","");
				mysqli_select_db($con, "css");
				
				$query3= 'select * from lsignup where Email="'.$_SESSION["Email"].'"';
				$result3= mysqli_query($con, $query3)or die (mysqli_error($con));
				
				$row=mysqli_fetch_array($result3);
				/*$query1= 'select First_Name from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result1= mysq`tli_query($con, $query1)or die (mysqli_error($con));
				$query2= 'select Last Name from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result2= mysqli_query($con, $query2)or die (mysqli_error($con));
				$query4= 'select Password from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result4= mysqli_query($con, $query4)or die (mysqli_error($con));
				$query5= 'select Security_Que from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result5= mysqli_query($con, $query5)or die (mysqli_error($con));
				$query6= 'select Security_Ans from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result6= mysqli_query($con, $query6)or die (mysqli_error($con));
				$query7= 'select pphoto from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result7= mysqli_query($con, $query7)or die (mysqli_error($con));
				$query7= 'select  from lsignup where First_Name="'.$_SESSION["cssuser"].'"';
				$result7= mysqli_query($con, $query7)or die (mysqli_error($con));
				*/
				//while($row = mysqli_fetch_array($result))
				//	{
					// $img_path="pphoto/".$row['pphoto'];
					//}
					
				
			}
			
?>

<?php include('header.php');?>

<div class="body">
<div class="paper_signup">
<div class="wall_start">Change Profile</div>
<form action="reg_ChangeProfile.php?mail=<?php echo $row["Email"];?>" onSubmit="return change_password()" method="post" enctype="multipart/form-data">
<table class="form_signup1"

<tr>
<td>First Name</td>
<td><input type="text" size="30" id="First name" name="fn" value="<?php echo $row["First_Name"];?>" placeholder="Enter First Name" required></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" size="30" id="Last name" name="ln" value="<?php echo $row["Last_Name"];?>" placeholder="Enter Last Name" required></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $row["Email"];?></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" size="30" id="Password" name="pwd" placeholder="Enter Password" value="<?php echo $row["Password"];?>"required></td><td id="PNotice" style="font-size:16px;">Password must be 8-25 charcter</td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" size="30" id="RPassword" value="<?php echo $row["Password"];?>" placeholder="Enter Password Again" required></td><td id="RPNotice" style="font-size:16px;">Re-Enter Password</td>
</tr>
<!--<tr>
<td>Security Question</td>
<td><select id="que_forgot" name="fpwd">
		<option>-----Please Select Question-----</option>
        <option>What is your favorite food?</option>
        <option>Birth Place?</option>
        <option>Favourite Actor?</option>
        <option>Favourite Actoress?</option>
	</select>
</td>
</tr>-->

<tr>
<td>Security Question</td>
<td><input type="text" size="30" name="fpwd" id="que_forgot" value="<?php echo $row["Security_Que"];?>" placeholder="Write your own Securtiy Que." required></td>
</tr>
<tr>
<td>Answer</td>
<td><input type="text" size="30" placeholder="Answer Of Security Question" value="<?php echo $row["Security_Ans"];?>" name="ans_fpwd" required/></td>
</tr>
</tr>
<tr>
<td>Profile Photo</td>
<td><input type="file" name="img1" value="<?php echo $row["pphoto"];?>" /></td>
</tr>
<tr>
<td>Collage Name</td>
<td><input type="text" size="30" id="Institute Name" name="in" value="<?php echo $row["Collage"];?>"placeholder="Enter Name of Your Collage" required></td>
</tr>
<tr>
<td>Semester</td>
	<td><select id="semester_signup"  name="sem">
    		<option><?php echo $row["Semester"];?></option>
            <option>1st</option>
            <option>2nd</option>
            <option>3rd</option>
            <option>4th</option>
            <option>5th</option>
            <option>6th</option>
            <option>7th</option>
            <option>8th</option>
        </select>
    </td>
</tr>
</table>
<br />
<button type="submit" name="submit" class="submit_signup">Update Profile &#9786;</button>
</form>
</div>
</div>

<?php include('footer.php');?>

<?php
if(isset($_GET["mail"]))
{
echo' 
<script>
alert("'.$_GET["mail"].'"+" is already Used...");
</script>';
}
?>

</body>
</html>
