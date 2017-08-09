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
		height: 5210px;
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
		height: 5000px;
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
				<ul>	<h3>STATE MANAGEMENT</h3>
                <p>It is a process by which we maintain state and page information over multiple requests for the same or difference page. </p>
                 <p>As in true for any HTTP based technology web forms pages are stateless, which means that they do not automatically indicates whether the request in a sequences are all from the same client or even whether a single browser instance is still actively viewing a page or site. </p>
                 <p>Pages are destroyed and re-created with each round trip to the server; therefore page information will not exist beyond the life cycle of a single page.</p>
                 <p>A new instance of the web page class is created each time the page is posted to the server. In traditional web programming this would typically mean that all information associated with the page and the control on the page would be lost with each round trip.</p>
               <p>For example: if a user enters information into a text box, that information would be lost in the round trip from the browser or client device top the server.</p>
               <p>There are two types of resources:</p>
               <ul>
                  <li>SECURED RESOURCES         (Inbox, Facebook)</li>
                  <li>UNSECURED RESOURCES   (Home Page, Register, Login  Page, About Us)</li>
               </ul> 
               <h4>QUERY STRING</h4>
         <p>A Query String is informing that is appended to the end of the page URL. We can use a Query String to submit date back to our page or to another page through the URL. A simple nut limited way of maintain some state information. </p>
         <h5>ADVANTAGE</h5>
         <p>No server resources are required. The query string is contained in the HTTP request for a specific URL. Widespread support, almost all browser and client devices supported using query string to pass value.</p>
          <h5>DISADVANTAGE</h5>
          <p>Potential security risk. The inform in Query string is directly visible to the user via the browser user interface. A user can bookmark the URL or send the URL to another user.</p>
          <p>Limited capacity is stored. Some browser and client devices impose a 2083-character limit on the length of URL’s.</p>
          
			
		</ul>
         
       <h3>COOKIES</h3>
       <p>A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</p>
       <p>There are three steps involved in identifying returning users -</p>  
       <ul>
          <li>Server script sends a set of cookies to the browser. For example name, age, or identification number etc.</li>
           <li>Browser stores this information on local machine for future use.</li>
           <li>When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.</li>
           </ul>
        <h4>Setting Cookies</h4>
        <p>PHP provided setcookie() function to set a cookie. This function requires upto six arguments and should be called before <html> tag. For each cookie this function has to be called separately.</p>
         <ul>
            <li><b>Name</b> - This sets the name of the cookie and is stored in an environment variable called HTTP_COOKIE_VARS. This variable is used while accessing cookies.</li>
            <li><b>Value</b> - This sets the value of the named variable and is the content that you actually want to store.</li>
            <li><b>Expiry</b> - This specify a future time in seconds since 00:00:00 GMT on 1st Jan 1970. After this time cookie will become inaccessible. If this parameter is not set then cookie will automatically expire when the Web Browser is closed.</li>
            <li><b>Path</b> - This specifies the directories for which the cookie is valid. A single forward slash character permits the cookie to be valid for all directories.</li>
            <li><b>Domain</b> - This can be used to specify the domain name in very large domains and must contain at least two periods to be valid. All cookies are only valid for the host and domain which created them.</li>
            <li><b>Security</b> - This can be set to 1 to specify that the cookie should only be sent by secure transmission using HTTPS otherwise set to 0 which mean cookie can be sent by regular HTTP.</li>
         </ul>
         <h4>Create/Retrieve a Cookie</h4>
         <p>We then retrieve the value of the cookie "user" (using the global variable $_COOKIE). We also use the isset() function to find out if the cookie is set:</p>
        </div>
		<div class="mbodyinner2">
		<h5>Example</h5>
			<div class="codeback"><xmp>
            < ?php
$cookie_name = "user";
$cookie_value = "John";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30),"/"); // 86400 = 1 day
?>
<html>
<body>

< ?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>  


   
</xmp></div>
				</div>
		<div class="mbodyinner3">
			<ul><h4>Deleting Cookie</h4></ul>
            <p>To delete a cookie you should call setcookie() with the name argument only but this does not always work well, however, and should not be relied on.</p>
            <p>It is safest to set the cookie with a date that has already expired .</p>
       </div>     
       <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
            < ?php
   setcookie( "name", "", time()- 60, "/","", 0);
   setcookie( "age", "", time()- 60, "/","", 0);
?>
<html>
   
   <head>
      <title>Deleting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Deleted Cookies" ?>
   </body>
   
</html>


           

   
</xmp></div>
				</div>
                <div class="mbodyinner3">
			<ul><h3>
