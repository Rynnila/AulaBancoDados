<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='controle.php' method='GET'>
        <p><input type='number' name= 'codigo' placeholder='codigo'></p>
        <p><input type='text' name= 'nome' placeholder='nome'></p>
        <p><input type='text' name= 'cargo' placeholder='cargo'></p>

        <p><input type='submit' name= 'botao'value='cadastrar'></p>
        <p><input type='submit' name= 'botao'value='atualizar'></p>
        <p><input type='submit' name= 'botao'value='deletar'></p>
        <p><input type='submit' name= 'botao' value='consultar'></p>
    </form>

    <form action='controleEstoque.php' method='GET'>
        <p><input type= 'number' name='codigo_prod' placeholder='Código do Produto'></p>
        <p><input type='text' name='produto' placeholder='Produto'></p>
        <p><input type='text' name='quantidade' placeholder='Quantidade'></p>
        <p><input type='text' name='valor_compra' placeholder='Valor da compra'></p>

        <p><input type='submit' name='botao_estoque' value='cadastrar_prod'></p>
        <p><input type='submit' name='botao_estoque' value='atualizar_prod'></p>
        <p><input type='submit' name='botao_estoque' value='deletar_prod'></p>
        <p><input type='submit' name='botao_estoque' value='consultar_prod'></p>
    </form>
</body>
</html>