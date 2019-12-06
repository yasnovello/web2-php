<?php 
    include_once("conexao.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco =  floatval( $_POST['preco']);
    
    // echo $nome;
    
     $up = "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id=$id";
   $result_query = mysqli_query($connection, $up);

header("Location: ../web2-php/");

    // if($result_query() > 0){
    //     echo "Sucesso: Atualizado corretamente!";
    //   }else{
    //     echo "Aviso: Não foi atualizado!";
    //   }
?>  