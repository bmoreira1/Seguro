<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'seguradora');

$conexao = new mysqli(HOST, USER, PASS, BASE);

if ($conexao->error) {
    die('Conexão não estabelecida' . $conexao->error);
} else {
    die('Conexão estabelecida com sucesso!');
};