SESSION
</h3></ul>
<p>An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.</p>
<p>A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>            
 <p>The location of the temporary file is determined by a setting in thephp.ini file called session.save_path. Before using any session variable make sure you have setup this path.</p>     
 <p>When a session is started following things happen -</p> 
 <li>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.</li>   
 <li>A cookie called PHPSESSID is automatically sent to the user's computer to store unique session identification string.</li>
 <li>A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</li>      
  <p>When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values.</p>    
  <p>A session ends when the user loses the browser or after leaving the site, the server will terminate the session after a predetermined period of time, commonly 30 minutes duration.</p>    
       </div>
            <div class="mbodyinner2">
		<h3>Start a Session</h3>
        <p>A PHP session is easily started by making a call to thesession_start() function.This function first checks if a session is already started and if none is started then it starts one. It is recommended to put the call to session_start() at the beginning of the page.</p>
			<div class="codeback"><xmp>
           < ?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session.";
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      < ?php  echo ( $msg ); ?>
   </body>
   
</html>

</xmp></div>
				</div>
			
		<div class="mbodyinner4" id="font">
		<h3 style="font-weight:bold">Modify a Session Variable</h3>
		  To change a session variable: 
        <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
           < ?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>



</xmp></div>
				</div>
				
		</div>
        
		<div class="mbodyinner3">
			<ul><h3>Destroy a Session</h3>
            <p>To remove all global session variables and destroy the session, use session_unset() and session_destroy():</p>
                       <div class="mbodyinner2">
		<h3>Example</h3>
			<div class="codeback"><xmp>
          < ?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_unset(); 

// destroy the session 
session_destroy(); 
?>

</body>
</html>



</xmp></div>
				</div>
         
       </ul>
       </div> 
       	<div class="mbodyinner3">
			<ul><h3>FILE HANDLING</h3>
            <p>File handling is an important part of any web application. You often need to open and process a file for different tasks.</p>
            <p>PHP has several functions for creating, reading, uploading, and editing files.</p>
           <h4>Open File-fopen()</h4>
           <p>A better method to open files is with the fopen() function. This function gives us more options than the readfile() function.</p>
           <p>The PHP fopen() function is used to open a file. It requires two arguments stating first the file name and then mode in which to operate.</p>
            <div class="mbodyinner6" id="font">
			<table class="table table-striped" style="width: 700px">
			<tr>
				<th>Mode</th>
				<th align="center">Purpose</th>
			</tr>
				<tr>
					<td>r</td>
					<td>Opens the file for reading only.<br>
Places the file pointer at the beginning of the file.
</td>
                    
				</tr>
				<tr>
					<td>r+</td>
					<td>Opens the file for reading and writing.<br>
Places the file pointer at the beginning of the file.
</td>
                    
				</tr>
				<tr>
					<td>w</td>
					<td>Opens the file for writing only.<br>
Places the file pointer at the beginning of the file.<br>
and truncates the file to zero length.<br> If files does not
exist then it attempts to create a file.<br>
</td>
                    
				</tr>
				<tr>
					<td>w+</td>
					<td>Opens the file for reading and writing only.<br >
Places the file pointer at the beginning of the file.<br>
and truncates the file to zero length.<br > If files does not
exist then it attempts to create a file.<br >
</td>
				</tr>
				<TR>
					<td>a</td>
					<td>Opens the file for writing only.<br >
Places the file pointer at the end of the file.<br>
If files does not exist then it attempts to create a file.
</td>
				</TR>
                <tr>
					<td>a+</td>
					<td>Opens the file for reading and writing only.<br>
Places the file pointer at the end of the file.<br >
If files does not exist then it attempts to create a file.
</td>
				</tr>
				
			</table>
		</div>
        <h3>Reading a file</h3>
        <p>Once a file is opened using fopen() function it can be read with a function called fread(). This function requires two arguments. These must be the file pointer and the length of the file expressed in bytes.</p>
         <p>So here are the steps required to read a file with PHP.</p>
          <li>Open a file using <b>fopen()</b> function.</li>
          <li>Get the file's length using <b>filesize()</b> function.</li>
          <li>Read the file's content using <b>fread()</b> function.</li>
          <li>Close the file with <b>fclose()</b> function.</li>
       </ul>
       </div> 
           
		</div>
				<div class="foot">
					<ul class="pagination">
    				<li><a href="php1.php">1</a></li>
    				<li><a href="php2.php">2</a></li>
    				<li ><a href="php3.php">3</a></li>
    				<li><a href="php4.php">4</a></li>
    				<li class="active"><a href="php5.php">5</a></li>
					</ul>
				</div>
	</div>
    </div>
</body>
</html>