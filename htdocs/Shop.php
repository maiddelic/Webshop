<html>
    <head>
		<title>Rent-a-Swag</title>
		<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
        <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
        <script type='text/javascript' src='script.js'></script>

	</head>
	<body>
    <div class="top"><br><center><img src="logo2.png"></center></div>
    <div class="menu"><center><div class="center">
	<div class="logged"><center><h3>User: <?php session_start(); print($_SESSION['name']); 
		if(!isset($_SESSION['name'])){
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
		} ?> </h3></center>
				</div></center></div><div class="checkout"><div class="menuitem"><center><a href="checkout.php" class="check">Check out!</a></center></div></div><br style="clear:both" />
       </div> <div>
        	<div class="item"><center><img class="product" src="disco1.jpg"/><br>
        	<form method="post" action="cart.php"><input type="submit" name="one" value="Rent that swag!" class="rent"></form>
        	</center></div>
        	<div class="item"><center><img class="product" src="discoshirt.jpg" /><br>
        	<form method="post" action="cart.php"><input type="submit" name="two" value="Rent that swag!" class="rent"></form>
        	</center></div>
        	<div class="item"><center><img class="product" src="fur1.jpg" /><br>
        	<form method="post" action="cart.php"><input type="submit" name="three" value="Rent that swag!" class="rent"></form>
        	</center></div>

        </div>   
<br style="clear:both" />
        <div>
        	        	<div class="item"><center><img class="product" src="jacket1.jpg" /><br>
        	<form method="post" action="cart.php"><input type="submit" name="four" value="Rent that swag!" class="rent"></form>
        	</center></div>
        	        	<div class="item"><center><img class="product" src="pimpl.jpg" /><br>
        	<form method="post" action="cart.php"><input type="submit" name="five" value="Rent that swag!" class="rent"></form>
        	</center></div>
        	        					<div class="item"><center><img class="product" src="redshirt.jpg" /><br>
        	<form method="post" action="cart.php"><input type="submit" name="six" value="Rent that swag!" class="rent"></form>
        	</center></div>
        	        </div>
	</body>
</html>