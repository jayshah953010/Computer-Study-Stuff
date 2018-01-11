<?php 
if(session_id() == ''){session_start();}
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con, "css");
$query_cat='select * from categories where CNAME="'.$_REQUEST["sub"].'"';
$result_cat=mysqli_query($con,$query_cat);
$row_cat=mysqli_fetch_array($result_cat);
echo $_REQUEST["sub"];

		switch($_REQUEST["sub"])
		{
			case "Engg.Mathamatics-I":$temp="EM"; break;

			case "Engg. Materials & Applications":$temp="EMA"; break;

			case "Computer Concept & Programing":$temp="CCP"; break;

			case "Engg. Chemistry":$temp="EC"; break;

			case "Ele. of Elec. & Electro. Engg":$temp="EEE"; break;

			case "Environment Engg.":$temp="EE"; break;
		
				case "Applied Mechanics":$temp="AM"; break;

				case "English Language Communication":$temp="ELC"; break;

				case "Engineering Mathematics - II":$temp="EM"; break;

				case "Engineering Graphics":$temp="EG"; break;

				case "Elements of Mechanical Engg.":$temp="EME"; break;

				case "Engineering Physics":$temp="EP"; break;
			}

print_r($_FILES);
$path='Material/'.$_REQUEST["sem"].'/'.$temp.'/';
//echo $path;
echo $_FILES["iname"]["tmp_name"];
$filename=$_FILES['iname']['name'];
//echo $filename;
move_uploaded_file($_FILES["iname"]["tmp_name"],$path.$filename);


$query='insert into item (INAME,ILOC,IFNAME,CID,LEmail) values("'.$_REQUEST["fname"].'","'.$path.'","'.$filename.'","'.$row_cat["CID"].'","'.$_SESSION["Email"].'")';
$result=mysqli_query($con,$query);
mysqli_close($con);

header("Location:Categories.php?err=Upload done! Thank You");

?>