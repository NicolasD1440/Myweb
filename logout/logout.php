<?php
@session_start();
session_destroy();
unset($_SESSION['id_user']);
unset($_SESSION['usuario']);
header("location: ../index.php");
