<?php
    $codigo= $_GET['codigo'];
    $nome=$_GET['nome'];
    $cargo=$_GET['cargo'];

    include 'funcionario.php';
    $func = new Funcionario();

    $func->setCodigo($codigo);
    $func->setNome($nome);
    $func->setCargo($cargo);

    include 'funcionarioDAO.PHP';
    $funcDAO = new funcionarioDAO($func);
    $funcDAO->cadastrarFuncionario($func);
?>