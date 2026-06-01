<?php
    //Subclasse
    class Tutor extends usuario{
        //Atributos
        protected $disciplina;

        //Metodo Construtor
        public function __construct($senha, $usuario, $disciplina){
            //Enviado para a Superclasse Conta
            parent::__construct($senha, $usuario);
            $this->setDisciplina($disciplina);
        }//Fim do Metodo Construtor

        //Metodo setDisciplina
        public function setDisciplina($disciplina){
            if(is_string($disciplina) && !empty(trim($disciplina))){
                $this->disciplina = trim($disciplina);
            }
        }//Fim do Metodo setDisciplina

        //Metodo getDisciplina
        public function getDisciplina(){
            return $this->disciplina;
        }//Fim do Metodo getDisciplina
    }//Fim da classe Tutor
?>