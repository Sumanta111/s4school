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
				CSS Tutorial
		</div>
		<div class="mbody2">
			With Css you can style your own Web site.
			This tutorial teaches you everything about CSS.
			CSS is easy to learn - Hope,You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				<ul>	<h3>What is CSS?</h3>
          <li>    CSS stands for Cascading Style Sheets</li>
          <li>   CSS describes how HTML elements are to be displayed on screen, paper, or in other media  </li>
          <li>   CSS saves a lot of work. It can control the layout of multiple web pages all at once   </li>
          <li>    External stylesheets are stored in CSS files </li>
				</ul>
				</div>
		<div class="mbodyinner2">
		<h3>Why Use CSS?</h3>
			CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes. 
				</div>
		<div class="mbodyinner3">
			<h3>CSS Solved a Big Problem</h3>
			HTML was NEVER intended to contain tags for formatting a web page!

HTML was created to describe the content of a web page, like:

&lt;h1&gt;This is a heading&lt;/h1&gt;

&lt;p&gt;This is a paragraph.&lt;/p&gt;

When tags like &lt;font&gt;, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.

To solve this problem, the World Wide Web Consortium (W3C) created CSS.

CSS removed the style formatting from the HTML page!

		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">CSS Saves a Lot of Work!</h3>
			The style definitions are normally saved in external .css files.

With an external stylesheet file, you can change the look of an entire website by changing just one file!
	<h3>CSS Syntax</h3>
	<ul>
	<li>A CSS rule-set consists of a selector and a declaration block</li>
	<li>The selector points to the HTML element you want to style.</li>

<li>The declaration block contains one or more declarations separated by semicolons.</li>

<li>Each declaration includes a CSS property name and a value, separated by a colon.</li>

<li>A CSS declaration always ends with a semicolon, and declaration blocks are surrounded by curly braces.</li>

<li>In the following example all &lt;p&gt; elements will be center-aligned, with a red text color:</li>
</ul>
			
		</div>
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold">Example Explained</h3>
			<div class="codeback" style="text-align: center">
<xmp><!DOCTYPE html>
<html>
<head>
<style>
p {
    color: red;
    text-align: center;
} 
</style>
</head>
<body>
<p>Hello World!</p>
<p>This paragraph is styled with CSS.</p>
</body>
</html></xmp>
</div>
		</div>
		<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold">The element Selector</h3>
You can select all &lt;p&gt; elements on a page like this (in this case, all &lt;p&gt; elements will be center-aligned, with a red text color):
<div class="codeback" style="text-align: center">
<xmp><!DOCTYPE html>
<html>
<head>
<style>
p {
    text-align: center;
    color: red;
} 
</style>
</head>
<body>
<p>Every paragraph will be affected by the style.</p>
<p id="para1">Me too!</p>
<p>And me!</p>
</body>
</html>
</xmp>
</div>			
</div>
		<div class="mbodyinner7" id="font">
			<h3 style="font-weight: bold;font-size: 1.6em;">The id Selector</h3>
			The id selector uses the id attribute of an HTML element to select a specific element.

The id of an element should be unique within a page, so the id selector is used to select one unique element!

To select an element with a specific id, write a hash (#) character, followed by the id of the element.

The style rule below will be applied to the HTML element with id="para1":

	<p style="font-weight: bold;font-size: 1.4em">Example</p>
	<div class="codeback" style="text-align: center">
<xmp>	<!DOCTYPE html>
<html>
<head>
<style>
#para1 {
    text-align: center;
    color: red;
}
</style>
</head>
<body>
<p id="para1">Hello World!</p>
<p>This paragraph is not affected by the style.</p>
</body>
</html>
</xmp>
</div>
		</div>
		<div class="mbodyinner8" id="font">
			<h3 style="font-weight: bold">The class Selector</h3>
The class selector selects elements with a specific class attribute.

To select elements with a specific class, write a period (.) character, followed by the name of the class.

In the example below, all HTML elements with class="center" will be red and center-aligned:

		</div>
		<div class="mbodyinner9" id="font">
			<div class="codeback" style="text-align: center"><xmp>
<!DOCTYPE html>
<html>
<head>
<style>
.center {
    text-align: center;
    color: red;
}
</style>
</head>
<body>
<h1 class="center">Red and center-aligned heading</h1>
<p class="center">Red and center-aligned paragraph.</p> 
</body>
</html>
</xmp>
</div>
		
		
		
		
		
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li class="active"><a href="css1.php">1</a></li>
    				<li><a href="css2.php">2</a></li>
    				<li><a href="css3.php">3</a></li>
    				<li><a href="css4.php">4</a></li>
    				<li><a href="css5.php">5</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



