<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software de Comunicação do Sistema Funerário Municipal</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <button class="btn btn-primary" onclick="openModal('departamentos.php')">Departamentos</button>
        <button class="btn btn-primary" onclick="openModal('produtos.php')">Produtos</button>
        <button class="btn btn-primary" onclick="openModal('usuarios.php')">Usuários</button>
        <button class="btn btn-primary" onclick="openModal('retirada.php')">Retirada</button>
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