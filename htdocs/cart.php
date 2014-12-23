<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['one'])) {
		$_SESSION['one'] = '1'; 	
	}
	if (isset($_POST['two'])) {
		$_SESSION['two'] = '1'; 	
	}
    if (isset($_POST['three'])) {
		$_SESSION['three'] = '1'; 	
	}
    if (isset($_POST['four'])) {
		$_SESSION['four'] = '1'; 	
	}
    if (isset($_POST['five'])) {
		$_SESSION['five'] = '1'; 	
	}
    if (isset($_POST['six'])) {
		$_SESSION['six'] = '1'; 	
	}
	
	if (isset($_POST['clear'])) {
		unset($_SESSION['one']);
		unset($_SESSION['two']);
		unset($_SESSION['three']);
		unset($_SESSION['four']);
		unset($_SESSION['five']);
		unset($_SESSION['six']);
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=checkout.php\">";	
	}
	
}
	 echo "<meta http-equiv=\"refresh\" content=\"0;URL=shop.php\">";







?>