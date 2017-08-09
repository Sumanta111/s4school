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
				CSS Tutorial Page 3
		</div>
		<div class="mbody2">
			With Css you can style your own Web site.
			This tutorial teaches you everything about CSS.
			CSS is easy to learn - Hope,You will enjoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
					<h3>Internal Style Sheet</h3>
          An internal style sheet may be used if one single page has a unique style.<br>

Internal styles are defined within the &lt;style&gt; element, inside the &lt;head&gt; section of an HTML page:
				</div>
		<div class="mbodyinner2">
		<h3>Example Explained:</h3>
			<div class="codeback"><xmp>   
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: linen;
}
h1 {
    color: maroon;
    margin-left: 40px;
} 
</style>
</head>
<body>
<h1>This is a heading</h1>
<p>This is a paragraph.</p>
</body>
</html>
</xmp></div>
				</div>
		<div class="mbodyinner3">
			<h3>Inline Styles</h3>
				An inline style may be used to apply a unique style for a single element.<br>

To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.<br>

The example below shows how to change the color and the left margin of a &lt;h1&gt; element:
<div class="codeback" style="text-align: center">
	<xmp><h1 style="color:blue;margin-left:30px;">This is a heading.</h1></xmp>
</div>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">Multiple Style Sheets</h3>
			If some properties have been defined for the same selector (element) in different style sheets, the value from the last read style sheet will be used. <br />
			<h1>Example</h1>
			Assume that an external style sheet has the following style for the &lt;h1&gt; element:
			<div class="codeback" style="text-align: center">
				<xmp>
h1 {
     color: navy;
}
				</xmp>
			</div>
			then, assume that an internal style sheet also has the following style for the &lt;h1&gt; element:
			<div class="codeback" style="text-align: center">
				<xmp>
h1 {
     color: orange;    
}
</xmp>
			</div>
			If the internal style is defined after the link to the external style sheet, the &lt;h1&gt; elements will be "orange":
			<div class="codeback" style="text-align: center">
				<xmp>
<!DOCTYPE html>
<html>
<head>
<style>
h1 {
    color: orange;
}
</style>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<h1>This is a heading</h1>
<p>It is a combination of an external stylesheet,
and internal style</p>
</body>
</html>
</xmp>
			</div>
		</div>
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold">Cascading Order</h3>
		What style will be used when there is more than one style specified for an HTML element?

Generally speaking we can say that all the styles will "cascade" into a new "virtual" style sheet by the following rules, where number one has the highest priority:
<ul>
<li>1.Inline style (inside an HTML element)</li>
<li>External and internal style sheets (in the head section)</li>
<li>Browser default</li>
</ul>
So, an inline style (inside a specific HTML element) has the highest priority, which means that it will override a style defined inside the &lt;head&gt; tag, or in an external style sheet, or a browser default value.
		</div>
		<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold">CSS Colors</h3>
Colors are displayed combining RED, GREEN, and BLUE light.<br>
Colors in CSS are most often specified by:
<ul>
<li>a valid color name - like "red"</li>
<li>an RGB value - like "rgb(255, 0, 0)"</li>
<li>a HEX value - like "#ff0000"</li>
</ul>
		</div>
		<div class="mbodyinner7" id="font">
			<h3 style="font-weight: bold;font-size: 1.6em;">RGB (Red, Green, Blue)</h3>
		RGB color values can be specified using this formula: rgb(red, green, blue).

Each parameter (red, green, blue) defines the intensity of the color between 0 and 255.

For example, rgb(255,0,0) is displayed as red, because red is set to its highest value (255) and the others are set to 0.

	<p style="font-weight: bold;font-size: 1.4em">Hexadecimal Colors</p>
RGB values can also be specified using hexadecimal color values in the form: #RRGGBB, where RR (red), GG (green) and BB (blue) are hexadecimal values between 00 and FF (same as decimal 0-255).

For example, #FF0000 is displayed as red, because red is set to its highest value (FF) and the others are set to the lowest value (00). Note: HEX values are case-insensitive: "#ff0000" is the same as "FF0000".
		</div>
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li ><a href="css1.php">1</a></li>
    				<li><a href="css2.php">2</a></li>
    				<li class="active"><a href="css3.php">3</a></li>
    				<li><a href="css4.php">4</a></li>
    				<li><a href="css5.php">5</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



