<?php

$descricao = $_POST['descricao'];

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

$sql = "INSERT INTO Departamentos (Nome)
        VALUES ('$descricao')
        ";

// Executar a consulta SQL
$result = mysqli_query($conn, $sql);

$conn->close();

?>

<script>
    alert('Departamento inserido com sucesso');
    window.location.href = 'departamentos.php';
</script>