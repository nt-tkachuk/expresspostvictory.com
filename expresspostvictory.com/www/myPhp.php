<?
echo "Получены новые вводные:<br>";

    $dblink = mysql_connect("expres36.mysql.ukraine.com.ua", "expres36_db", "expres36_db");
    mysql_select_db("expres36_db");


    if($dblink)
        echo 'Соединение установлено.';
    else
    die('Ошибка подключения к серверу баз данных.');



    $query = mysql_query("SELECT id, textt FROM infa WHERE id=1 LIMIT 1");
    $data = mysql_fetch_assoc($query);
    echo $data['textt']."<br>";

    echo "Получены новые вводные:<br>";
    echo $data['textt'];


/*if(isset($_POST['submit'])){
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysql_query("SELECT user_id, user_password FROM user WHERE user_login='".mysql_real_escape_string($_POST['login'])."' LIMIT 1");
    $data = mysql_fetch_assoc($query);
    
    # Сравниваем пароли
    if($data['user_password'] == md5(md5(trim($_POST['password'])))) {
        # Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));         
        if(!@$_POST['not_attach_ip']) {
            # Если пользователя выбрал привязку к IP # Переводим IP в строку
            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
        }
        # Записываем в БД новый хеш авторизации и IP
        mysql_query("UPDATE user SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");
        # Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30);
        setcookie("hash", $hash, time()+60*60*24*30);
        # Переадресовываем браузер на страницу проверки нашего скрипта
        //header("Location: check.php"); exit();
    }else{
        echo "<script>alert(\"Ви ввели неверный логин или пароль\");</script>";
    }
}*/
?>