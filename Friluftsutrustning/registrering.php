<?php
include 'connect.php';

session_start();
if(isset($_SESSION['session_user'])){
	header('Location: altindex.php');
}



$query = "INSERT INTO user (username, password, mail) VALUES ('$_POST[user]',md5('$_POST[pwd]'),'$_POST[email]')";         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when trying to add data to database. ' . mysql_error . ' : <br />' . mysql_error . '</strong>';
        }

?>