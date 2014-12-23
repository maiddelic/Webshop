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
//$database = mysqli_select_db($db);
//	if(! $database){
//		die('NEJlol' . mysql_error());
//}
define('MAX_SALT_LENGTH', 32);
$name = $_POST['name'];
$ad = $_POST['address'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

//function createSalt() {
//	$string = hash('sha256', uniqid(rand(), true));
//	return substr($string, 0, MAX_SALT_LENGTH);
  //  }

    $salt = $name; //createSalt();

function generateHash($salt, $password) {
	$hash1 = hash('sha256', $salt . $password);
	return substr($hash1, 0, MAX_SALT_LENGTH);
    }

    $hash = generateHash($salt, $password);


if($password == $password2){



$stmt = $conn->prepare("SELECT count(*) as count from users where name = ?");
$stmt->bind_param('s', $name);
$stmt->execute();

$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

if($count == 0){
	session_start();
	$_SESSION['conn']=$conn;
	$_SESSION['name']=$name;
	$stmt = $conn->prepare("INSERT into users ( name, address, hash) VALUES ( ?, ?, ?)");
	$stmt->bind_param('sss', $name, $ad, $hash);
	$stmt->execute();
	$stmt->close();
		unset($_SESSION['one']);
		unset($_SESSION['two']);
		unset($_SESSION['three']);
		unset($_SESSION['four']);
		unset($_SESSION['five']);
		unset($_SESSION['six']);
	 echo "<meta http-equiv=\"refresh\" content=\"0;URL=shop.php\">";
	
}

}else{
	print('passwords did not match');
}


  }
  ?>