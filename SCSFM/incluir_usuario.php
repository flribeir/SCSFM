<?php
$servername = "172.174.233.235";
$username = "root";
$password = "univesp";
$dbname = "SCSFM";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Departamentos";
$result = $conn->query($sql);

$departamentos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $departamentos[] = $row;
    }
}

// echo json_encode($departamentos);

$conn->close();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Novo Usuário</title>
</head>

<body>
    <h2>Novo Usuário</h2>
    <form id="usuarioForm" action="usuario_insert.php" method="post">
        <!-- Campos do formulário -->

        <table class="tabela_campos">
            <thead>
                <tr>
                    <td colspan="1"><label for="nome">Nome:</label></td>
                    <td colspan="1"><input class="form-control" type="text" id="nome" name="nome" maxlength="150" required></td>
                </tr>
                <tr>
                    <td><label for="senha">Senha:</label></td>
                    <td><input type="password" class="form-control" name="senha" id="senha" required></td>
                </tr>
                <tr>
                    <td colspan="1"><label for="departamento">Departamento:</label></td>
                    <td colspan="1">
                        <select class="form-control" id="departamento" name="departamento" required>
                            <option value="">Selecione um Departamento</option>
                            <?php foreach ($departamentos as $option) : ?>
                                <option value="<?php echo htmlspecialchars($option['ID']); ?>">
                                    <?php echo htmlspecialchars($option['Nome']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </thead>
            <tbody>
        </table>

        <button class="btn btn-success" type="button" onclick="closeModal()">Cancelar</button>
        <button class="btn btn-danger gravar_usuario" type="submit" id="gravar_usuario">Gravar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Carregar todos os departamentos quando a página for carregada

            $('.gravar_usuario').click(function(event) {
                event.preventDefault(); // Evita que o formulário seja enviado normalmente

                var nome = $('#nome').val();
                var senha = $('#senha').val();
                var departamento = $('#departamento').val();

                // Verificar se os campos obrigatórios estão preenchidos
                if (nome && senha && departamento) {
                    $.ajax({
                        url: 'usuario_insert.php',
                        type: 'POST',
                        data: {
                            nome: nome,
                            senha: senha,
                            departamento: departamento
                        },
                        success: function(response) {
                            alert(response);
                            // Fechar o modal
                            closeModal();
                        },
                        error: function(xhr, status, error) {
                            alert('Ocorreu um erro ao tentar salvar os dados: ' + error);
                        }
                    });
                } else {
                    alert('Por favor, preencha todos os campos obrigatórios.');
                }
            });
        });

        // Função para fechar o modal (supondo que você tenha uma função closeModal definida em outro lugar)
        function closeModal() {
            // Implementação da função para fechar o modal
            console.log("Modal fechado"); // Exemplo de implementação, ajuste conforme necessário
        }
    </script>
</body>

</html>