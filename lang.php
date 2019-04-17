<?php
session_start();
$lang = ['ua' => 'Привiт', 'ru' => 'Привет', 'it' => 'Ciao', 'en' => 'Hello'];
$users =
    [['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
        ['login' => 'Sasha', 'password' => 'Alea_est_jacta']];
foreach ($users as $user) {
    if ($_SESSION['user'] == $user) {
        foreach ($lang as $key => $value) {
            if ($user['lang'] == $key) {
                echo $user['lang'] = $value . ' ' . $user['login'];
            }
        }
    }
}

if ($_SESSION['user'] == $user && $user['lang'] == false) {
    echo $user['login'] . " выберите язые на котром вам удобно общаться RU, UK, IT, EN";
    echo '
 <form method="GET">
    <input type="text" name="lang">
    <input type="submit" value="ok" name="">
 </form>
  ';
    foreach ($lang as $key => $value) {
        if ($_GET['lang'] == $key)
            echo $_GET['lang'] = $value . ' ' . $user['login'];

    }
}
?>