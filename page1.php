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
				<ul>	<h3>What is HTML?</h3>
          <li>    HTML is a markup language for describing web documents (web pages).</li>
          <li>   HTML stands for Hyper Text Markup Language  </li>
          <li>    A markup language is a set of markup tags  </li>
          <li>   HTML documents are described by HTML tags   </li>
          <li>    Each HTML tag describes different document content </li>
				</ul>
				</div>
		<div class="mbodyinner2">
		<h3>HTML Example</h3>
			<div class="codeback"><xmp>   
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
</body>
</html></xmp></div>
				</div>
		<div class="mbodyinner3">
			<ul><h3>Example Explained</h3>
				<li>The DOCTYPE declaration defines the document type to be HTML</li>
				<li>The text between &lt;html&gt; and &lt;/html&gt; describes an HTML document</li>
				<li>The text between &lt;head&gt; and &lt;/head&gt; provides information about the document</li>
				<li>The text between &lt;title&gt; and &lt;/title&gt; provides a title for the document</li>
				<li>The text between &lt;body&gt; and &lt;/body&gt; describes the visible page content</li>
				<li>The text between &lt;h1&gt; and &lt;/h1&gt; describes a heading</li>
				<li>The text between &lt;p&gt; and &lt;/p&gt; describes a paragraph</li>
			</ul>
		</div>
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">	HTML Tags:  </h3>
			HTML tags are keywords (tag names) surrounded by angle brackets:<br />
			<h1>&lt;tagname&gt;content&lt;/tagname&gt;</h1>
			<ul>
				<li>HTML tags normally come in pairs like &lt;p&gt; and &lt;/p&gt;</li>
				<li>The first tag in a pair is the start tag, the second tag is the end tag</li>
				<li>The end tag is written like the start tag, but with a slash before the tag name</li>
			</ul>
		</div>
		<div class="mbodyinner5" id="font">
			<h3 style="font-weight: bold">The &lt;!DOCTYPE&gt; Declaration</h3>
			The &lt;!DOCTYPE&gt; declaration helps the browser to display a web page correctly.<br />
			There are different document types on the web.<br />
			To display a document correctly, the browser must know both type and version.<br />
			The doctype declaration is not case sensitive. All cases are acceptable.<br />
		</div>
		<div class="mbodyinner6" id="font">
			<h3 style="font-weight: bold">HTML Versions</h3>
Since the early days of the web, there have been many versions of HTML:
			<table class="table table-striped" style="width: 700px">
			<tr>
				<th>Version</th>
				<th>Year</th>
			</tr>
				<tr>
					<td>HTML</td>
					<td>1991</td>
				</tr>
				<tr>
					<td>HTML 2.0</td>
					<td>1995</td>
				</tr>
				<tr>
					<td>HTML 3.2</td>
					<td>1997</td>
				</tr>
				<tr>
					<td>HTML 4.0.1</td>
					<td>1991</td>
				</tr>
				<TR>
					<td>XHTML</td>
					<td>2000</td>
				</TR>
				<tr>
					<td>HTML5</td>
					<td>2014</td>
				</tr>
			</table>
		</div>
		<div class="mbodyinner7" id="font">
			<h3 style="font-weight: bold;font-size: 1.6em;">HTML Headings</h3>
		HTML headings are defined with the &gt;h1&lt; to &gt;h6&lt; tags:<br>
	<p style="font-weight: bold;font-size: 1.4em">Example</p>
	Code:- &lt;h1&gt;This is a heading&lt;/h1&gt;
<h1>This is a heading</h1>
Code:-&lt;h2&gt;This is a heading&lt;/h2&gt;
<h2>This is a heading</h2>
Code:-&lt;h3&gt;This is a heading&lt;/h3&gt;
<h3>This is a heading</h3>
		</div>
		<div class="mbodyinner8" id="font">
			<h3 style="font-weight: bold">HTML Paragraphs</h3>
HTML paragraphs are defined with the &lt;p&gt; tag:<br>

	Example:-<br>
Code:-&lt;p&gt;This is a paragraph.&lt;/p&gt;
<p>This is a paragraph.</p>
Code:-&lt;p&gt;This is another paragraph.&lt;/p&gt;
<p>This is another paragraph.</p>
		</div>
		<div class="mbodyinner9" id="font">
			<div class="codeback" style="text-align: center"><xmp>
<!DOCTYPE html>
<html>
<body>
<a href="../index.html">This is a link</a>
</body>
</html></xmp>
</div>
The link's destination is specified in the href attribute.<br> 
Attributes are used to provide additional information about HTML elements.
		</div>
		<div class="mbodyinner9" id="font">
			<h3 style="font-weight: bold">HTML Images</h3>
HTML images are defined with the &lt;img&gt; tag.<br>
The source file (src), alternative text (alt), and size (width and height) are provided as attributes:
	<div class="codeback" style="text-align: center; width: 900px">
<xmp><!DOCTYPE html>
<html>
<body>
<img src="xyz.jpg" alt="W3Schools.com" width="104" height="142">
</body>
</html></xmp>
	</div>
		</div>
		
		
		
		
		
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li class="active"><a href="page1.php">1</a></li>
    				<li><a href="page2.php">2</a></li>
    				<li><a href="page3.php">3</a></li>
					</ul>
				</div>
	</div>
</body>
</html>



