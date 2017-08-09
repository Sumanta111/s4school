<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
</head>
<style>
	.secondbody{
		height: 200px;
		width: auto;
		top: 900px;
		outline: 0px solid red;
		
	}
	.secbody2{
		margin: 0px auto;
		position: relative;
		height: 3300px;
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
		height: 3100px;
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
	<div class="secbody2">
		<div class="mbody1">
				PHP Tutorial
		</div>
		<div class="mbody2">
			With PHP you can create your own dynamic website.
            Its very easy and interesting. You will enojoy it.
		</div>
		<div class="mbodyinner">
				<div class="mbodyinner1">
				<ul>	<h3>SUPERGLOBALS</h3>
                <p>Several predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>
                 <p>The PHP super global variables are:</p>
                 <li>$GLOBALS</li>
                 <li>$_SERVER</li>
                 <li>$_REQUEST</li>
                 <li>$_POST</li>
                 <li>$_GET</li>
                 <li>$_FILES</li>
                 <li>$_ENV</li>
                 <li>$_COOKIE</li>
                 <li>$_SESSION</li>
                 <p>There are two ways the browser client can send information to the web server.</p>
                  <li>The GET Method</li>
                  <li>The POST Method</li>
                <h4>GET Method</h4>
                <p>The GET method produces a long string that appears in your server logs, in the browser's Location: box. The GET method is restricted to send upto 1024 characters only. Never use GET method if you have password or other sensitive information to be sent to the server. GET can't be used to send binary data, like images or word documents, to the server.</p>
          
				<div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
   < ?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html> 



   
</xmp></div>
				</div>
                <h4>POST Method</h4>
                <p>The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.The POST method does not have any restriction on data size to be sent. The POST method can be used to send ASCII as well as binary data.</p>
				<div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
  

<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html> 



   
</xmp></div>
				</div>
                <h4>REQUEST Method</h4>
                <p>The PHP $_REQUEST variable contains the contents of both $_GET, $_POST, and $_COOKIE. We will discuss $_COOKIE variable when we will explain about cookies. The PHP $_REQUEST variable can be used to get the result from form data sent with both the GET and POST methods.</p>
                <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
  

< ?php
   if( $_REQUEST["name"] || $_REQUEST["age"] ) {
      echo "Welcome ". $_REQUEST['name']. "<br />";
      echo "You are ". $_REQUEST['age']. " years old.";
      exit();
   }
?>
<html>
   <body>
      
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>

</html> 



   
</xmp></div>
				</div>
		</ul>
         
       <h3>STRING UNCTION</h3>
       <p>The PHP string functions are part of the PHP core. No installation is required to use these functions.</p>
        <ul>
          <li>strlen() : get the string length<br >
	            SYNTAX: strlen($string);
          </li>
           <li>strcmp(): To compare two strings<br>
	SYNTAX: strcmp($string1,$string2);
</li>
           <li>strcasecmp(): To compare two strings without case-sensetive
<br>	SYNTAX: strcasecmp($string1,$string2);	
</li>
           <li>Str_repeat(): To repeat the elements in an array
<br>	SYNTAX: str_repeat(“_”,10);
</li>
            <li>str_str() : Find the first occurance of a string
<br>	SYNTAX: strstr($string,”is”);
</li>
            <li>Strops() : Search for character without a string
<br >	SYNTAX: strops($haystack,$needle);	
</li>
            <li>Str_replace(): replace all occurances of the search string with the replacement
<br>	SYNTAX: str_replace($search,$replace,$subject,$count);	
</li>
            <li>Ucfirst(): Make a string’s first character uppercase\
<br >	SYNTAX: ucfirst($string);
</li>
            <li>Ucword(): Upper case the first character of each word in a string
<br >	SYNTAX: ucword($string);	
</li>
           <li>Strtoupper() : Return string with all alphabet character converted to uppercase
<br >	SYNTAX: strtoupper($string);
</li>
           <li>Strtolower(): Return to lower case
<br >	SYNTAX: strtolower($string);
</li>
           <li>Str_split(): Convert a string into array
<br >	SYNTAX: str_split($string);
</li>
<li>Str_shuffle() : Randomly shuffles a string
<br>	SYNTAX: str_suffle($string);
</li>
<li>Explode (): Rerun an array of string, each of which is a substring formed by splitting it on boundaries
<br >	SYNTAX: explode(“”,$string);
</li>
<li>Implode (): Join array elements with a string
<br>	SYNTAX: implode ($string);	
</li>
<li>Ord(): return ASCII value of character
<br >	SYNTAX: ord($string);	
</li>
<li>Chr(): Return a specific character
<br >	SYNTAX: chr($ascii);
</li>
<li>Md5() : This function in PHP is udes to calculate the md5 hash of the string.It is commonly used to encrypt a string
<br >	SYNTAX: md5($string);
</li>
<li>Sha1():  It is a cryptographic hash function designed to gives hexadecimal format. The length of character is 40.
<br >	SYNTAX: sha1($string);	
</li>
         </ul>
  </div>
    	
     
           
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li><a href="php1.php">1</a></li>
    				<li><a href="php2.php">2</a></li>
    				<li><a href="php3.php">3</a></li>
    				<li class="active"><a href="php4.php">4</a></li>
    				<li><a href="php5.php">5</a></li>
					</ul>
				</div>
	</div>
    </div>
</body>
</html>