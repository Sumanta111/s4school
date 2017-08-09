<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Educational Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link href="font.css" rel='stylesheet' type='text/css'>
  <script src="jquery.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		 margin: 0px auto;
		 padding-bottom: 40px;
         color: #5a5a5a;
         background: -webkit-linear-gradient(#dddfe1,#ECEDEE,#F3F4F5,#FAFAFA);
	}
	.navupper{
		position: relative;
		height: 80px;
		width:auto;
		outline: 0px solid #262626;
		background: -webkit-linear-gradient(#dddfe1,#ECEDEE,#F3F4F5,#FAFAFA);
		border-radius:1.5px;

	}
	.navmiddle{
		position: relative;
		height: 50px;
		width: auto;
		background: -webkit-linear-gradient(#8397a7,#556877,#3D4A56,#313A44);
		border-top:0px solid #7d97a4;
		border-radius: 1.5px;
		margin-bottom: -19px;
	}
	.navupper{
		position: relative;
	}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width:78%;
      height: 500px;
      margin:0px auto;
  }
  .container{
  	outline: 0px solid red;
  	width: auto;
  	margin: 0px;
  	background-color:#fdfdfd;
  	margin-left: -15px;
  	margin-right: -15px;
  }
  .name{
  	position: absolute;
	top: 10px;
	left: 63px;
	font-size: 3em;
    color: #2f2f2f;
    font-family: open sans, helvetica, arial, sans;
  }
  .navright{
  	position: absolute;
	top: 35px;
	right: 50px;
    color: #969696;
    font-family: open sans, helvetica, arial, sans;
    font-size: 1.5em;
     }
     .menu a{
     	position: relative;
     	height: 60px;
     	width: 700px;
     	outline: 0px solid red;
     	top: -5px;
     	left: 100px;
     	}
     	.menu li{
     	display: inline-block;
     	font-size: 1.6em;
        color: #cfcfcf;
        font-family: open sans, helvetica, arial, sans;
        margin: 10px 15px 15px 10px;
        text-decoration: none;
     	}
     	.menu a{
     		color: white !important;
     		padding: 10px;
     		top: 1px;
     		
     	}
     .menu a:hover{
     		color: black !important;
     		background-color: #ffffff;
     		padding: 10px;
     		top: 1px;
     		text-decoration: none;	
     	}
     .navmidright{
     	position: absolute;
     	height: 40px;
     	width: 70px;
     	outline: 0px solid red;
     	right: 50px;
     	bottom: 5px;
     }
     .navmidright li{
     	display: inline-block;
     	padding: 5px 15px 5px 15px;
     }
     .sbody{
     	position: relative; 
	 	height: 500px;
	 	width: auto;
	 	outline: 0px solid red;
	 	top: 18px;
	 }
	 .sbody1{
	 	position: relative;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left: 150px;
	 	background-image: url('images/IMG-20160804-WA0005.jpg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: contain;
	 }
	 .sbody2{
	 	position: absolute;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left: 450px;
	 	background-image: url('images/IMG-20160804-WA0004.jpg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: cover;
	 	background-repeat: no-repeat;
	 }
	 .sbody3{
	 	position: absolute;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left: 750px;
	 	background-image: url('images/IMG-20160804-WA0009.jpg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: cover;
	 	background-repeat: no-repeat;
	 }
	 .sbody4{
	 position: absolute;
	 	top: 100px;
	 	height: 200px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	right: 100px;
	 	background-image: url('images/me.jpg');
	 	border-radius: 50%;
	 	background-position: center;
	 	background-size: contain;
	 }
	 .squote1{
	 	position: relative;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left:150px;
	 	top:120px; 
	 }
	 .squote2{
	 	position: relative;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left:450px;
	 	top:30px;
	 }
	 .squote3{
	 	position: relative;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	left:750px;
	 	top: -60px;
	 	
	 }
	 .squote4{
	 	position: absolute;
	 	height: 90px;
	 	width: 200px;
	 	outline: 0px solid red;
	 	right:100px;
	 	top:320px;
	 }
	
</style>
<body>
	<div class="navupper">
		<div class="container1">
			<div class="name"><b>s4schools.com</b></div>
		</div>
		<div class="navright">
			Professional Website Developer's Website
		</div>
	</div>
	<div class="navmiddle">
		<div class="menu">
			<ul>
				<li><b><a href="home.php">Home</a></b></li>
				<li><b><a href="page1.php">HTML</a></b></li>
				<li><b><a href="css1.php">CSS</a></b></li>
				<li><b><a href="php1.php">PHP</a></b></li>
				<li><b><a href="aboutus.php">About us</a></b></li>
			</ul>
		</div>
	</div>
		<div class="sbody">
			<div class="sbody1">
			</div>
			<div class="squote1" style="text-align: center;font-size:2em;font-family: open sans, helvetica, arial, sans;">
				Sulagna Sengupta
			</div>	
			<div class="sbody2">
			</div>
			<div class="squote2" style="text-align: center;font-size: 2em;font-family: open sans, helvetica, arial, sans;">
				Sushrik Chandra
			</div>
			<div class="sbody3">
			</div>
			<div class="squote3" style="text-align: center;font-size:2em;font-family: open sans, helvetica, arial, sans;">
				Subhadip Banerjee
			</div>
			<div class="sbody4">
			</div>
			<div class="squote4" style="text-align: center;font-size:2em;font-family: open sans, helvetica, arial, sans;">
				Sumanta Banerjee
			</div>
		</div>
		</body>
		</html>