<?php
session_start();
$lang = ['Привет', 'Hello', 'Привiт', 'Ciao'];
$users =
    [['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
        ['login' => 'Sasha', 'password' => 'Alea_est_jacta']];


for ($i = 0; $i < count($users); $i++) {
    if (isset($_SESSION[$users[$i]['lang']]) == true) {
        echo $lang[$i] . ' ' . $users[$i]['login'];
    }
}
if (isset($_SESSION[$users[$i]['lang']]) == ' ') {
    $lang1 = ['UK' => 'Привiт', 'RU' => 'Привет', 'IT' => 'Ciao', 'EN' => 'Hello'];
    echo " выберите язые на котром вам удобно общаться RU, UK, IT, EN";
    echo '
 <form method="GET">
    <input type="text" name="lang">
    <input type="submit" value="ok" name="">
 </form>
  ';
    foreach ($lang1 as $key => $value) {
        if ($_GET['lang'] == $key)
            echo $_GET['lang'] = $value;
    }
}
?>







