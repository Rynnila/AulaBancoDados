<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='controleFunc.php' method='GET'>
        <p><input type='number' name= 'codigo_func' placeholder='codigo'></p>
        <p><input type='text' name= 'nome_func' placeholder='nome'></p>
        <p><input type='text' name= 'cargo_func' placeholder='cargo'></p>

        <p><input type='submit' name= 'botao_funcionario'value='cadastrar funcionario'></p>
        <p><input type='submit' name= 'botao_funcionario'value='atualizar funcionario'></p>
        <p><input type='submit' name= 'botao_funcionario'value='deletar funcionario'></p>
        <p><input type='submit' name= 'botao_funcionario' value='consultar funcionario'></p>
    </form>

    <form action='controleEstoque.php' method='GET'>
        <p><input type= 'number' name='codigo_prod' placeholder='Código do Produto'></p>
        <p><input type='text' name='produto' placeholder='Produto'></p>
        <p><input type='text' name='quantidade' placeholder='Quantidade'></p>
        <p><input type='text' name='valor_compra' placeholder='Valor da compra'></p>

        <p><input type='submit' name='botao_estoque' value='cadastrar produto'></p>
        <p><input type='submit' name='botao_estoque' value='atualizar produto'></p>
        <p><input type='submit' name='botao_estoque' value='deletar produto'></p>
        <p><input type='submit' name='botao_estoque' value='consultar produto'></p>
    </form>
</body>
</html>