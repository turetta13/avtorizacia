<?php
session_start();
?>
<html>
<body>
<form method="POST">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="login" name="">
    <a href="lang.php">вперед</a>
</form>
</body>
</html>
<?php
$users =
    [['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
        ['login' => 'Sasha', 'password' => 'Alea_est_jacta']];

foreach ($users as $user) {
    if ($_POST['login'] == $user['login'] && $_POST['password'] == $user['password']) {
        $_SESSION['user'] = $user;
        break;
    }
}
if (isset($_SESSION['user']) == $users) {
    echo "вы авторизованы ";
} else {
    if (isset($_POST['login'])) {
        echo "неверный логин или пароль";
    }
}

if ($_SESSION['user'] == $user && $user['lang'] == false) {
    echo $user['login'] . " выберите язые на котром вам удобно общаться ru, ua, it, en";
    echo ' <form method="GET">
    <input type="text" name="lang">
    <input type="submit" value="ok" name="">
 </form> ';
    $_SESSION['lang']=$_GET['lang'];
}

?>
