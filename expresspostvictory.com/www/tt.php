<html>
 <head>
  <meta charset="utf-8">
  <title>video</title>
 </head>
 <body>
    <form method="POST" action="">
    	<?php
    		error_reporting(E_ALL);
		    ini_set('display_errors', '1');
		    if (mail("epv@expresspostvictory.com", "Test mail", "Проверка отправки почты")) {
		          echo "ok";
		    } else {
		           echo "error";}
		?>
    </form>
 </body>
</html>