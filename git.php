<?php
	if(isset($_POST['gitsub'])){
		$fname=$_POST['box1'];
		$lname=$_POST['box2'];
		$phno=$_POST['box3'];
		$email=$_POST['box4'];
		$message=$_POST['box5'];
		
		$link=mysqli_connect("localhost","root","","s4school");
		$qry="insert into git(F_name,L_name,Ph_no,Email,M_body) values('$fname','$lname','$phno','$email','$message')";
		$resultset=mysqli_query($link,$qry);
		if($resultset){
			header("location:home.php");
		}
		else{
			echo "some error occured....";
		}
	}
?>