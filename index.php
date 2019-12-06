<!doctype html>
<html lang="en">

<head>
    <title>Aula PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<section class='container py-5'>
    <div class='col-lg-12'>
        <h3 class='py-2 text-center'>Lista de Produtos</h3>
<?php
include_once("conexao.php");
$sql =
    "SELECT * FROM produtos";
if ($result = mysqli_query($connection, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-dark'>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Nome</th>";
        echo "<th>Descrição</th>";
        echo "<th>Preço</th>";
        echo "<th class='text-right' >Ações</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['descricao'] . "</td>";
            echo "<td>" . $row['preco'] . "</td>";
            echo '<td> <input type="button" class="btn btn-outline-warning" aria-label="Atualizar" value="Atualizar" href="atualizarProduto.php?id=' . $row['id'] .'&nome=' . $row['nome'] .'&preco=' . $row['id'] .'&descricao=' . $row['id'] .' "> </td>';
            echo '<td> <input type="button" class="btn btn-outline-danger" aria-label="Deletar" value="Deletar" href="delete_produto.php?id=' . $row['id'] .'&nome=' . $row['nome'] .'&preco=' . $row['id'] .'&descricao=' . $row['id'] .' "></td>';


            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
// Close connection
mysqli_close($connection);
?>
    <!-- <form action="post_user.php" method="POST">
        Nome: <input type="text" name="nome"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        <input type="submit" value="Salvar">
    </form> -->
    <div>
        <input class="btn btn-success" type="button" href="novoProduto.php" aria-label="Adicionar novo produto" value="Adicionar novo produto">
    </div>
</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>