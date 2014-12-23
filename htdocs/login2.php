<html>
    <head>
		<title>Rent-a-Swag</title>
		<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <script type='text/javascript' src='script.js'></script>

	</head>
	<body>
    <div class="top"><br/><center><img src="logo2.png"></center></div>
    <div class="menu"><center><div class="center"><div class="menuitem"><p vertical-align:"middle"><a href="login2.php">Swag in</a></p></div>
<div class="menuitem"><p vertical-align:"middle"><a href="register2.php">Swag up</a></p></div></div></div></center></div>
      <br style="clear:both" />  <div class="big"><br><center>
            <h1>Swag in</h1> 
            
            <form method="post" action="verify2.php">
            <br/>
            <input name="name" type="text" placeholder="Swaggername" /> <br>
            <input name="password" type="password" placeholder="Swagword" /><br/> <br/>
            
         <?php
          require_once("recaptchalib.php");
          $publickey = "6Le3nOgSAAAAAP8NOSkPe-bIo8gYOSaHZxmxUe2N"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
        ?>
                <input type="submit" />
             </form> 
             
              </div>
              </center>
        </div>   
	</body>
</html>