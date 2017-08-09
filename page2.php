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
				<ul>	<h3>Nested HTML elements</h3>
          <li>    HTML elements can be nested(elements can contain elements)</li>
          <li>    All HTML documents consists of nested HTML elements </li>
          		</ul>
				</div>
		<div class="mbodyinner2">
		<h3>Nested HTML Example</h3>
			<div class="codeback"><xmp>   
<!NESTED html>
<html>
<head>
<title>Nested HTML</title>
</head>
<body>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
</body>
</html></xmp></div>
				</div>
		<div class="mbodyinner3">
			<ul><h3>Example Explained</h3>
				<li>The &lt;html&gt; defines the document type to be HTML</li>
				<li>It has a start tag &lt;html&gt; and the end tag &lt;/html&gt;</li>
				<li>The element content is two other HTML elements (&lt;h1&gt; and &lt;p&gt;)</li>
				<li>The text between &lt;p&gt; and &lt;/p&gt; describes a <b>paragraph</b></li>
				<li>The text between &lt;h1&gt; and &lt;/h1&gt; describes a <b>Heading</b></li>
			</ul>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">	Empty HTML </h3>
			
			<ul>
				<li>HTML elements with no content are called empty HTML elements.</li>
				<li>&lt;br&gt; is an empty element without a closing tag(the &lt;br&gt; tag defines a line break).</li>
				<li>Empty elements can be "closed" in the opening tag like this:&lt;br /&gt;</li>
				<li>HTML doesn't require empty elements to be closed.But if u want stricter validation, or if you need your document readable by XML parsers, you must close all HTML elements properly.</li>
			</ul>
		</div>
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold">The lang attribute</h3>
			The language of the document can be deaclared in the &lt;html&gt;tag.<br />
			The language is declared with the lang attribute.<br />
			Declaration of language is important for accessibility applications and search engines.<br />
		</div>
		<div class="codeback" style="text-align: center"><xmp>   
<!Lang Attribute: html>
<html lang="en-US">

<body>
.
.
.
.
</body>
</html></xmp></div>
		<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold">The href attribute</h3>
HTML links are defined with the &lt;a&gt; tag. The link address is specified in the <b>href</b> attribute:
		</div>
			<ul><h3>Example :</h3>
			<div class="codeback" style="text-align: center"><xmp>   
<html>
<body>
<a href="http://s4school.com";>This is the link</a>
.
.
.
</body>
</html></xmp></div>
		<div class="mbodyinner7" id="font">
			<h3 style="font-weight: bold;font-size: 1.6em;">Size attributes</h3>
		HTML images are defined with &gt;img&lt; tag<br>
		The filename of the source and the (height & width) are provided as attributes
	    </div>
		<div class="codeback" style="text-align: center"><xmp>
		<p style="font-weight: bold;font-size: 1.4em">Example</p>   
<html>
<body>
<img src="s4school.jpg" width="100" height="80">
.
.
.
</body>
</html></xmp></div>
	

		
		
		
		
		
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li ><a href="page1.php">1</a></li>
    				<li class="active"><a href="page2.php">2</a></li>
    				<li><a href="page3.php">3</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



