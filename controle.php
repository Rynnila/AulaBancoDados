<?php
    $codigo= filter_input(INPUT_GET,'codigo');
    $nome=filter_input(INPUT_GET,'nome');
    $cargo=filter_input(INPUT_GET,'cargo');
    $botao =filter_input(INPUT_GET,'botao');

    include 'funcionario.php';
    $func = new Funcionario();

    $func->setCodigo($codigo);
    $func->setNome($nome);
    $func->setCargo($cargo);

    include 'funcionarioDAO.PHP';
    $funcDAO = new funcionarioDAO($func);

    if($botao=='cadastrar'){
    $funcDAO->cadastrarFuncionario($func);
    }else if ($botao=='consultar'){
        $funcDAO->consultarFuncionario();
        foreach($funcDAO->consultarFuncionario() as $res){
            echo $res ['codigo_funcionario']."br>";
            echo $res ['nome']."br>";
            echo $res ['cargo']."br><br>";
        }
    }
?>