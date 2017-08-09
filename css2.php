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
				CSS Tutorial Page 2
		</div>
		<div class="mbody2">
			With Css you can style your own Web site.
			This tutorial teaches you everything about CSS.
			CSS is easy to learn - Hope,You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				<h3>Grouping Selectors</h3>
				If you have elements with the same style definitions, like this:
				<div class="codeback" style="text-align: center">
					<xmp>
h1 {
     text-align: center;
    color: red;
}

h2 {
     text-align: center;
    color: red;
}

p {
     text-align: center;
    color: red;
}
					</xmp>
				</div>
It will be better to group the selectors, to minimize the code.

To group selectors, separate each selector with a comma.

In the example below we have grouped the selectors from the code above:
<div class="codeback" style="text-align: center">
	<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
h1, h2, p {
    text-align: center;
    color: red;
}
</style>
</head>
<body>
<h1>Hello World!</h1>
<h2>Smaller heading!</h2>
<p>This is a paragraph.</p>
</body>
</html>
</xmp>
</div>
				</div>
		<div class="mbodyinner2">
		<h3>CSS Comments</h3>
Comments are used to explain the code, and may help when you edit the source code at a later date.

Comments are ignored by browsers.

A CSS comment starts with /* and ends with */. Comments can also span multiple lines:
<div class="codeback" style="text-align: center">
<xmp><!DOCTYPE html>
<html>
<head>
<style>
p {
    color: red;
    /* This is a single-line comment */
    text-align: center;
} 
/* This is
a multi-line
comment */
</style>
</head>
<body>
<p>Hello World!</p>
<p>This paragraph is styled with CSS.</p>
<p>CSS comments are not shown in the output.</p>
</body>
</html>
</xmp>

</div>
				</div>
		<div class="mbodyinner3">
			<h3>Three Ways to Insert CSS</h3>
			When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.
			<ul>
				<li>External style sheet</li>
				<li>Internal style sheet</li>
				<li>Inline style</li>
			</ul>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">External Style Sheet</h3>
			With an external style sheet, you can change the look of an entire website by changing just one file!

Each page must include a reference to the external style sheet file inside the &lt;link&gt; element. The &lt;link&gt; element goes inside the &lt;head&gt; section:
	<h3>Example of External Style Sheet</h3>
	<div class="codeback" style="text-align: center">
<xmp><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<h1>This is a heading</h1>
<p>This is a paragraph.</p>
</body>
</html>
</xmp>
	</div>		
		</div>
	
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold"></h3>
			An external style sheet can be written in any text editor. The file should not contain any html tags. The style sheet file must be saved with a .css extension.

Here is how the "myStyle.css" looks:

			<div class="codeback" style="text-align: center">
<xmp>body {
    background-color: lightblue;
}

h1 {
    color: navy;
    margin-left: 20px;
}</xmp>
 
</div>
Do not add a space between the property value and the unit (such as margin-left:20 px;). The correct way is: margin-left:20px;
		</div>
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li><a href="css1.php">1</a></li>
    				<li class="active"><a href="css2.php">2</a></li>
    				<li><a href="css3.php">3</a></li>
    				<li><a href="css4.php">4</a></li>
    				<li><a href="css5.php">5</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



