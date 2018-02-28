<?
	$from  =  "From: $yourname <$email> \r\n Reply-To: $email \r\n"
          ."Content-Type: text/html; charset=\"utf-8\"\r\n";
    if(isset($_POST['submit'])){
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $text =  "Пользователь:  " . $_POST['name'] . "\r\n" . "Email:  " . $_POST['Email'] . "\r\n\r\n" . $_POST['txtarea'];
        mail("epv@expresspostvictory.com", "expresspostvictory.com", $text);
        header("Location: ../index.php"); exit();
    }
?>