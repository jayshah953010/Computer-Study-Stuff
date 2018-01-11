<?php
/*if(!isset($_GET["id"])){ echo"<script>window.history.back();</script>";}
*/
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con, "dbsignup");
	$down='select * from item where IID='.$_GET["id"].'';
	$result_down=mysqli_query($con,$down);
	$row_down=mysqli_fetch_array($result_down);
	
	$file="Sequences_and_Series.pdf";
	header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.$row_down[ILOC].'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
	
	/*header("Pragma: public"); // required
	header("Cache-Control: private",false); // required for certain browsers 
	header('Content-Type: "'.$row_down["ITYPE"].'\"');
	header('Content-Disposition: attachment; filename=\"'.$row_down["ILOC"].'\";' );
	//header('Content-Transfer-Encoding: binary');
	$filename="Sequences_and_Series.pdf";
	header("Content-Length: ".filesize($filename));
	
	readfile("$filename");
	*/

?>