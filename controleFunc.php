<?php
    $codigo_func= filter_input(INPUT_GET,'codigo_func');
    $nome_func=filter_input(INPUT_GET,'nome_func');
    $cargo_func=filter_input(INPUT_GET,'cargo_func');
    $botao_funcionario =filter_input(INPUT_GET,'botao_funcionario');

    include 'funcionario.php';
    $func = new funcionario();

    $func->setCodigo_Func($codigo_func);
    $func->setNome_Func($nome_func);
    $func->setCargo_Func($cargo_func);

    include 'funcionarioDAO.php';
    $funcDAO = new funcionarioDAO();

    if($botao_funcionario=='cadastrar funcionario'){
    $funcDAO->cadastrarFuncionario($func);
    }else if ($botao_funcionario=='consultar funcionario'){
        $funcDAO->consultarFuncionario();
        foreach($funcDAO->consultarFuncionario() as $res){
            echo $res ['codigo_func']."<br>";
            echo $res ['nome_func']."<br>";
            echo $res ['cargo_func']."<br><br>";
        }
    }else if ($botao_funcionario=='atualizar funcionario'){
            $funcDAO->atualizarFuncionario($func);
        }else if ($botao_funcionario=='deletar funcionario'){
            $funcDAO->deletarFuncionario($codigo_func);
        }
?>