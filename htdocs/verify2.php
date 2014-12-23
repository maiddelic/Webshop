  <?php
  require_once('recaptchalib.php');
  $privatekey = "6Le3nOgSAAAAAMARQVtdHj50ACsmv-7lx8NZ_zvp";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    
$user = 'root';
$password = 'swag';
$db = 'swag';
$server = 'localhost';
$conn = mysqli_connect($server,$user,$password, $db);
if(! $conn){
	die('NEJ' . mysql_error());
}
define('MAX_SALT_LENGTH', 32);
$name = $_POST['name'];
$password = $_POST['password'];


function generateHash($salt, $password) {
	$gen_hash = hash('sha256', $salt . $password);
	return substr($gen_hash, 0, MAX_SALT_LENGTH);
}
$salt = $name;
$stmt1 = $conn->prepare("SELECT hash from users where name = ?");
//$stmt2 = $conn->prepare("SELECT salt from users where name = ?");
$stmt1->bind_param('s', $name);
//$stmt2->bind_param('s', $name);
$stmt1->execute();
//$stmt2->execute();
$stmt1->bind_result($hash);
//$stmt2->bind_result($salt1);
$stmt1->fetch();
//$stmt2->fetch();


$stmt1->close();
//$stmt2->close();
$new_hash = generateHash($salt, $password);
if($hash == $new_hash){
	session_start();
	$_SESSION['conn']=$conn;
	$_SESSION['name']=$name;
			unset($_SESSION['one']);
		unset($_SESSION['two']);
		unset($_SESSION['three']);
		unset($_SESSION['four']);
		unset($_SESSION['five']);
		unset($_SESSION['six']);
 echo "<meta http-equiv=\"refresh\" content=\"0;URL=shop.php\">";
}else{
}

  }
  ?>