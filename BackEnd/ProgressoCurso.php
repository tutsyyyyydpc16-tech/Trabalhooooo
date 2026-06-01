<?php
    //Classe ProgressoCurso
    class ProgressoCurso {
        //Atributos
        private $IdProgressoCurso; //Chave Primária //set gerado automaticamente pelo banco de dados
        private $ProgressoPorcentagem;
        private $DataUltimoAcesso;
        private $ProgressoStatus;
        private $UsuarioId; //Chave Estrangeira
        private $IdCurso; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($ProgressoPorcentagem, $DataUltimoAcesso, $ProgressoStatus, $UsuarioId, $IdCurso){
            $this->setProgressoPorcentagem($ProgressoPorcentagem);
            $this->setDataUltimoAcesso($DataUltimoAcesso);
            $this->setProgressoStatus($ProgressoStatus);
            $this->setUsuarioId($UsuarioId);
            $this->setIdCurso($IdCurso);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setProgressoPorcentagem()
        public function setProgressoPorcentagem($ProgressoPorcentagem){
            if(is_float($ProgressoPorcentagem) || is_int($ProgressoPorcentagem)){
                if ($ProgressoPorcentagem >= 0 && $ProgressoPorcentagem <= 100) {
                    $this->ProgressoPorcentagem = $ProgressoPorcentagem;
                }
            }
        }//Fim do Metodo setProgressoPorcentagem()

        //Metodo setDataUltimoAcesso()
        public function setDataUltimoAcesso($DataUltimoAcesso){
            if(is_string($DataUltimoAcesso)){
                $this->DataUltimoAcesso = $DataUltimoAcesso;
            }
        }//Fim do Metodo setDataUltimoAcesso()

        //Metodo setProgressoStatus()
        public function setProgressoStatus($ProgressoStatus){
            if(is_string($ProgressoStatus)){
                $this->ProgressoStatus = $ProgressoStatus;
            }
        }//Fim do Metodo setProgressoStatus()

        //Metodo setUsuarioId()
        public function setUsuarioId($UsuarioId){
            if(is_int($UsuarioId)){
                $this->UsuarioId = $UsuarioId;
            }
        }//Fim do Metodo setUsuarioId()

        //Metodo setIdCurso()
        public function setIdCurso($IdCurso){
            if(is_int($IdCurso)){
                $this->IdCurso = $IdCurso;
            }
        }//Fim do Metodo setIdCurso()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdProgressoCurso()
        public function getIdProgressoCurso(){
            return $this->IdProgressoCurso;
        }//Fim do Metodo getIdProgressoCurso()

        //Metodo getProgressoPorcentagem()
        public function getProgressoPorcentagem(){
            return $this->ProgressoPorcentagem;
        }//Fim do Metodo getProgressoPorcentagem()

        //Metodo getDataUltimoAcesso()
        public function getDataUltimoAcesso(){
            return $this->DataUltimoAcesso;
        }//Fim do Metodo getDataUltimoAcesso()

        //Metodo getProgressoStatus()
        public function getProgressoStatus(){
            return $this->ProgressoStatus;
        }//Fim do Metodo getProgressoStatus()

        //Metodo getUsuarioId()
        public function getUsuarioId(){
            return $this->UsuarioId;
        }//Fim do Metodo getUsuarioId()

        //Metodo getIdCurso()
        public function getIdCurso(){
            return $this->IdCurso;
        }//Fim do Metodo getIdCurso()

        //Fim dos Metodos Get's
    }//Fim da Classe ProgressoCurso
?>