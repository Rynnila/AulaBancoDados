<?php
    include 'conexao.php';

    class estoqueDAO{
        public function cadastrarEstoque(estoque $e){
            $sql='insert into estoque (codigo_prod, produto, quantidade, valor_compra) values(?,?,?,?)';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1, $e->getCodigo_Prod());
            $resultado-> bindValue(2,$e->getProduto());
            $resultado-> bindValue(3,$e->getQuantidade());
            $resultado-> bindValue(4,$e->getValor_Compra());

            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Produto cadastrado com sucesso');
            window.location.href='index.php';</script>");
            }
        }

        public function consultarEstoque(){
            $sql = 'select * from estoque';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado->execute();
            if($resultado->rowCount()>0){
                $valor=$resultado->fetchAll(\PDO::FETCH_ASSOC);
                return $valor;
            }
        }

        public function atualizarEstoque(estoque $e){
            $sql='update estoque set produto=?, quantidade=?, valor_compra=? where codigo_prod=?';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1,$e->getProduto());
            $resultado-> bindValue(2,$e->getQuantidade());
            $resultado-> bindValue(3,$e->getValor_Compra());
            $resultado-> bindValue(4, $e->getCodigo_Prod());

            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Estoque atualizado com sucesso');
            window.location.href='index.php';</script>");
            }
        }

        public function deletarEstoque($codigo_prod){
            $sql='delete from estoque where codigo_prod=?';
            $banco = new Conexao();
            $con = $banco->getConexao();
            $resultado= $con->prepare($sql);
            $resultado-> bindValue(1, $codigo_prod); 
            
            $final=$resultado->execute();

            if($final){
            echo("<script LANGUAGE='JavaScript'>
            window.alert('Deletado com sucesso');
            window.location.href='index.php';</script>");
            }
        }
    }
?>