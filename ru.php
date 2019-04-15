<?php
session_start();
if (isset($_SESSION['ru']) == true ) {
    echo "ПРИВЕТ Vasisualiy";
} else { if (isset($_SESSION['many']) != true)
    echo "у вас нет доступа";
}

if (isset($_SESSION['many']) == true) {
    echo "ПРИВЕТ САША";
}
?>