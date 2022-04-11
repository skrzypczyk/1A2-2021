<?php
session_start();
unset($_SESSION['token']);
unset($_SESSION['id_user']);
unset($_SESSION['email']);
header("Location: index.php");

