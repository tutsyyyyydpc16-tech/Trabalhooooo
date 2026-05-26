<?php
    //Classe MaterialEnsino
    class MaterialEstudo {
        //Atributos
        private $MaterialEnsinoId; //Chave Primária
        private $MaterialEnsinoDisciplina;
        private $MaterialEnsinoTipo;
        private $MaterialEnsinoArquivo;
        private $UsuarioId; //Chave Estrangeira
        private $TurmaId; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($MaterialEnsinoDisciplina, $MaterialEnsinoTipo, $MaterialEnsinoArquivo, $UsuarioId, $TurmaId){
            $this->setMaterialEnsinoDisciplina($MaterialEnsinoDisciplina);
            $this->setMaterialEnsinoTipo($MaterialEnsinoTipo);
            $this->setMaterialEnsinoArquivo($MaterialEnsinoArquivo);
            $this->setUsuarioId($UsuarioId);
            $this->setTurmaId($TurmaId);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setMaterialEnsinoDisciplina()
        public function setMaterialEnsinoDisciplina($MaterialEnsinoDisciplina){
            if(is_string($MaterialEnsinoDisciplina)){
                $this->MaterialEnsinoDisciplina = $MaterialEnsinoDisciplina;
            }
        }//Fim do Metodo setMaterialEnsinoDisciplina()

        //Metodo setMaterialEnsinoTipo()
        public function setMaterialEnsinoTipo($MaterialEnsinoTipo){
            if(is_string($MaterialEnsinoTipo)){
                $this->MaterialEnsinoTipo = $MaterialEnsinoTipo;
            }
        }//Fim do Metodo setMaterialEnsinoTipo()

        //Metodo setMaterialEnsinoArquivo()
        public function setMaterialEnsinoArquivo($MaterialEnsinoArquivo){
            if(is_string($MaterialEnsinoArquivo)){
                $this->MaterialEnsinoArquivo = $MaterialEnsinoArquivo;
            }
        }//Fim do Metodo setMaterialEnsinoArquivo()

        //Metodo setUsuarioId()
        public function setUsuarioId($UsuarioId){
            if(is_int($UsuarioId)){
                $this->UsuarioId = $UsuarioId;
            }
        }//Fim do Metodo setUsuarioId()

        //Metodo setTurmaId()
        public function setTurmaId($TurmaId){
            if(is_int($TurmaId)){
                $this->TurmaId = $TurmaId;
            }
        }//Fim do Metodo setTurmaId()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getMaterialEnsinoId()
        public function getMaterialEnsinoId(){
            return $this->MaterialEnsinoId;
        }//Fim do Metodo getMaterialEnsinoId()

        //Metodo getMaterialEnsinoDisciplina()
        public function getMaterialEnsinoDisciplina(){
            return $this->MaterialEnsinoDisciplina;
        }//Fim do Metodo getMaterialEnsinoDisciplina()

        //Metodo getMaterialEnsinoTipo()
        public function getMaterialEnsinoTipo(){
            return $this->MaterialEnsinoTipo;
        }//Fim do Metodo getMaterialEnsinoTipo()

        //Metodo getMaterialEnsinoArquivo()
        public function getMaterialEnsinoArquivo(){
            return $this->MaterialEnsinoArquivo;
        }//Fim do Metodo getMaterialEnsinoArquivo()

        //Metodo getUsuarioId()
        public function getUsuarioId(){
            return $this->UsuarioId;
        }//Fim do Metodo getUsuarioId()

        //Metodo getTurmaId()
        public function getTurmaId(){
            return $this->TurmaId;
        }//Fim do Metodo getTurmaId()

        //Fim dos Metodos Get's
    }//Fim da Classe MaterialEnsino
?>