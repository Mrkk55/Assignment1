<?php
include('User.class.php');

   /*$uName=trim($_POST['uName']);
    $email=trim($_POST['email']);
	 $pwd=trim($_POST['pwd']);
	 
	  if(!(empty($uName) && empty($email) && empty($pwd)))
    {
	    if(!(preg_match("/[a-zA-Z0-9 \$\*#]{8,}/",$uName)))
		
		 echo'<h2>Username must be 8 characters long and has characters</h2>';
		
	   if(!(preg_match("/[a-zA-Z0-9\.@#%\^\&\*\?]{9}/",$pwd)))
	   
	   echo'<h2>Password must be at least 9 characters long and special characters</h2>';
	   
	    if(!(preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/",$email)))
		
		  echo'<h2>Enter a valid email address please!</h2>';
	
    }
     else if(empty($fname) || empty($lName) || empty($email) || empty($uName) || empty($pwd))
     {
	      echo '<h2 >All fields must be entered </h2>';
	
	}*/
	
	$uz=new User("Tommyleen3","myself@gmail.com");
	
	echo $uz->displayUser();
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style2 {font-size: x-large}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="testUser.php">
  <table width="592" height="184" border="0">
    <tr bordercolor="#FF0000" bgcolor="#636563">
      <td colspan="3"><div align="center">
        <h1><strong>SIGN IN HERE </strong></h1>
      </div></td>
    </tr>
    <tr bordercolor="#736D63" bgcolor="#999999">
      <td width="223" class="style2">        <label><strong>Username</strong></label>        &nbsp;</td>
      <td width="292"> <input name="uName" type="text" size="20" maxlength="50"></td>
      <td width="63">&nbsp;</td>
    </tr>
    <tr bordercolor="#736D63" bgcolor="#999999">
      <td><span class="style2"><strong>
        <label>Email Address</label>
      &nbsp;</strong></span></td>
      <td><input name="email" type="text" size="30" maxlength="50"></td>
      <td>&nbsp;</td>
    </tr>
    <tr bordercolor="#736D63" bgcolor="#999999">
      <td class="style2"><strong>
        <label>Password</label>
      &nbsp;</strong></td>
      <td><input name="pwd" type="password" size="30" maxlength="32"></td>
      <td>&nbsp;</td>
    </tr>
    <tr bordercolor="#736D63" bgcolor="#999999">
      <td><input type="submit" name="Submit" value="SAVE"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
