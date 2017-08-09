<?php
	session_start();
	if(isset($_POST['login'])){
		$email=$_POST['eml'];
		$password=$_POST['psswd'];
		$link=mysqli_connect("localhost","root","","s4school");
		$qry="select U_id,Email,Name,Password from reg where Email='$email' && Password='$password';";
		$resultset=mysqli_query($link,$qry);
		list($uid,$em,$nm,$pwd)=mysqli_fetch_row($resultset);
		$count=mysqli_num_rows($resultset);
		if($count>0){
			$_SESSION['UID']=$uid;
			$_SESSION['Email']=$em;
			$_SESSION['Name']=$nm;
			$_SESSION['loginTime']=time();
			header("location:home.php");
			
		}
		else{
			echo '<script type="text/javascript">;';
			echo 'alert("you are not autherized");';
			echo 'window.location="project_front.html";';
			echo '</script>';			
		}
		
	}
?>