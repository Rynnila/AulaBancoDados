<?php
    include 'conexao.php';
    
    class funcionarioDAO{
        public function cadastrarFuncionario(Funcionario $f){
            $sql='insert into funcionario (codigo_func,nome_func, cargo_func) values (?,?,?)';

            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1, $f->getCodigo_Func());
            $resultado-> bindValue(2,$f->getNome_Func());
            $resultado-> bindValue(3,$f->getCargo_Func());
            
            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Cadastrado com sucesso');
            window.location.href='index.php';</script>");
            }
        }

        public function consultarFuncionario(){
            $sql = 'select * from funcionario';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado->execute();
            if($resultado->rowCount()>0){
                $valor=$resultado->fetchAll(\PDO::FETCH_ASSOC);
                return $valor;
            }
        }

        public function atualizarFuncionario(Funcionario $f){
            $sql = 'update funcionario set nome_func=?, cargo_func=? where codigo_func=?';

            $banco = new conexao();
            $con = $banco->getConexao();
            $resultado = $con->prepare($sql);
            $resultado->bindValue(1, $f->getNome_Func());
            $resultado->bindValue(2, $f->getCargo_Func());
            $resultado->bindValue(3, $f->getCodigo_Func());

            $final = $resultado->execute();

            if($final){
                echo "<script LANGUAGE='JavaScript'>
                window.alert('Atualizado com sucesso');
                window.location.href='index.php';</script>";
            }
        }

        public function deletarFuncionario($codigo_func){
            $sql='delete from funcionario where codigo_func=?';

            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1, $codigo_func);
            
            
            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Deletado com sucesso');
            window.location.href='index.php';</script>");
            }
        }
    }
?>