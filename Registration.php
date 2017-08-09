<?php
	if(isset($_POST['regstr'])){
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$password=$_POST['pwd'];
		
		$link=mysqli_connect("localhost","root","","s4school");
		$qry="insert into reg(Name,DOB,Email,Password) values('$name','$dob','$email','$password')";
		$resultset=mysqli_query($link,$qry);
		if($resultset){
			header("location:project_front.html");
		}
		else{
			echo "Sorry!!!Some error Occured..Try Again Later";
		}
	}
?>