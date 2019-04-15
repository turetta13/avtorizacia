<?php
session_start();
if (isset($_SESSION['it']) == true ) {
    echo "CIAO Pedrolus";
} else { if (isset($_SESSION['many']) != true)
    echo "у вас нет доступа";
}

if (isset($_SESSION['many']) == true) {
    echo "CIAO SASHA";
}
?>