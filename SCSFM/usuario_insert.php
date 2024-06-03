<?php

$nome         = $_POST['nome'];
$senha        = $_POST['senha'];
$departamento = $_POST['departamento'];

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

$sql = "INSERT INTO Usuarios (Nome, Senha, ID_Departamentos)
        VALUES ('$nome', '$senha', $departamento)
        ";

// Executar a consulta SQL
$result = mysqli_query($conn, $sql);

$conn->close();

?>

<script>
    alert('usuário inserido com sucesso');
    window.location.href = 'usuarios.php';
</script>