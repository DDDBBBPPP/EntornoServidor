<?php
session_start();
$_SESSION["productos"] = [];
session_destroy();
exit(header("location:../menu.php"));