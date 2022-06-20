<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 64) {
    echo "ошибка логина";
    exit();
} else if(mb_strlen($name) < 3 || mb_strlen($name) > 32) {
    echo "ошибка имени";
    exit();
} else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 32) {
    echo "ошибка пароля (минимум 8 символов)";
    exit();
}

$pass = md5($pass."g25i27u26"); 

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login', '$pass', '$name')");
$mysql->close();

header('Location: /');
?>