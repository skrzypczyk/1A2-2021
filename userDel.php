<?php
session_start();
require "functions.php";

redirectIfNotConnected();



$pdo = connectDB();
$pdo->prepare("DELETE FROM iw_user WHERE id=:id");

