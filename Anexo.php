<?php
    //Classe Anexo
    class Anexo {
        private $AnexoId; //Chave Primária
        private $AnexoTitulo;
        private $AnexoArquivo; //BLOB
        private $AnexoTipo;
        private $UsuarioId; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($AnexoTitulo, $AnexoArquivo, $AnexoTipo, $UsuarioId){
            $this->setAnexoTitulo($AnexoTitulo);
            $this->setAnexoArquivo($AnexoArquivo);
            $this->setAnexoTipo($AnexoTipo);
            $this->setUsuarioId($UsuarioId);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setAnexoTitulo()
        public function setAnexoTitulo($AnexoTitulo){
            if(is_string($AnexoTitulo)){
                $this->AnexoTitulo = $AnexoTitulo;
            }
        }//Fim do Metodo setAnexoTitulo()

        //Metodo setAnexoArquivo()
        public function setAnexoArquivo($AnexoArquivo){
            if(is_string($AnexoArquivo)){
                $this->AnexoArquivo = $AnexoArquivo;
            }
        }//Fim do Metodo setAnexoArquivo()

        //Metodo setAnexoTipo()
        public function setAnexoTipo($AnexoTipo){
            if(is_string($AnexoTipo)){
                $this->AnexoTipo = $AnexoTipo;
            }
        }//Fim do Metodo setAnexoTipo()

        //Metodo setUsuarioId()
        public function setUsuarioId($UsuarioId){
            if(is_int($UsuarioId)){
                $this->UsuarioId = $UsuarioId;
            }
        }//Fim do Metodo setUsuarioId()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getAnexoId()
        public function getAnexoId(){
            return $this->AnexoId;
        }//Fim do Metodo getAnexoId()

        //Metodo getAnexoTitulo()
        public function getAnexoTitulo(){
            return $this->AnexoTitulo;
        }//Fim do Metodo getAnexoTitulo()

        //Metodo getAnexoArquivo()
        public function getAnexoArquivo(){
            return $this->AnexoArquivo;
        }//Fim do Metodo getAnexoArquivo()

        //Metodo getAnexoTipo()
        public function getAnexoTipo(){
            return $this->AnexoTipo;
        }//Fim do Metodo getAnexoTipo()

        //Metodo getUsuarioId()
        public function getUsuarioId(){
            return $this->UsuarioId;
        }//Fim do Metodo getUsuarioId()

        //Fim dos Metodos Get's
    }//Fim da Classe Anexo
?>