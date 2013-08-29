<?php
class User
{
   var $username;
   var $email;
   var $password;
   
   function User($username,$email)
   {
      $this->username=$username;
	  $this->email=$email;
	  if(!($username || $email))
	  {
	   echo "Nothing has been saved yet";
	  }
   }
   function getUsername()
   {
      return $this->username;
   }
   function getEmail()
   {
      return $this->email;
   }
   function setPassword($password)
   {
     $pwd=md5($password);
	 
      $this->password=$pwd;
   }
   function displayUser()
   {
      return "<h3>Username is : ".$this->username."<br/>Email address : ".$this->email."</h3>";
   }
}
?>