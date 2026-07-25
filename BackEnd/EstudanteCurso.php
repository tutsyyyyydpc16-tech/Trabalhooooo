<?php
    //Classe EstudanteCurso
    class EstudanteCurso{
        //Atributos
        private Estudante $estudante;
        private Curso $curso;

        //Metodo Construtor
        public function __construct(Estudante $estudante, Curso $curso){
            $this->setEstudante($estudante);
            $this->setCurso($curso);
        }//Fim do Metodo Construtor

        //Metodo setEstudante()
        public function setEstudante(Estudante $estudante): void {
            $this->estudante = $estudante;
        }//Fim do Metodo setEstudante()

        //Metodo setCurso()
        public function setCurso(Curso $curso): void {
            $this->curso = $curso;
        }//Fim do Metodo setCurso()

        //Metoodo getEstudante()
        public function getEstudante(): Estudante {
            return $this->estudante;
        }//Fim do Metodo getEstudante

        //Metodo getCurso()
        public function getCurso(): Curso {
            return $this->curso;
        }//Fim do Metodo getCurso()
    }//Fim da Classe EstudanteCurso
?>