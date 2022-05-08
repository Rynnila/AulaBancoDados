<?php
    class estoque{
        private $codigo_prod, $produto, $quantidade, $valor_compra;

        public function getCodigo_Prod(){
            return $this->codigo_prod;
        }

        public function setCodigo_Prod($codigo_prod){
            $this->codigo_prod= $codigo_prod;
        }

        public function getProduto(){
            return $this->produto;
        }

        public function setProduto($produto){
            $this->produto= $produto;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        public function setQuantidade($quantidade){
            $this->quantidade= $quantidade;
        }

        public function getValor_Compra(){
            return $this->valor_compra;
        }

        public function setValor_Compra($valor_compra){
            $this->valor_compra= $valor_compra;
        }
    }
?>