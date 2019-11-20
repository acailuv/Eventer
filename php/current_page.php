<?php
    session_start();
    if (isset($_GET['current_page'])) {$_SESSION['current_page'] = $_GET['current_page'];}
?>