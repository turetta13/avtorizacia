<?php
session_start();
?>

<?php
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

if (isset($_SESSION['lang'])) {
    foreach ($lang as $key => $value) {
        if ($_SESSION['lang'] == $key) {
            echo $user['lang'] = $value . ' ' . $user['login'];
        }

    }
}
?>