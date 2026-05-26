<?php
    //Classe Turma
    class Turma {
        //Atributos
        private $TurmaId; //Chave Primária
        private $TurmaTitulo;
        private $TurmaDescricao;
        private $TurmaDivisao;
        private $TurmaModuloAno;
        private $TurmaCor;
        private $TurmaIdUsuario;

        //Fim dos atributos

        //Metodo Construtor
        public function __construct($TurmaTitulo, $TurmaDescricao, $TurmaDivisao, $TurmaModuloAno, $TurmaCor, $TurmaIdUsuario){
            $this->setTurmaTitulo($TurmaTitulo);
            $this->setTurmaDescricao($TurmaDescricao);
            $this->setTurmaDivisao($TurmaDivisao);
            $this->setTurmaModuloAno($TurmaModuloAno);
            $this->setTurmaCor($TurmaCor);
            $this->setTurmaIdUsuario($TurmaIdUsuario);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo SetTurmaTitulo()
        public function setTurmaTitulo($TurmaTitulo){
            if(is_string($TurmaTitulo)){
                $this->TurmaTitulo = $TurmaTitulo;
            }
        }//Fim do Metodo SetTurmaTitulo()

        //Metodo setTurmaDescricao()
        public function setTurmaDescricao($TurmaDescricao){
            if(is_string($TurmaDescricao)){
                $this->TurmaDescricao = $TurmaDescricao;
            }
        }//Fim do Metodo setTurmaDescricao()

        //Metodo setTurmaDivisao()
        public function setTurmaDivisao($TurmaDivisao){
             if(is_string($TurmaDivisao)){
                $this->TurmaDivisao = $TurmaDivisao;
            }
        }//Fim do Metodo setTurmaDivisao()

        //Metodo setTurmaModuloAno()
        public function setTurmaModuloAno($TurmaModuloAno){
             if(is_string($TurmaModuloAno)){
                $this->TurmaModuloAno = $TurmaModuloAno;
            }
        }//Fim do Metodo setTurmaModuloAno()

        //Metodo setTurmaCor()
        public function setTurmaCor($TurmaCor){
            if(is_string($TurmaCor)){
                $this->TurmaCor = $TurmaCor;
            }
        }//Fim do Metodo setTurmaCor()

        //Metodo setTurmaIdUsuario()
        public function setTurmaIdUsuario($TurmaIdUsuario){
            if(is_int($TurmaIdUsuario)){
                $this->TurmaIdUsuario = $TurmaIdUsuario;
            }
        }//Fim do Metodo setTurmaIdUsuario()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getTurmaId()
        public function getTurmaId(){
            return $this->TurmaId;
        }//Fim do Metodo getTurmaId()

        //Metodo getTurmaTitulo()
        public function getTurmaTitulo(){
            return $this->TurmaTitulo;
        }//Fim do Metodo getTurmaTitulo()

        //Metodo getTurmaDescricao()
        public function getTurmaDescricao(){
            return $this->TurmaDescricao;
        }//Fim do Metodo getTurmaDescricao()

        //Metodo getTurmaDivisao()
        public function getTurmaDivisao(){
            return $this->TurmaDivisao;
        }//Fim do Metodo getTurmaDivisao()

        //Metodo getTurmaModuloAno()
        public function getTurmaModuloAno(){
            return $this->TurmaModuloAno;
        }//Fim do Metodo getTurmaModuloAno()

        //Metodo getTurmaCor()
        public function getTurmaCor(){
            return $this->TurmaCor;
        }//Fim do Metodo getTurmaCor()

        //Metodo getTurmaIdUsuario()
        public function getTurmaIdUsuario(){
            return $this->TurmaIdUsuario;
        }//Fim do Metodo getTurmaIdUsuario()

          //Fim dos Metodos Get's

    }//Fim da Classe Turma
?>