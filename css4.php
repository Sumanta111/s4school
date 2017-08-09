<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
</head>
<style>
	.secondbody{
		height: 170px;
		width: auto;
		top: 900px;
		outline: 0px solid red;
		
	}
	.secbody2{
		margin: 0px auto;
		position: relative;
		height: 2500px;
		width: 1310px;
		outline: 0px solid red;
		top: 5px;
		background: -webkit-linear-gradient(#eeeff0,#ECEDEE,#F3F4F5,#FAFAFA);
	}
	.mbody1{
		text-align: center; 
		font-size: 2.8em;
		font-family: open sans, helvetica, arial, sans;
		font-weight: bold;
		
	}
	.mbody2{
		text-align: center; 
		font-size: 1.5em;
		font-family: open sans, helvetica, arial, sans;
	}
	.mbodyinner{
		margin: 0px auto;
		position: relative;
		height: 2300px;
		width: 1200px;
		outline: 0px solid red;
		top: 2%;
		background-color: white;
		border-radius: 10px;
	}
	.mbodyinner1{
		top: 20px;
		left: 20px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
		outline: 0px solid red;
	}
	.mbodyinner2{
		margin: 0px auto;
		position: relative;
		outline: 0px solid red;
		top: 10px;
		left: 25px;
		font-family: open sans, helvetica, arial, sans;
	}
	.mbodyinner3{
		left: 20px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
	}
	.codeback{
		margin: 0px auto;
		position: relative;
		background-color: #faf5fe;
		border-radius: 5%;
		width: 500px;
		outline: 0px solid red;
	}
		#font{
		left: 20px;
		position: relative;
		font-size: 1.3 em;
		font-family: open sans, helvetica, arial, sans;
	}
	.foot{
		position: absolute;
		width: 175px;
		height: 30px;
		outline: 0px solid red;
		right: 10px;
		bottom: 30px;
	}
	
</style>
<body>
		<div class="secondbody">
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
	</div>
	<div class="secbody2">
		<div class="mbody1">
				CSS Tutorial Page 4
		</div>
		<div class="mbody2">
		With Css you can style your own Web site.
			This tutorial teaches you everything about CSS.
			CSS is easy to learn - Hope,You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				The CSS background properties are used to define the background effects for elements.
CSS background properties:

				<ul>	<h3>CSS Backgrounds</h3>
          <li> background-color</li>
          <li> background-image </li>
          <li> background-repeat </li>
          <li> background-attachment </li>
          <li> background-position </li>
          		</ul>
				</div>
		<div class="mbodyinner2">
		<h3>Background Color</h3>
The background-color property specifies the background color of an element.

The background color of a page is set like this:
<div class="codeback" style="text-align: center">
	<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: lightblue;
}
</style>
</head>
<body>
<h1>Hello World!</h1>
<p>This page has a background color!</p>
</body>
</html>

	</xmp>
</div>
With CSS, a color is most often specified by:
<ul>
<li>a valid color name - like "red"</li>
<li>a HEX value - like "#ff0000"</li>
<li>an RGB value - like "rgb(255,0,0)"</li>
</ul>
Look at CSS Color Values for a complete list of possible color values.

In the example below, the &lt;h1&gt;, &lt;p&gt;, and &lt;div&gt; elements have different background colors

				</div>
		<div class="mbodyinner3">
			<h3>Example Explained</h3>
<div class="codeback" style="text-align: center">
<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {
    background-color: green;
}

div {
    background-color: lightblue;
}

p {
    background-color: yellow;
}
</style>
</head>
<body>
<h1>CSS background-color example!</h1>
<div>
This is a text inside a div element.
<p>This paragraph has its own background color.</p>
We are still in the div element.
</div>
</body>
</html>
</xmp>	
</div>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">Background Image</h3>
		The background-image property specifies an image to use as the background of an element.

By default, the image is repeated so it covers the entire element.

The background image for a page can be set like this:
<div class="codeback" style="text-align: center">
	<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("paper.gif");
}
</style>
</head>
<body>
<h1>Hello World!</h1>
<p>This page has an image as the background!</p>
</body>
</html>
</xmp>
</div>
	<h3>Properties of bg image</h3>
	If the image above is repeated only horizontally (background-repeat: repeat-x;), the background will look better:
	<div class="codeback" style="text-align: center">
		<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image: url("gradient_bg.png");
    background-repeat: repeat-x;
}
</style>
</head>
<body>
<h1>Hello World!</h1>
<p>Here, a backgound image is repeated only horizontally!</p>
</body>
</html>

		</xmp>
	</div>
			
		</div>
		
		
		
		
		
		
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li ><a href="css1.php">1</a></li>
    				<li><a href="css2.php">2</a></li>
    				<li><a href="css3.php">3</a></li>
    				<li class="active"><a href="css4.php">4</a></li>
    				<li><a href="css5.php">5</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



