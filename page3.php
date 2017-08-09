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
		text-align: center;
		position: relative;
		outline: 0px solid red;
		top: 20px;
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
				Html5 Tutorial
		</div>
		<div class="mbody2">
			With HTML you can create your own Web site.
			This tutorial teaches you everything about HTML.
			HTML is easy to learn - You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				<ul>	<h3>HTML background color</h3>
          <li>    The background-color: property defines the color of the background for an HTML element.</li>
          		</ul>
				</div>
		<div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>   
<html>
<head></head>
<body style="background-color: #6935ca">
<h1>My First Heading</h1>
<p>My first paragraph.</p>
</body>
</html></xmp></div>
				</div>
		<div class="mbodyinner3">
			<ul><h3>Example Explained</h3>
				<li>The background-color: defines a color for any HTML content throughout its body</li>
				<li>The color can be written in two ways. One way is <b>HEX form</b> and other is writing simply just the <b>color's name</b></li>
			</ul>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">	HTML Text color & fonts style</h3>
			The <b>color</b> property defines the text color for an HTML element.<br />
			The <b>font-family</b> defines the font to be used for an HTML elements.<br />
		</div>
		
					<div class="codeback"><xmp>   
<html>
<head></head>
<body>
<h1 style="color: blue">My First Heading</h1>
<p style="font-family: chiller">My first paragraph.</p>
</body>
</html></xmp></div>

			<div class="mbodyinner5" id="font">
				<h3 style="font-weight: bold;font-size: 1.6em;">HTML Text size & Text allignment</h3>
				The <b>font-size</b>property defines the text size for an HTML element.<br>
				The <b>text-align</b>property defines the horizontal text alignment for an HTML element.
				<p style="font-weight: bold;font-size: 1.4em">Example</p>
			</div>
		
		<div class="codeback"><xmp>   
<html>
<head></head>
<body>
<h1 style="font-size: 100%">My First Heading</h1>
<p style="text-align: center">My first paragraph.</p>
</body>
</html></xmp></div>
		
		
		
		<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold">HTML references</h3>
Some commonly used and important HTML references:
			<table class="table table-striped" style="width: 700px">
			<tr>
				<th>Tag</th>
				<th>Description</th>
			</tr>
				<tr>
					<td>&lt;b&gt;</td>
					<td>Bold text</td>
				</tr>
				<tr>
					<td>&lt;strong&gt;</td>
					<td>Important text</td>
				</tr>
				<tr>
					<td>&lt;i&gt;</td>
					<td>Italics text</td>
				</tr>
				<tr>
					<td>&lt;em&gt;</td>
					<td>Emphasized text</td>
				</tr>
				<tr>
					<td>&lt;mark&gt;</td>
					<td>Marked text</td>
				</tr>
				<tr>
					<td>&lt;pre&gt;</td>
					<td>Defines pre-formated text</td>
				</tr>
				<tr>
					<td>&lt;small&gt;</td>
					<td>Small text</td>
				</tr>
				<tr>
					<td>&lt;del&gt;</td>
					<td>Deleted text</td>
				</tr>
				<tr>
					<td>&lt;ins&gt;</td>
					<td>Inserted text</td>
				</tr>
				<tr>
					<td>&lt;sub&gt;</td>
					<td>Subscript text</td>
				</tr>
				<tr>
					<td>&lt;sup&gt;</td>
					<td>Superscript text</td>
				</tr>
				<tr>
					<td>&lt;q&gt;</td>
					<td>Short quotation</td>
				</tr>
				<tr>
					<td>&lt;blockquote&gt;</td>
					<td>To qoute from another source</td>
				</tr>
				<tr>
					<td>&lt;address&gt;</td>
					<td>Defines the address/ocntact information</td>
				</tr>
				<tr>
					<td>&lt;cite&gt;</td>
					<td>Defines the title of a work</td>
				</tr>			
				<tr>
					<td>&lt;bdo&gt;</td>
					<td>Defines the bi-directional override</td>
				</tr>
				
				</table>
		</div>
		
		
		
		
		
		
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li><a href="page1.php">1</a></li>
    				<li><a href="page2.php">2</a></li>
    				<li class="active"><a href="page3.php">3</a></li>
    				
					</ul>
				</div>
	</div>
</body>
</html>



