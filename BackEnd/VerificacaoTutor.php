<?php
    //Classe VerificacaoTutor
    class VerificacaoTutor{

        //Atributos
        private ?int $idVerificacao = null; //Chave Primária //sey gerado automaticamente pelo Banco de Dados
        private string $dataVerificacao;
        private string $documentos;
        private string $tipoVerificacao;
        private string $aprovador;
        private Tutor $tutor;

        //Metodo Construtor
        public function __construct(string $dataVerificacao, string $documentos, string $tipoVerificacao, string $aprovador, Tutor $tutor){
            $this->setDataVerificacao($dataVerificacao);
            $this->setDocumentos($documentos);
            $this->setTipoVerificacao($tipoVerificacao);
            $this->setAprovador($aprovador);
            $this->setTutor($tutor);
        }//Fim do Metodo Construtor

        //Metodo setDataVerificacao()
        public function setDataVerificacao(string $dataVerificacao): void {
            $this->dataVerificacao = $dataVerificacao;
        }//Fim do Metodo setDataVerificacao()

        //Metodo setDocumentos()
        public function setDocumentos(string $documentos): void{
            $this->documentos = $documentos;
        }//Fim do Metodo setDocumentos()

        //Metodo setTipoVerificacao()
        public function setTipoVerificacao(string $tipoVerificacao): void {
            $this->tipoVerificacao = $tipoVerificacao;
        }//Fim do Metodo setTipoVerificacao()

        //Metodo setAprovador()
        public function setAprovador(string $aprovador): void {
            $this->aprovador = $aprovador;
        }//Fim do Metodo setAprovador()

        //Metodo setTutor()
        public function setTutor(Tutor $tutor): void {
            $this->tutor = $tutor;
        }//Fim do Metodo setTutor()

        //Metodo getIdVerificacao()
        public function getIdVerificacao(): ?int{
            return $this->idVerificacao;
        }//Fim do Metodo getIdVerificacao

        //Metodo getDataVerificacao()
        public function getDataVerificacao(): string {
            return $this->dataVerificacao;
        }//Fim do Metodo getDataVerificacao()

        //Metodo getDocumentos()
        public function getDocumentos(): string {
            return $this->documentos;
        }//Fim do Metodo getDocumentos()

        //Metodo getTipoVerificacao()
        public function getTipoVerificacao(): string {
            return $this->tipoVerificacao;
        }//Fim do Metodo getTipoVerificacao()

        //Metodo getAprovador()
        public function getAprovador(): string {
            return $this->aprovador;
        }//Fim do Metodo getAprovador()

        //Metodo getTutor()
        public function getTutor(): Tutor{
            return $this->tutor;
        }//Fim do Metodo getTutor()

    }//Fim da Classe VerificacaoTutor
?>
