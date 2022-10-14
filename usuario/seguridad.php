<?php
session_start();
if (!isset($_SESSION['usuario']) || !isset($_SESSION["id_user"])) {
    header("location: ../login/Login.php");
}else {
    header("location: dashboard.php");
}