<?php
session_start();
?>

    <html>
    <body>
    <form method="POST">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" value="login" name="">
        <a href="lang.php">переход</a>
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

for ($i = 0; $i < count($users); $i++) {
    if ($_POST['login'] == $users[$i]['login'] && $_POST['password'] == $users[$i]['password']) {
        $_SESSION[$users[$i]['lang']] = true;
        echo "вы авторизованы";
    }
}
?>