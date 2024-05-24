<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Novo Departamento</title>
</head>

<body>
    <h2>Novo Departamento</h2>
    <form id="departamentoForm" action="departamento_insert.php" method="post">
        <!-- Campos do formulário -->

        <table class="tabela_campos">
            <thead>
                <tr>
                    <td colspan="1"><label for="descricao">Descrição:</label></td>
                    <td colspan="1"><input class="form-control" type="text" id="descricao" name="descricao" maxlength="150" required></td>
                </tr>

            </thead>
            <tbody>
        </table>

        <button class="btn btn-success" type="button" onclick="closeModal()">Cancelar</button>
        <button class="btn btn-danger gravar_departamento" type="submit" id="gravar_departamento">Gravar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.gravar_departamento').click(function(event) {
                event.preventDefault(); // Evita que o formulário seja enviado normalmente

                var descricao = $('#descricao').val();

                $.ajax({
                    url: 'departamento_insert.php',
                    type: 'POST',
                    data: {
                        descricao: descricao
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