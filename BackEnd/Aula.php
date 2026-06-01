<?php
    //Classe Aula
    class Aula{
        //Atributos
        private $IdAula; //Chave Primária //set gerado automaticamente pelo banco de dados
        private $TituloAula;
        private $DescricaoAula;
        private $TipoConteudoAula;
        private $DuracaoAula;
        private $OrdemAula;
        private $IdModulo; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($TituloAula, $DescricaoAula, $TipoConteudoAula, $DuracaoAula, $OrdemAula, $IdModulo){
            $this->setTituloAula($TituloAula);
            $this->setDescricaoAula($DescricaoAula);
            $this->setTipoConteudoAula($TipoConteudoAula);
            $this->setDuracaoAula($DuracaoAula);
            $this->setOrdemAula($OrdemAula);
            $this->setIdModulo($IdModulo);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTituloAula()
        public function setTituloAula($TituloAula){
            if(is_string($TituloAula)){
                $this->TituloAula = $TituloAula;
            }
        }//Fim do Metodo setTituloAula()

        //Metodo setDescricaoAula()
        public function setDescricaoAula($DescricaoAula){
            if(is_string($DescricaoAula)){
                $this->DescricaoAula = $DescricaoAula;
            }
        }//Fim do Metodo setDescricaoAula()

        //Metodo setTipoConteudoAula()
        public function setTipoConteudoAula($TipoConteudoAula){
            if(is_string($TipoConteudoAula)){
                $this->TipoConteudoAula = $TipoConteudoAula;
            }
        }//Fim do Metodo setTipoConteudoAula()

        //Metodo setDuracaoAula()
        public function setDuracaoAula($DuracaoAula){
            if(is_string($DuracaoAula)){
                $this->DuracaoAula = $DuracaoAula;
            }
        }//Fim do Metodo setDuracaoAula()

        //Metodo setOrdemAula()
        public function setOrdemAula($OrdemAula){
            if(is_int($OrdemAula)){
                $this->OrdemAula = $OrdemAula;
            }
        }//Fim do Metodo setOrdemAula()

        //Metodo setIdModulo()
        public function setIdModulo($IdModulo){
            if(is_int($IdModulo)){
                $this->IdModulo = $IdModulo;
            }
        }//Fim do Metodo setIdModulo()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdAula()
        public function getIdAula(){
            return $this->IdAula;
        }//Fim do Metodo getIdAula()

        //Metodo getTituloAula()
        public function getTituloAula(){
            return $this->TituloAula;
        }//Fim do Metodo getTituloAula()

        //Metodo getDescricaoAula()
        public function getDescricaoAula(){
            return $this->DescricaoAula;
        }//Fim do Metodo getDescricaoAula()

        //Metodo getTipoConteudoAula()
        public function getTipoConteudoAula(){
            return $this->TipoConteudoAula;
        }//Fim do Metodo getTipoConteudoAula()

        //Metodo getDuracaoAula()
        public function getDuracaoAula(){
            return $this->DuracaoAula;
        }//Fim do Metodo getDuracaoAula()

        //Metodo getOrdemAula()
        public function getOrdemAula(){
            return $this->OrdemAula;
        }//Fim do Metodo getOrdemAula()

        //Metodo getIdModulo()
        public function getIdModulo(){
            return $this->IdModulo;
        }//Fim do Metodo getIdModulo()

        //Fim dos Metodos Get's
    }//Fim da Classe Aula
?>