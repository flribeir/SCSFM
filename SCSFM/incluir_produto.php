<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Novo Produto</title>
</head>
<body>
    <h2>Novo Produto</h2>
    <form id="produtoForm" action="produto_insert.php" method="post">
        <!-- Campos do formulário -->

        <table class="tabela_campos">
                <thead>
                    <tr>
                        <td colspan="1"><label for="descricao">Descrição:</label></td>
                        <td colspan="1"><input class="form-control" type="text" id="descricao" name="descricao" maxlength="150" required></td>
                    </tr>
                    <tr>
                        <td><label for="valor">Preço:</label></td>
                        <td><input type="number" class="form-control" name="valor" id="valor"></td>
                    </tr>
                    <tr>
                        <td colspan="1"><label for="unidade">Unidade:</label></td>
                        <td colspan="1"><input class="form-control" type="text" id="unidade" name="unidade" maxlength="2" required></td>
                    </tr>
                    <tr>
                        <td><label for="quantidade_minima">Quantidade Mínima:</label></td>
                        <td><input class="form-control" type="number" id="quantidade_minima" name="quantidade_minima" step="0.01" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="quantidade_atual">Quantidade Atual:</label></td>
                        <td><input class="form-control" type="number" id="quantidade_atual" name="quantidade_atual" step="0.01" required><br></td>
                    </tr>
                </thead>
                <tbody>
        </table>

        <button class="btn btn-success" type="button" onclick="closeModal()">Cancelar</button>
        <button class="btn btn-danger gravar_produto" type="submit" id="gravar_produto">Gravar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.gravar_produto').click(function(event){
                event.preventDefault(); // Evita que o formulário seja enviado normalmente

                var descricao = $('#descricao').val();
                var valor = $('#valor').val();
                var unidade = $('#unidade').val();
                var quantidade_minima = $('#quantidade_minima').val();
                var quantidade_atual = $('#quantidade_atual').val();

                console.log('preco', valor);

                $.ajax({
                    url: 'produto_insert.php',
                    type: 'POST',
                    data: {
                        descricao: descricao,
                        valor: valor,
                        unidade: unidade,
                        quantidade_minima: quantidade_minima,
                        quantidade_atual: quantidade_atual
                    },
                    success: function(response){
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
