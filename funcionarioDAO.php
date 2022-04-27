<?php
    include 'conexao.php';
    class funcionarioDAO{
        public function cadastrarFuncionario(Funcionario $f){
            $sql='insert into funcionario (codigo_funcionario,nome, cargo) values (?,?,?)';

            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1, $f->getCodigo());
            $resultado-> bindValue(2,$f->getNome());
            $resultado-> bindValue(3,$f->getCargo());
            
            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Cadastrado com sucesso');
            window.location.href='index.php';</script>");
            }
        }
    }
?>