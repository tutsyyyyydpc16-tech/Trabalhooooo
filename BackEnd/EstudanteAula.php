<?php
    //Classe EstudanteAula
    //Representa a Relação entre Estudante e Aula
    class EstudanteAula{

        //Atributos
        private $id_usuario;
        private $id_aula;

        //Metodo Construtor
        public function __construct($id_usuario, $id_aula){
            $this->setIdUsuario($id_usuario);
            $this->setIdAula($id_aula);
        }//Fim do Metodo Construtor

        //Metodo setidussuario()
        public function setIdUsuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }//Fim do Metodo setidusuario()

        //Metodo setIdAula()
        public function setIdAula($id_aula){
            $this->id_aula = $id_aula;
        }//Fim do Metodo setIdAula()

        //Metodo getIdUsuario()
        public function getIdUsuario(){
            return $this->id_usuario;
        }//Fim do Metodo getIdUsuario()

        //Metodo getIdAula()
        public function getIdAula(){
            return $this->id_aula;
        }//Fim do Metodo getIdAula()

    }//Fim da classe estudnateaula
?>
