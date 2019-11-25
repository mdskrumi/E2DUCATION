<?php
session_start();
$_SESSION["id"] = "";
header("location: ../index.php");
session_destroy();
?>