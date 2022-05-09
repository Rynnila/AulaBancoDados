<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">    
    <title>Crud Mercado</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <h1>Cadastramento de Funcionários e Produtos</h1>
    <div class='formulario' id='cadastrar_funcionario'>
        <h2>Cadastro do Funcionário</h2>
        <form action='controleFunc.php' method='GET'>
            <table>
                <tr>
                    <td><label for='codigo_func'> Código do funcionário:</label></td>
                    <td><input class='config' type='number' name= 'codigo_func' placeholder='Código Funcionário'></td>
                </tr>
                <tr>
                    <td><label for='nome_func'>Nome do Funcionário:</label></td>
                    <td><input class='config' type='text' name= 'nome_func' placeholder='Nome do Funcionário'></td>
                </tr>
                <tr>
                        <td><label for='cargo_func'> Cargo do Funcionário:</label></td>
                        <td><input class='config' type='text' name= 'cargo_func' placeholder='Cargo do Funcionário'></td>
                </tr>
                <tr class='botoes'>
                    <td><input class='input' type='submit' name= 'botao_funcionario'value='cadastrar funcionario'></td>
                    <td><input class='input' type='submit' name= 'botao_funcionario'value='atualizar funcionario'></td>
                    <td><input class='input' type='submit' name= 'botao_funcionario'value='deletar funcionario'></td>
                    <td><input class='input' type='submit' name= 'botao_funcionario' value='consultar funcionario'></td>
                </tr>   
            </table>
        </form>
    </div>
    
    <div class='formulario' id='cadastrar_estoque'>
        <h2>Cadastro dos produtos</h2>
        <form action='controleEstoque.php' method='GET'>
            <table>
                <tr>
                    <td><label for='codigo_prod'> Código do produto:</label></td>
                    <td><input class='config' type= 'number' name='codigo_prod' placeholder='Código do Produto'></td>
                </tr>
                <tr>
                    <td><label for='produto'> Nome do produto:</label></td>
                    <td><input class='config' type='text' name='produto' placeholder='Nome do Produto'></td>
                </tr>
                <tr>
                    <td><label for='quantidade'> Quantidade do produto:</label></td>
                    <td><input class='config' type='text' name='quantidade' placeholder='Quantidade'></td>
                </tr>
                <tr>
                    <td><label for='valor_compra'> Código do produto:</label></td>
                    <td><input class='config' type='text' name='valor_compra' placeholder='Valor da compra'></td>
                </tr>
                <tr class='botoes'>
                    <td><input class='input' type='submit' name='botao_estoque' value='cadastrar produto'></td>
                    <td><input class='input' type='submit' name='botao_estoque' value='atualizar produto'></td>
                    <td><input class='input' type='submit' name='botao_estoque' value='deletar produto'></td>
                    <td><input class='input' type='submit' name='botao_estoque' value='consultar estoque'></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>