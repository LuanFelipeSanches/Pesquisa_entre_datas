<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'pesquisadata';

try {
    
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
    //echo "Conexão realizada com sucesso!";
}
catch (PDOException $e) {    
    //echo "Error: " . $e->getMessage();
}
?>