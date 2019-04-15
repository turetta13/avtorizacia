<?php
session_start();
if (isset($_SESSION['ua']) == true) {
    echo "ЗДОРОВЕНЬКI БУЛИ Petro";
} else
    if (isset($_SESSION['many']) != true) {
    echo "у вас нет доступа";
}

if (isset($_SESSION['many']) == true) {
    echo "ЗДОРОВЕНЬКI БУЛИ ОЛЕКСАНДРЕ";
}
?>