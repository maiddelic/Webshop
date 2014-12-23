
<html>
    <head>
		<title>Rent-a-Swag</title>
		<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <script type='text/javascript' src='script.js'></script>

	</head>
	<body>
    <div class="top"><br/><center><img src="logo2.png"></center></div>
    <div class="menu"><center><div class="center"></div></div></center></div>
       <br style="clear:both" /> <div class="big"><br><br><br><center>
            <h1>Check out</h1> <div>
            <?php
            	session_start();
				if (isset($_SESSION['one'])) {
					print("<img src='disco1.jpg' class='cart'>");	
				}
				if (isset($_SESSION['two'])) {
					print("<img src='discoshirt.jpg' class='cart'>");	
				}
				if (isset($_SESSION['three'])) {
					print("<img src='fur1.jpg' class='cart'>");	
				}
				if (isset($_SESSION['four'])) {
					print("<img src='jacket1.jpg' class='cart'>");	
				}
				if (isset($_SESSION['five'])) {
					print("<img src='pimpl.jpg' class='cart'>");		
				}
				if (isset($_SESSION['six'])) {
					print("<img src='redshirt.jpg' class='cart'>");		
				}
            
            
            ?></div><br><br>
            <form method="post" action="cart.php"><input type="submit" name="clear" value="Clear cart!" class="rent"></form>
             <form method="post" action="receipt.php"><input type="submit" name="clear" value="Buy" class="rent"></form>
              </div>
              </center>
        </div>   
	</body>
</html>