<?php
    class funcionario{
        private $codigo_func,$nome_func, $cargo_func;

        public function getCodigo_Func(){
            return $this->codigo_func;
        }

        public function setCodigo_Func($codigo_func){
            $this->codigo_func = $codigo_func;
        }

        public function getNome_Func(){
            return $this->nome_func;
        }

        public function setNome_Func($nome_func){
            $this->nome_func = $nome_func;
        }

        public function getCargo_Func(){
            return $this->cargo_func;
        }

        public function setCargo_Func($cargo_func){
            $this->cargo_func = $cargo_func;
        }
    }

?>