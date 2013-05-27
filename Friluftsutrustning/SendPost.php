<?php
include 'connect.php';

session_start();
if(isset($_SESSION['session_user'])){
	header('Location: indexEfterLogin.php');
}



$query = "INSERT INTO post (`user`,`text`) VALUES ('$_SESSION[session_user]','$_POST[post]')";         //echo '<em> ' . $query . ' </em>';
		 echo $query;        
		         $result = mysql_query($query);
         if ($result === false) {
	      echo '<strong> Error when trying to add data to database. ' . mysql_error . ' : <br />' . mysql_error . '</strong>';
        }
       header('Location: indexEfterLogin.php');
?>