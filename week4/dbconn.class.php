<?php
class DatabaseConnection
{
    var $localhost;
    var $root;
    var $pwd;
   

   
  function DatabaseConnection($localhost,$root,$pwd)
  {
     $this->localhost="localhost";
	 $this->root="root";
	 $this->pwd="";
  }
  function establishConnection()
   {
     $conn=mysql_connect($this->local,$this->root,$this->pwd);
	 $conn = db2_connect($database, $user, $password, $options);

    if ($conn) {
    echo "Database connection successful <br/>";
    }
   else {
    echo "Connection has failed ";
}

	 return $conn;
   }
     function execute($query)
   {
       $un='Tom12';
	   $em='me@yahoo.com';
	   $pwd='hecticTym';
	   
      $query = "insert into books values(NULL'".$un."', '".$em."', '".$pwd."')";
	  
      $result=mysql_query($query,$this->establishConnection());  
	  
      $result = $db->query($query); 
	  return $result;    
   }
}
?>