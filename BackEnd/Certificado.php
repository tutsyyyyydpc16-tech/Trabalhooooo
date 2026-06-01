<?php
    //Classe Certificado
    class Certificado {
        //Atributos
        private $IdCertificado; //Chave Primária //set gerado automaticamente pelo banco de dados
        private $CodigoValidacao;
        private $DataEmissao;
        private $CertificadoStatus;
        private $IdUsuario; //Chave Estrangeira
        private $IdCurso; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($CodigoValidacao, $DataEmissao, $CertificadoStatus, $IdUsuario, $IdCurso){
            $this->setCodigoValidacao($CodigoValidacao);
            $this->setDataEmissao($DataEmissao);
            $this->setCertificadoStatus($CertificadoStatus);
            $this->setIdUsuario($IdUsuario);
            $this->setIdCurso($IdCurso);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setCodigoValidacao()
        public function setCodigoValidacao($CodigoValidacao){
            if(is_string($CodigoValidacao)){
                $this->CodigoValidacao = $CodigoValidacao;
            }
        }//Fim do Metodo setCodigoValidacao()

        //Metodo setDataEmissao()
        public function setDataEmissao($DataEmissao){
            if(is_string($DataEmissao)){
                $this->DataEmissao = $DataEmissao;
            }
        }//Fim do Metodo setDataEmissao()

        //Metodo setCertificadoStatus()
        public function setCertificadoStatus($CertificadoStatus){
            if(is_string($CertificadoStatus)){
                $this->CertificadoStatus = $CertificadoStatus;
            }
        }//Fim do Metodo setCertificadoStatus()

        //Metodo setIdUsuario()
        public function setIdUsuario($IdUsuario){
            if(is_int($IdUsuario)){
                $this->IdUsuario = $IdUsuario;
            }
        }//Fim do Metodo setIdUsuario()

        //Metodo setIdCurso()
        public function setIdCurso($IdCurso){
            if(is_int($IdCurso)){
                $this->IdCurso = $IdCurso;
            }
        }//Fim do Metodo setIdCurso()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdCertificado()
        public function getIdCertificado(){
            return $this->IdCertificado;
        }//Fim do Metodo getIdCertificado()

        //Metodo getCodigoValidacao()
        public function getCodigoValidacao(){
            return $this->CodigoValidacao;
        }//Fim do Metodo getCodigoValidacao()

        //Metodo getDataEmissao()
        public function getDataEmissao(){
            return $this->DataEmissao;
        }//Fim do Metodo getDataEmissao()

        //Metodo getCertificadoStatus()
        public function getCertificadoStatus(){
            return $this->CertificadoStatus;
        }//Fim do Metodo getCertificadoStatus()

        //Metodo getIdUsuario()
        public function getIdUsuario(){
            return $this->IdUsuario;
        }//Fim do Metodo getIdUsuario()

        //Metodo getIdCurso()
        public function getIdCurso(){
            return $this->IdCurso;
        }//Fim do Metodo getIdCurso()

        //Fim dos Metodos Get's
    }//Fim da Classe Certificado
?>