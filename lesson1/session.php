<?php
session_start();
$_SESSION['nomes'] = [];
array_push($_SESSION['nomes'], "melancia", "batata");
echo $_SESSION['nomes'][1][0];