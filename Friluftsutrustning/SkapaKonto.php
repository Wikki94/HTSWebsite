<!--<?php
include 'connect.php'
?>-->

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
               <div id="banner" >               <h1>UTOMHUS MED WICKI!</h1> 
               </div>
            </div>
            <div id="left">
					<div class="dokument-item">
						Du måste vara inloggad för att skriva inlägg!
					</div>
            </div>
            <div id="center">
					<b><p>Logga in!</p></b>
									<form name="login" action="login.php" method="post">
									<p>Användarnamn: <br/><input type="text" name="user"/></p>
									<p>Lösenord:&nbsp;&nbsp;<br/> <input type="password" name="pwd"/></p>
								<input type="submit" value="Logga in"/>
								</form><br/>
								<br/>
								<br/>
								<br/>
					<b><p>Skapa ett konto!</p></b>
									<form name="skapakonto" action="registrering.php" method="post">
									<p>Användarnamn: <br/><input type="text" name="user"/></p>
									<p>Lösenord:&nbsp;&nbsp;<br/> <input type="password" name="pwd"/></p>
									<p>E-mail:&nbsp;&nbsp;<br/> <input type="text" name="mail"/></p>
								<input type="submit" value="Registrera dig!"/>
								</form><br/>
                <div id="info">
				
</div>
</div>
            <div id="right">				    								
              				
            </div>

			<div id="footer">
				<p> &copy; 2013 Anton Wilkens. Allt är tillgängligt för den som vill tatta något...
				</p>
			</div>
        </div>
    </body>
</html>