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
     	width: 300px;
     	outline: 0px solid red;
     	right: 100px;
     	bottom: 5px;
     }
     .navmidright li{
     	display: inline-block;
     	padding: 5px 15px 5px 15px;
     }
     .mainbody{
     	margin: 0px auto;
     	position: relative;
     	height: 900px;
     	width: auto;
     	outline: 0px solid red;
     	top: 5px;
     	text-align: center;
     }
     .container4{
     	position: absolute;
     	height: 350px;
     	width: 100%;
     	left: 10px;
     	top: 10px;
     	outline: 0px solid red;
     }
     .container5{
     	position: absolute;
     	height: 350px;
     	width: 350px;
     	left: 20px;
     	outline: 0px solid red;
     }
     .container6{
     	position: absolute;
     	height: 350px;
     	width: 350px;
     	left: 485px;
     	outline: 0px solid green;
     }
     .container7{
     	position: absolute;
     	height: 350px;
     	width: 350px;
     	left: 950px;
     	outline: 0px solid black;
     }
     .quote1{
     	position: absolute;
     	color: #4deac7;
     	bottom: 120px;
     	left: 85px;
     	font-size: 1.8em;
     	font-family: open sans, helvetica, arial, sans;
     	font-weight: bolder;
     }
     .subquote1{
     	position: absolute;
     	bottom: 3px;
     	text-align: center;
     	outline: 0px solid red;
     	height: 120px;
     	width: 100%;
     }
     .subquotetext1{
     	position: absolute;
     	top: 10px;
     	font-size: 15px;
     	font-family: open sans, helvetica, arial, sans;
     	font-weight: bold;
     	color: #0a4343;
     }
    .logo1{
     		margin: 0px auto;
     		position: absolute;
            outline: 0px solid red;
            background-image: url('images/htm.gif');
        	background-repeat: no-repeat;
            background-position: center;
        	background-size: contain;
        	left: 20px;
        }
        .logo2{
     		margin: 0px auto;
     		position: absolute;
            outline: 0px solid red;
            background-image: url('images/ele.gif');
        	background-repeat: no-repeat;
            background-position: center;
        	background-size: contain;
        	left: 20px;
        }
        .logo3{
     		margin: 0px auto;
     		position: absolute;
            outline: 0px solid red;
            background-image: url('images/css..gif');
        	background-repeat: no-repeat;
            background-position: center;
        	background-size: contain;
        	left: 20px;
        }
    .floating{
    
    -webkit-animation-name: Floatingx;
    -webkit-animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-timing-function: ease-in-out;
     height:130px;
     width:120px;
     position: relative; 
     margin-top: 10%;
	}
    @-webkit-keyframes Floatingx{
    from {-webkit-transform:translate(0, 0px);}
	50% {-webkit-transform:translate(0, 5px);}
    to {-webkit-transform: translate(0, -0px);    }    
	}	
	
	
	.mainbody2{
		margin: 0px auto;
		position: relative;
		height: 940px;
		width: 1340px;
		outline: 0px solid green;
		top: 365px;
		left: 10px;
	}
	.father1img{
		position: absolute;
		height: 280px;
		width: 800px;
		outline: 0px solid red;
		left: 10px;
		top: 10px;
		background: -webkit-linear-gradient(#dddfe1,#ECEDEE,#F3F4F5,#FAFAFA);
		border-radius: 50px;
	}
	.father1img1{
		position: absolute;
		height: 280px;
		width: 500px;
		outline: 0px solid red;
		top: 10px;
		right: 25px;
	}
	.img1{
		margin: 0px auto;
		background-image: url('images/Tim-Berners-Lee.jpg');
		height: 280px;
		width: 480px;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		border:0px solid red;
		border-radius: 360px;
	}
	.father2img{
		position: absolute;
		height: 280px;
		width: 800px;
		outline: 0px solid red;
		right: 25px;
		top: 330px;
		background:-webkit-linear-gradient(#dddfe1,#ECEDEE,#F3F4F5,#FAFAFA);
		border-radius: 50px;
	}
	.father2img2{
		position: absolute;
		height: 280px;
		width: 500px;
		outline: 0px solid red;
		top: 330px;
		left: 10px;
	}
	.img2{
		margin: 0px auto;
		outline: 0px solid red;
		height: 280px;
		width: 480px;
		background-image: url('images/lie.jpg');
		background-position: center;
		background-size: contain;
		border-radius: 360px;
	}
	.father3img{
		position: absolute;
		height: 280px;
		width: 800px;
		outline: 0px solid red;
		left: 10px;
		top: 650px;
		background: -webkit-linear-gradient(#dddfe1,#ECEDEE,#F3F4F5,#FAFAFA);
		border-radius: 50px;
	}
	.father3img3{
		position: absolute;
		height: 280px;
		width: 500px;
		outline: 0px solid red;
		top: 650px;
		right: 25px;
	}
	.img3{
		margin: 0px auto;
		background-image: url('images/Rasmus Lerdorf.jpg');
		height: 280px;
		width: 480px;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		border:0px solid red;
		border-radius: 360px;
	}
	.footer{
		position: relative;
		height: 500px;
		width: 100%;
		outline: 0px solid red;
		top: 410px;
		background: -webkit-linear-gradient(#8397a7,#556877,#3D4A56,#313A44);
	}
	.footerhead{
		position: relative;
		text-align: center;
		color: #ffffff;
		font-family:open sans, helvetica, arial, sans;
		font-size: 4em;
		top: 10px;
	}
	.footerhead1{
		position: relative;
		text-align: center;
		color: #ffffff;
		font-size: 1.4em;
		font-family:open sans, helvetica, arial, sans;
	}
	.inpbox1{
		background-color: #556877;
		height: 40px;
		width: 300px;
		font-family:open sans, helvetica, arial, sans;
		font-size: 1.2em;
		font-weight: bold;
		border-color: #ffffff;
		border-width: 1;
		color: #ffffff;
	}
	.toptext2{
		position: relative;
		top: 10px;
	}
	.toptext3{
		position: relative;
		top: 20px;
	}
	.inpbox2{
		background-color: #556877;
		height: 40px;
		width: 400px;
		font-family:open sans, helvetica, arial, sans;
		font-size: 1.2em;
		font-weight: bold;
		border-color: #ffffff;
		border-width: 1;
		color: #ffffff;
	}
	.toptext4{
		position: relative;
		top: 30px;
	}
	.toptext5{
		position: relative;
		top: 40px;
	}
	.inpbox3{
		background-color: #556877;
		height: 100px;
		width: 400px;
		font-family:open sans, helvetica, arial, sans;
		font-size: 1.2em;
		font-weight: bold;
		border-color: #ffffff;
		border-width: 1;
		color: #ffffff;
	}
	.toptext6{
		position: relative;
		top: 60px;
	}
	.inpbox4{
		position: relative;
		background-color: #556877;
		height: 50px;
		width: 150px;
		color: #ffffff;
		font-size: 1.2em;
		font-family:open sans, helvetica, arial, sans;
		font-weight: bold;
	}
	.fcoute{
		position: absolute;
		text-align: center;
		font-size: 1.4em;
		top: 40px;
		font-family:open sans, helvetica, arial, sans;
		font-weight: bold;
		color: #0a4343;
		text-align: center;
	}
</style>



<body>
	<?php
	session_start();
	if(!isset($_SESSION['UID'])){
		session_destroy();
		header("location:project_front.html");
	}
	else{
		include("head.php");
		echo "<br>";
		echo "Welcome : ".$_SESSION['Name']."<br>";
		echo "Your Session Id is :".session_id()."<br>";
	}
	if(isset($_POST['logout'])){
		session_destroy();
		header("location:project_front.html");
		$_SESSION['loginTime']=time();
	}
?>
	
	





	<!-- carousel  start-->
	<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/Html5-01r-1920x1080.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Introducing HTML in a new way</h3>
          <p>Wanna Code With us.Learn HtTML5 today.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/php_developer_1417084819.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Introducing PHP in a new way</h3>
          <p>Learn how to create Dynamic webpages by learning PHP</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/cssjockey-css.png" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
         <h3>Introducing CSS in a new way</h3>
          <p>Learn how to style your webpages.Sign up today</p>
        </div>
      </div>

      <div class="item">
        <img src="images/html-css.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
         <h3>Welcome you to the India's biggest website developer forum</h3>
          <p>Facing any problem?Get in touch with us...</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	<!-- carousel end -->

<div class="mainbody">
	<div class="container4">
		<div class="container5">
		<div class="logo1 floating">
			
		</div>
			<div class="quote1">
				HTML in new Way
			</div>
			<div class="subquote1">
				<div class="subquotetext1">
					This site provides u with detailed knowledge
					about HTML,enabling you to make static webpages..
					Checkout More By signing in
				</div>
			</div>
		</div>
		<div class="container6">
		<div class="logo2 floating">
			
		</div>
			<div class="quote1">
				PHP in a new Way
			</div>
			<div class="subquote1">
				<div class="subquotetext1">
					This takes you one more step further by
					making your website dynamic and completely responsive.
					Checkout more By signing in
				</div>
			</div>
		</div>
		<div class="container7">
		<div class="logo3 floating">
			
		</div>
		<div class="quote1">
				CSS in a new Way
			</div>
			<div class="subquote1">
				<div class="subquotetext1">
					Any site which doesn't attract people is of no use.
					This site helps you to make your website attractive.
					Checkout more By signing in
				</div>
			</div>
		</div>
	</div>
	<div class="mainbody2">
		<div class="father1img">
			<div class="fatherquote1">
				<div class="fcoute">
					Hyper Text Markup Language,commonly abbreviated as HTML,is a standard markup language used to create webpages.
					In 1980,physicist Tim Berners-Lee,then a constructor at CERN,purposed and prototyped enquire,a system for CERN researchers
					to use and share docouments.In 1989,Berners-Lee wrote a memo purposing an internet based hypertext system.
				</div>
			</div>
		</div>
		<div class="father1img1">
			<div class="img1"></div>
		</div>
		
		<div class="father2img">
			<div class="fatherquote2">
				<div class="fcoute">
					Cascading Style Sheets(CSS)is a style sheet language used for describing the presentation of a documentation of a document
					written in a markup language.Css was first proposed by Hakon Wium Lie on October 10,1994.At the time Lie was working with Tim
					Berners-Lee at CERN.
					</div>
			</div>
		</div>
		<div class="father2img2">
			<div class="img2"></div>
		</div>
		
		<div class="father3img">
			<div class="fatherquote3">
				<div class="fcoute">
					PHP is a server side scripting language designed for web development but also used as a general purpose programming
					language.Originally created by Ramus Lerdorf in 1994.PHP development began in 1995 when Ramus Lerdorf wrote several
					common gateway interface programs in C,which is used to maintain his personal Homepage.PHP based on the C or Perl 
					programming language structure
				</div>
			</div>
		</div>
		<div class="father3img3">
			<div class="img3"></div>
		</div>
   </div>
 </div>
			<!-- footer start-->
   <div class="footer">
   	<div class="footerhead">
   		Get In Touch
   	</div>
   	<div class="footerhead1">
   		Curious about code huh? Maybe write some for us?. Get in touch...
   	</div>
   	<div class="footerhead2">
   		<form method="post" style="text-align: center" action="git.php">
   				<div class="toptext1"><input type="text" name="box1" placeholder="First Name" class="inpbox1" required="" style="padding: 10px;"/></div>
   				<div class="toptext2"><input type="text" name="box2" placeholder="Last Name" class="inpbox1" required="" style="padding: 10px;"/></div>
   				<div class="toptext3"><input type="number" name="box3" placeholder="Phone Number" class="inpbox2" required="" maxlength="10" style="padding: 10px;"/></div>
   				<div class="toptext4"><input type="email" name="box4" placeholder="Email Address" class="inpbox2" required="" style="padding: 10px;"/></div>
   				<div class="toptext5"><textarea placeholder="Enter your message" name="box5" class="inpbox3" required="" style="padding: 10px;"/></textarea></div>
   				<div class="toptext6"><input type="submit" value="SUBMIT" class="inpbox4" name="gitsub"></div>
   				
   		</form>
   	</div>
   </div>






	</body>
</html>