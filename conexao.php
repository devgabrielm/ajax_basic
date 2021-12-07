<?php
$hostname_cfg = "127.0.0.1";
$username_cfg = "root";
$password_cfg = "";
$database_cfg = "reserva-esporte";

try {
    $dbh = new PDO('mysql:host='.$hostname_cfg.';dbname='.$database_cfg, $username_cfg, $password_cfg);
    $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $dbh->exec("set names utf8");    
} catch(PDOException $e){
    echo 'Não foi possível conectar ao banco de dados.';
    exit();
}