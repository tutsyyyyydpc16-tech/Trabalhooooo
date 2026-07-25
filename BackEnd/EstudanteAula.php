<?php
    //Classe EstudanteAula
    //Representa a Relação entre Estudante e Aula
    class EstudanteAula{

        //Atributos
        private Estudante $estudante;
        private Aula $aula;

        //Metodo Construtor
        public function __construct(Estudante $estudante, Aula $aula){
            $this->setEstudante($estudante);
            $this->setAula($aula);
        }//Fim do Metodo Construtor

        //Metodo setEstudante()
        public function setEstudante(Estudante $estudante): void {
            $this->estudante = $estudante;
        }//Fim do Metodo setEstudante()

        //Metodo setAula()
        public function setAula(Aula $aula): void{
            $this->aula = $aula;
        }//Fim do Metodo setAula()

        //Metodo getEstudante()
        public function getEstudante(): Estudante{
            return $this->estudante;
        }//Fim do Metodo getEstudante()

        //Metodo getAula()
        public function getAula(): Aula {
            return $this->aula;
        }//Fim do Metodo getAula()

    }//Fim da Classe EstudanteAula
?>
