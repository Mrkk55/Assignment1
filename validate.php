
<?php
 $fName=$_POST["fName"];
 $lName=$_POST["lName"];
 $email=$_POST["email"];
 $uName=$_POST["uName"];
 $pwd=$_POST["pwd"];
 
 $date=date('H:i, JS F Y')

?>
<head>
<title>Validate  fields entered page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
    require('header1.php');
	
	
	
	 if(!(empty($fname) && empty($lName) && empty($email) && empty($uName) && empty($pwd)))
    {
         
	    if(!(preg_match("/[a-zA-Z]{2,}/",$fName)))
		
	    echo'<h2> Make sure your first name is 2 or more characters long</h2>';
	
	   if(!(preg_match("/^[a-zA-Z]{2,}| [a-zA-Z]\t[a-zA-Z]{2,}/",$lName)))
	   
	    echo'<h2> Make sure your last name is 2 or more character long</h2>';
	
	
	
	    if(!(preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/",$email)))
		
		  echo'<h2>Enter a valid email address please!</h2>';
	
	
	    if(!(preg_match("/[a-zA-Z0-9]{5,}/",$uName)))
		
		 echo'<h2>Username must be 5 characters long and has characters</h2>';
		
	   if(!(preg_match("/[a-zA-Z0-9\.@#%\^\&\*\?]{9}/",$pwd)))
	   
	   echo'<h2>Password must be at least 9 characters long and special characters</h2>';
	
    }
     else if(empty($fname) || empty($lName) || empty($email) || empty($uName) || empty($pwd))
     {
	      echo '<h2 >All fields must be entered </h2>';
	
	}
	
	
	  if((preg_match("/[a-zA-Z]{2,}/",$fName)) && (preg_match("/^[a-zA-Z]{2,}| [a-zA-Z]\t[a-zA-Z]{2,}/",$lName)) &&
	   (preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/",$email)) &&(preg_match("/[a-zA-Z0-9]{5,}/",$uName)) &&
	      (preg_match("/[a-zA-Z0-9\.@#%\^\&\*\?]{9}/",$pwd)))
		  {
     echo "<h1>Congratulations you  entered valid fields </h1>"."<br/><br/>";
     echo "<p> Your name is : ".$fName."\t".$lName."<br/>"."Email address : ".$email."<br/>" ."Username :".$uName."<br/>"."Password : ".$pwd."</p>".
      "<br/><br/><h2>You have successfully registered</h2>";
	}
	
  

 require('footer.php');
 ?>

</body>
</html>
