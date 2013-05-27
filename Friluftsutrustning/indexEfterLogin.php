<?php
include 'connect.php'
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="magnum" type="text/css" href="magnum.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>Utomhus!</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner" >
               <h1>UTOMHUS MED WICKI!</h1>
               </div>
               
            </div>
            <div id="left">
					<b><p>Vill du göra ett inlägg?</p></b>
									<form name="SendPost" action="SendPost.php" method="post">
									<TEXTAREA name="post" rows="20" cols="25">
									</TEXTAREA>
								<input type="submit" value="Skicka inlägg"/>
								</form><br/>
								

            </div>
            <div id="center">
				                <div id="info">
				                <?php
         $query = "SELECT user,text,tid FROM post";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when you asked a question to your databas. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }

         $num=mysql_numrows($result);
         if($num==0) {
             echo '<strong>Your question is empty</strong>';
         }
         else {
             echo "<ul>";
             for ($i=0;$i<$num;$i++) {
                 $temp = mysql_fetch_array($result);
	             echo "<b>" . $temp["user"]."</b>&nbsp;skrev&nbsp;".$temp["tid"]."<br/>".$temp["text"] . "</br></br></br>";
             }
             echo "</ul>";
        }
?>
</div>
</div>
            <div id="right">				    								
              					Välkommen!
            </div>

			<div id="footer">
				<p> &copy; 2013 Anton Wilkens. Allt är tillgängligt för den som vill tatta något...
				</p>
			</div>
        </div>
    </body>
</html>