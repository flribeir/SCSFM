<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
        /* Estilos para o layout */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

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
            background-color: #333;
            color: #fff;
            height: 40%;
        }

        /* Estilo para os botões */
        .buttons {
            display: flex;
            gap: 10px;
        }

        .buttons button {
            padding: 10px 20px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Parte superior -->
    <div class="top">
        <div class="grid">
            <!-- Seu grid aqui -->
            <!-- Exemplo de grid -->
            <table>
                <thead>
                    <tr>
                        <th>Usuário</th>
                        <th>Responsável</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Usuário 1</td>
                        <td>Responsável 1</td>
                    </tr>
                    <tr>
                        <td>Usuário 2</td>
                        <td>Responsável 2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Parte inferior -->
    <div class="bottom">
        <div class="buttons">
            <button>Incluir</button>
            <button>Alterar</button>
            <button>Excluir</button>
            <button>Fechar</button>
        </div>
    </div>
</body>
</html>
