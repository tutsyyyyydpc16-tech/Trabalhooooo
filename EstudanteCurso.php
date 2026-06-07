<?php
    //Classe EstudanteCurso
    class EstudanteCurso{
        //Atributos
        private $IdEstudante; //Chave Estrangeira
        private $IdCurso; //Chave Estrangeira

        //Metodo Construtor
        public function __construct($IdEstudante, $IdCurso){
            $this->setIdEstudante($IdEstudante);
            $this->setIdCurso($IdCurso);
        }//Fim do Metodo Construtor

        //Metodo setIdEstudante()
        public function setIdEstudante($IdEstudante){
            if(is_int($IdEstudante)){
                $this->IdEstudante = $IdEstudante;
            }
        }//Fim do Metodo setIdEstudante()

        //Metodo setIdCurso()
        public function setIdCurso($IdCurso){
            if(is_int($IdCurso)){
                $this->IdCurso = $IdCurso;
            }
        }//Fim do Metodo setIdCurso()
    }//Fim da classe EstudanteCurso
?>