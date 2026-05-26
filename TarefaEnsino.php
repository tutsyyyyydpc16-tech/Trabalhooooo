<?php
    //Classe TarefaEnsino
    class TarefaEnsino {
        //Atributos
        private $TarefaEnsinoId; //Chave Primária
        private $TarefaEnsinoValor;
        private $TurmaId; //Chave Estrangeira
        private $UsuarioId; //Chave Estrangeira
        private $TarefaEnsinoDisciplina;
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($TarefaEnsinoValor, $TurmaId, $UsuarioId, $TarefaEnsinoDisciplina){
            $this->setTarefaEnsinoValor($TarefaEnsinoValor);
            $this->setTurmaId($TurmaId);
            $this->setUsuarioId($UsuarioId);
            $this->setTarefaEnsinoDisciplina($TarefaEnsinoDisciplina);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTarefaEnsinoValor()
        public function setTarefaEnsinoValor($TarefaEnsinoValor){
            if(is_float($TarefaEnsinoValor) || is_int($TarefaEnsinoValor)){
                $this->TarefaEnsinoValor = $TarefaEnsinoValor;
            }
        }//Fim do Metodo setTarefaEnsinoValor()

        //Metodo setTurmaId()
        public function setTurmaId($TurmaId){
            if(is_int($TurmaId)){
                $this->TurmaId = $TurmaId;
            }
        }//Fim do Metodo setTurmaId()

        //Metodo setUsuarioId()
        public function setUsuarioId($UsuarioId){
            if(is_int($UsuarioId)){
                $this->UsuarioId = $UsuarioId;
            }
        }//Fim do Metodo setUsuarioId()

        //Metodo setTarefaEnsinoDisciplina()
        public function setTarefaEnsinoDisciplina($TarefaEnsinoDisciplina){
            if(is_string($TarefaEnsinoDisciplina)){
                $this->TarefaEnsinoDisciplina = $TarefaEnsinoDisciplina;
            }
        }//Fim do Metodo setTarefaEnsinoDisciplina()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getTarefaEnsinoId()
        public function getTarefaEnsinoId(){
            return $this->TarefaEnsinoId;
        }//Fim do Metodo getTarefaEnsinoId()

        //Metodo getTarefaEnsinoValor()
        public function getTarefaEnsinoValor(){
            return $this->TarefaEnsinoValor;
        }//Fim do Metodo getTarefaEnsinoValor()

        //Metodo getTurmaId()
        public function getTurmaId(){
            return $this->TurmaId;
        }//Fim do Metodo getTurmaId()

        //Metodo getUsuarioId()
        public function getUsuarioId(){
            return $this->UsuarioId;
        }//Fim do Metodo getUsuarioId()

        //Metodo getTarefaEnsinoDisciplina()
        public function getTarefaEnsinoDisciplina(){
            return $this->TarefaEnsinoDisciplina;
        }//Fim do Metodo getTarefaEnsinoDisciplina()

        //Fim dos Metodos Get's
    }//Fim da Classe TarefaEnsino
?>