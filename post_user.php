<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $sql_insert = "INSERT INTO produtos ( nome, descricao,preco) VALUES ('$nome', '$descricao','$preco')";
    $result_query = mysqli_query($connection, $sql_insert);
?>