<?php
    $codigo_prod= filter_input(INPUT_GET,'codigo_prod');
    $produto= filter_input(INPUT_GET,'produto');
    $quantidade= filter_input(INPUT_GET,'quantidade');
    $valor_compra= filter_input(INPUT_GET,'valor_compra');
    $botao_estoque= filter_input(INPUT_GET, 'botao_estoque');

    include 'estoque.php';
    $estoq= new estoque();
    
    $estoq-> setCodigo_Prod($codigo_prod);
    $estoq-> setProduto($produto);
    $estoq-> setQuantidade($quantidade);
    $estoq-> setValor_Compra($valor_compra);

    include 'estoqueDAO.php';
    $estoqDAO= new estoqueDAO();

    if($botao_estoque=='cadastrar produto'){
        $estoqDAO->cadastrarEstoque($estoq);
        }else if ($botao_estoque=='consultar estoque'){
            $estoqDAO->consultarEstoque();
            foreach($estoqDAO->consultarEstoque() as $res){
                echo $res ['codigo_prod']."<br>";
                echo $res ['produto']."<br>";
                echo $res ['quantidade']."<br>";
                echo $res ['valor_compra']."<br><br>";
            }
        }else if ($botao_estoque=='atualizar produto'){
                $estoqDAO->atualizarEstoque($estoq);
            }else if ($botao_estoque=='deletar produto'){
                $estoqDAO->deletarEstoque($codigo_prod);
            }
?>