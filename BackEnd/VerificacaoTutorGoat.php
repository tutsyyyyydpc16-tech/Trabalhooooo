<?php
    //classe verificacaorutor que e o goat
    class VerificacaoTutorGoat{

        //Atributos
        private $IdVerificacao //Chave Primária //sey gerado automaticamente pelo Banco de Dados
        private $data_verificacao;
        private $documentos;
        private $tipo_verificacao;
        private $aprovador;
        private $id_usuario;

        //Metodo Construtor
        public function __construct($data_verificacao, $documentos, $tipo_verificacao, $aprovador, $id_usuario){
            $this->setDataVerificacao($data_verificacao);
            $this->setDocumentos($documentos);
            $this->setTipoVerificacao($tipo_verificacao);
            $this->setAprovador($aprovador);
            $this->setIdUsuario($id_usuario);
        }//Fim do Metodo Construtor

        //Metodo setDataVerificacao()
        public function setDataVerificacao($data_verificacao){
            $this->data_verificacao = $data_verificacao;
        }//Fim do Metodo setDataVerificacao()

        //Metodo setDocumentos()
        public function setDocumentos($documentos){
            $this->documentos = $documentos;
        }//Fim do Metodo setDocumentos()

        //Metodo setTipoVerificacao()
        public function setTipoVerificacao($tipo_verificacao){
            $this->tipo_verificacao = $tipo_verificacao;
        }//Fim do Metodo setTipoVerificacao()

        //Metodo setAprovador()
        public function setAprovador($aprovador){
            $this->aprovador = $aprovador;
        }//Fim do Metodo setAprovador()

        //Metodo setIdUsuario()
        public function setIdUsuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }//Fim do Metodo setIdUsuario()

        //Metodo getIdVerificacao()
        public function getIdVerificacao(){
            return $this->IdVerificacao;
        }//Fim do Metodo getOdVerificacao

        //Metodo getDataVerificacao()
        public function getDataVerificacao(){
            return $this->data_verificacao;
        }//Fim do Metodo getDataVerificacao()

        //Metodo getDocumentos()
        public function getDocumentos(){
            return $this->documentos;
        }//Fim do Metodo getDocumentos()

        //Metodo getTipoVerificacao()
        public function getTipoVerificacao(){
            return $this->tipo_verificacao;
        }//Fim do Metodo getTipoVerificacao()

        //Metodo getAprovador()
        public function getAprovador(){
            return $this->aprovador;
        }//Fim do Metodo getAprovador()

        //Metodo getIdUsuario()
        public function getIdUsuario(){
            return $this->id_usuario;
        }//Fim do Metodo getIdUsuario()

    }//fim da classe verificacaotutor
?>
