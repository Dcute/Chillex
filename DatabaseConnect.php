<?php
	 $DB_host = "127.0.0.1";
	 $DB_user = "root";
	 $DB_pass = "";
	 $DB_name = "chillex";
	 
	 $MySQLi_CON = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($MySQLi_CON->connect_errno)
     {
         die("ERROR : -> ".$MySQLi_CON->connect_error);
     }
?>