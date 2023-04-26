<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'usbw');
define('BASE', 'flor');

$conn = new mysqli(HOST, USER, PASS, BASE);
$conn->set_charset('utf8');
//conexão com o banco para caracter especiais
