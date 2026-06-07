<?php
    //Classe Modulo
    class Modulo {
        //Atributos
        private $IdModulo; //Chave Primária //set gerado automaticamente pelo banco de dados
        private $TituloModulo;
        private $DescricaoModulo;
        private $OrdemModulo;
        private $IdCurso; //Chave Estrangeira
        private $Aulas; //Composição
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($TituloModulo, $DescricaoModulo, $OrdemModulo, $IdCurso){
            $this->setTituloModulo($TituloModulo);
            $this->setDescricaoModulo($DescricaoModulo);
            $this->setOrdemModulo($OrdemModulo);
            $this->setIdCurso($IdCurso);
            $this->Aulas = [];
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTituloModulo()
        public function setTituloModulo($TituloModulo){
            if(is_string($TituloModulo)){
                $this->TituloModulo = $TituloModulo;
            }
        }//Fim do Metodo setTituloModulo()

        //Metodo setDescricaoModulo()
        public function setDescricaoModulo($DescricaoModulo){
            if(is_string($DescricaoModulo)){
                $this->DescricaoModulo = $DescricaoModulo;
            }
        }//Fim do Metodo setDescricaoModulo()

        //Metodo setOrdemModulo()
        public function setOrdemModulo($OrdemModulo){
            if(is_int($OrdemModulo)){
                $this->OrdemModulo = $OrdemModulo;
            }
        }//Fim do Metodo setOrdemModulo()

        //Metodo setIdCurso()
        public function setIdCurso($IdCurso){
            if(is_int($IdCurso)){
                $this->IdCurso = $IdCurso;
            }
        }//Fim do Metodo setIdCurso()

        //Fim dos Metodos Set's

        //Metodo addAula
        public function addAula(Aula $a) {
            $this->Aulas[] = $a;
        }//Fim do metodo addAula

        //Metodos Get's

        //Metodo getIdModulo()
        public function getIdModulo(){
            return $this->IdModulo;
        }//Fim do Metodo getIdModulo()

        //Metodo getTituloModulo()
        public function getTituloModulo(){
            return $this->TituloModulo;
        }//Fim do Metodo getTituloModulo()

        //Metodo getDescricaoModulo()
        public function getDescricaoModulo(){
            return $this->DescricaoModulo;
        }//Fim do Metodo getDescricaoModulo()

        //Metodo getOrdemModulo()
        public function getOrdemModulo(){
            return $this->OrdemModulo;
        }//Fim do Metodo getOrdemModulo()

        //Metodo getIdCurso()
        public function getIdCurso(){
            return $this->IdCurso;
        }//Fim do Metodo getIdCurso()

        public function getAulas(){
            return $this->Aulas;
        }

        //Fim dos Metodos Get's

    }//Fim da Classe Modulo
?>