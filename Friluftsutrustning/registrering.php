<?php
include 'connect.php';

session_start();
if(isset($_SESSION['session_user'])){
	header('Location: indexEfterLogin.html');
}



$query = "INSERT INTO user (`e-mail`, `password`, `username`) VALUES ('$_POST[mail]',md5('$_POST[pwd]'),'$_POST[user]')";         //echo '<em> ' . $query . ' </em>';
		         $result = mysql_query($query);
         if ($result === false) {
	      echo '<strong> Error when trying to add data to database. ' . mysql_error . ' : <br />' . mysql_error . '</strong>';
        }
        
		header('Location: index.html');
?>