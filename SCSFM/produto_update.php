<?php

$id = $_POST['id'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$unidade = $_POST['unidade'];
$quantidade_minima = $_POST['quantidade_minima'];
$quantidade_atual = $_POST['quantidade_atual'];

// Conectar ao banco de dados
$servername = "172.174.233.235";
$username = "root";
$password = "univesp";
$dbname = "SCSFM";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$sql = "UPDATE Produtos
           SET Descricao         = '$descricao',
               Preco             = $valor,
               Unidade           = '$unidade',
               Quantidade_Minima = $quantidade_minima,
               Quantidade_Atual  = $quantidade_atual
         WHERE ID = " . $id;

// Executar a consulta SQL
$result = mysqli_query($conn, $sql);

$conn->close();

?>

<script>
    alert('Produto inserido com sucesso');
    window.location.href = 'produtos.php';
</script>