<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous">

    </script>
    <style>
        /* Estilo para a parte superior */
        .top {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
            height: 60%;
        }

        /* Estilo para o grid */
        .grid {
            width: 80%;
            height: 80%;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        /* Estilo para a parte inferior */
        .bottom {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40%;
        }
    </style>
</head>

<body>
    <!-- Parte superior -->
    <div class="top">
        <div class="grid">
            <!-- Seu grid aqui -->
            <!-- Exemplo de grid -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="1">Código</th>
                        <th colspan="3">Nome</th>
                        <th colspan="1">Preço</th>
                        <th colspan="1"> Qtd. Mínima</th>
                        <th colspan="1">Qtd. Atual</th>
                        <th colspan="1">Excluir</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
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

                    // Consulta SQL para selecionar todos os produtos
                    $sql = "SELECT * FROM Produtos";

                    // Executar a consulta SQL
                    $result = mysqli_query($conn, $sql);

                    // Verificar se a consulta foi bem-sucedida
                    if (!$result) {
                        die("Erro na consulta: " . mysqli_error($conn));
                    }

                    if ($result->num_rows > 0) {
                        // Saída de dados de cada linha
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td colspan='1'>" . $row["ID"]            . "</td>" .
                                "<td colspan='3'>" . $row["Descricao"]         . "</td>" .
                                "<td colspan='1'>" . $row["Preco"]             . "</td>" .
                                "<td colspan='1'>" . $row["Quantidade_Minima"] . "</td>" .
                                "<td colspan='1'>" . $row["Quantidade_Atual"]  . "</td>" .
                                "<td colspan='1'>" . "<button type='button' class='btn btn-outline-danger btn_delete' id='btn_delete' value='" . $row["ID"] . "' >&#9746;</button>" . "</td>" .
                                "</tr>";
                        }
                    } else {
                        echo "0 resultados";
                    }

                    $conn->close();

                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Parte inferior -->
    <div class="bottom">
        <div class="buttons">
            <button class="btn btn-primary" onclick="openModal('incluir_produto.php')">Incluir</button>
            <button class="btn btn-primary">Alterar</button>
            <button class="btn btn-primary" onclick="closeModal()">Fechar</button>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn_delete').click(function(event) {
                event.preventDefault(); // Evita que o formulário seja enviado normalmente

                var id = $(this).val();

                console.log('id', id);

                $.ajax({
                    url: 'produto_delete.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(response) {
                        alert(response);
                        // Fechar o modal
                        closeModal();
                    }
                });
            });
        });
    </script>





</body>

</html>