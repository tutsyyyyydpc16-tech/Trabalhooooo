<?php //Começo da classe Estudante
    //Classe Estudante
    //Subclasse
    class Estudante extends usuario{
        //Atributos
        protected $turma;

        //Metodo Construtor
        public function __construct($senha, $usuario, $turma){
            //Enviado para a Superclasse Conta
            parent::__construct($senha, $usuario);
            $this->setTurma($turma);
        }//Fim do Metodo Construtor

        //Metodo setTurma
        public function setTurma($turma){
            if(is_string($turma) && !empty(trim($turma))){
                $this->turma = trim($turma);
            }
        }//Fim do Metodo setTurma

        //Metodo getTurma
        public function getTurma(){
            return $this->turma;
        }//Fim do Metodo getTurma
    }//Fim da classe Estudante
?>