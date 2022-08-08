<?php

session_start();

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$arquivo = fopen('arquivo.hd','a'); // caso o arquivo não exista ele será criado.

$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

fwrite($arquivo, $texto); // Escreve o texto no arquivo
 
fclose($arquivo); // fecha o arquivo

echo $texto;

header('Location: abrir_chamado.php');

?>