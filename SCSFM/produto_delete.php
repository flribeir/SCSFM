<?php
// Verifica se o ID do produto foi passado como parâmetro
if (isset($_POST['id'])) {
    // Recupera o ID do produto
    $id_produto = $_POST['id'];

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

    // Preparar a consulta SQL
    $sql = "DELETE FROM Produtos WHERE ID = ?";

    // Preparar a declaração
    $stmt = mysqli_prepare($conn, $sql);

    // Vincular parâmetro ID
    mysqli_stmt_bind_param($stmt, "i", $id_produto);

    // Executar a consulta SQL
    mysqli_stmt_execute($stmt);

    // Verificar se a exclusão foi bem-sucedida
    if (mysqli_affected_rows($conn) > 0) {
        echo "Produto excluído com sucesso!";
    } else {
        echo "Nenhum produto foi excluído.";
    }

    // Fechar declaração e conexão
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    echo "ID do produto não foi fornecido.";
}
