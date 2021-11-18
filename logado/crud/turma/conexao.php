<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'ppi';

$conexao= mysqli_connect($server,$user,$pass,$db);
mysqli_set_charset($conexao, "utf8");