<?php
session_start();

if (isset($_SESSION['en']) == true) {
    echo "HELLO Afanasiy";
} else {
    if (isset($_SESSION['many']) != true)
        echo "у вас нет доступа";
}

if (isset($_SESSION['many']) == true) {
    echo "HELLO SASHA";
}
?>