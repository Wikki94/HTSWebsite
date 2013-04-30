<!-- Kom ihåg att logga in till databasen först! -->
<?php
include 'connect.php';

         $query = "SELECT username FROM user WHERE username='$_POST[user]' AND password=md5('$_POST[pwd]')";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: indexEfterLogin.html');
		 }
		 else {
			  header('Location: index.html');
		 }
		
?>