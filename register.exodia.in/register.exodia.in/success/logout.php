<?php
require __DIR__ . '/vendor/autoload.php';
$db = new \Delight\Db\PdoDsn('mysql:dbname=login;host=localhost;charset=utf8mb4', 'login_exodia', 'root@exodia12345');
$auth = new \Delight\Auth\Auth($db);
if($auth->logOut()){
    header("Location: https://register.exodia.in/oops");
}
else{
    header("Location: https://register.exodia.in/login");
}
?>