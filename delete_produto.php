<?php
    include_once("conexao.php");
    $id = $_GET['id'];
    $sql_delete = "DELETE FROM produtos WHERE id = '$id'";
    $result_query = mysqli_query($connection, $sql_delete);
    //echo "<script>alert('Mensagem');</script>";
    header("Location: ../web2-php/");
?>

<!-- <?php include_once("conexao.php");
    // $id = $_POST['id'];
    // $nome = $_POST['nome'];
    // $descricao = $_POST['descricao'];
    // $preco = $_POST['preco'];
    // $up = "UPDATE produto SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id=$id";
    // $result_query = mysqli_query($connection, $up);
?>  
  -->