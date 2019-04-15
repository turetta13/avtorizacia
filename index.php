<?php
session_start();
?>
<?php
$users = [
    [
        'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'
    ],
    [
        'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'
    ],
    [
        'login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'
    ],
    [
        'login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'
    ],
    [
        'login' => 'Sasha', 'password' => 'Alea_est_jacta',
    ],
];

?>
<html>
<body>
<form method="POST">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="login" name="">
</form>
</body>
</html>

<?php
if ($_POST['login'] == 'Vasisualiy' && $_POST['password'] == '12345') {
    $_SESSION['ru'] = true; ?>
    вы авторизованы <a href="ru.php">RU</a>
    <?php
} else {
    if (isset($_POST['login']))
        echo "неверный логин";
}
?>

<?php
if ($_POST['login'] == 'Afanasiy' && $_POST['password'] == '54321') {
    $_SESSION['en'] = true;
    ?>
    вы авторизованы <a href="en.php">EN</a>
    <?php
} else {
    if (isset($_POST['login']))
        echo "неверный логин";
}
?>

<?php
if ($_POST['login'] == 'Petro' && $_POST['password'] == 'EkUC42nzmu') {
    $_SESSION['ua'] = true; ?>
    вы авторизованы <a href="ua.php">UA</a>
    <?php
} else {
    if (isset($_POST['login']))
        echo "неверный логин";
}
?>

<?php
if ($_POST['login'] == 'Pedrolus' && $_POST['password'] == 'Cogito_ergo_sum') {
    $_SESSION['it'] = true; ?>
    вы авторизованы <a href="it.php">IT</a>
    <?php
} else {
    if (isset($_POST['login']))
        echo "неверный логин";
}
?>

<?php
if ($_POST['login'] == 'Sasha' && $_POST['password'] == 'Alea_est_jacta') {
    $_SESSION['many'] = true; ?>
    <p>пожалуйста выбирите удобный вам язык</p>
    <a href="ru.php">RU</a><br>
    <a href="ua.php">UA</a><br>
    <a href="it.php">IT</a><br>
    <a href="en.php">EN</a><br>
    <?php
} else {
    if (isset($_POST['login']))
        echo "неверный логин";
}
?>
