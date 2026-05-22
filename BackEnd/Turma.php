<?php
    //Classe Turma
    class Turma {
        //Atributos
        private $TurmaTitulo;
        private $TurmaDescricao;
        private $TurmaSerie;
        private $TurmaMateria;
        private $TurmaAnoLetivo;
        private $TurmaTutor;
        private $TurmaEstudantes = [];
        private $TurmaTarefas = [];
        //Fim dos atributos

        //Metodo Construtor
        public function __construct($TurmaTitulo, $TurmaDescricao, $TurmaSerie, $TurmaMateria, $TurmaAnoLetivo, $TurmaTutor){
            $this->setTurmaTitulo($TurmaTitulo);
            $this->setTurmaDescricao($TurmaDescricao);
            $this->setTurmaSerie($TurmaSerie);
            $this->setTurmaMateria($TurmaMateria);
            $this->setTurmaAnoLetivo($TurmaAnoLetivo);
            $this->setTurmaTutor($TurmaTutor);
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

        //Metodo setTurmaSerie()
        public function setTurmaSerie($TurmaSerie){
            if(is_string($TurmaSerie)){
                $this->TurmaSerie = $TurmaSerie;
            }
        }//Fim do Metodo setTurmaSerie()

        //Metodo setTurmaMateria()
        public function setTurmaMateria($TurmaMateria){
            if(is_string($TurmaMateria)){
                $this->TurmaMateria = $TurmaMateria;
            }
        }//Fim do Metodo setTurmaMateria()

        //Metodo setTurmaAnoLetivo()
        public function setTurmaAnoLetivo($TurmaAnoLetivo){
            if(is_string($TurmaAnoLetivo)){
                $this->TurmaAnoLetivo = $TurmaAnoLetivo;
            }
        }//Fim do Metodo setTurmaAnoLetivo()

        //Metodo setTurmaTutor()
        public function setTurmaTutor($TurmaTutor){
            $this->TurmaTutor = $TurmaTutor;
        }//Fim do Metodo setTurmaTutor()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getTurmaTitulo()
        public function getTurmaTitulo(){
            return $this->TurmaTitulo;
        }//Fim do Metodo getTurmaTitulo()

        //Metodo getTurmaDescricao()
        public function getTurmaDescricao(){
            return $this->TurmaDescricao;
        }//Fim do Metodo getTurmaDescricao()

        //Metodo getTurmaSerie()
        public function getTurmaSerie(){
            return $this->TurmaSerie;
        }//Fim do Metodo getTurmaSerie()

        //Metodo getTurmaMateria()
        public function getTurmaMateria(){
            return $this->TurmaMateria;
        }//Fim do Metodo getTurmaMateria()

        //Metodo getTurmaAnoLetivo()
        public function getTurmaAnoLetivo(){
             return $this->TurmaAnoLetivo;
        }//Fim do Metodo getTurmaAnoLetivo()

        //Metodo getTurmaTutor()
        public function getTurmaTutor(){
            return $this->TurmaTutor;
        }//Fim do Metodo getTurmaTutor()

        //Metodo getTurmaEstudantes()
        public function getTurmaEstudantes(){
            return $this->TurmaEstudantes;
        }//Fim do Metodo getTurmaEstudantes()

        //Metodo getTurmaTarefas()
        public function getTurmaTarefas(){
            return $this->TurmaTarefas;
        }//Fim do Metodo getTurmaTarefas()

          //Fim dos Metodos Get's

          //Metodos Adicionais

        //Metodo adicionarEstudante()
        public function addEstudante($estudante){
            $this->TurmaEstudantes[] = $estudante;
        }//Fim do Metodo adicionarEstudante()

        //Metodo adicionarTarefa()
        public function addTarefa($tarefa){
            $this->TurmaTarefas[] = $tarefa;
        }//Fim do Metodo adicionarTarefa()

         //Fim dos Metodos Adicionais

    }//Fim da Classe Turma
?>