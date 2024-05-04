<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software de Comunicação do Sistema Funerário Municipal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Barra superior -->
    <div class="top-bar">
        <div class="logo">
            <img src="https://www.prefeituradearuja.sp.gov.br//images/brasaopma.png" alt="Logo">
        </div>
        <div class="title">
            Software de Comunicação do Sistema Funerário Municipal
        </div>
    </div>

    <!-- Barra lateral -->
    <div class="side-bar">
        <button onclick="openModal('departamentos.php')">Departamentos</button>
        <button onclick="openModal('produtos.php')">Produtos</button>
        <button onclick="openModal('usuarios.php')">Usuários</button>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="modal-content"></div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
