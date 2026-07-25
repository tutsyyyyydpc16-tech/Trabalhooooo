<?php
    //Classe Certificado
    class Certificado {
        //Atributos
        private ?int $idCertificado = null; //Chave Primária //set gerado automaticamente pelo banco de dados
        private string $codigoValidacao;
        private string $dataEmissao;
        private string $certificadoStatus;
        private Usuario $usuario;
        private Curso $curso;
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct(string $codigoValidacao, string $dataEmissao, string $certificadoStatus, Usuario $usuario, Curso $curso){
            $this->setCodigoValidacao($codigoValidacao);
            $this->setDataEmissao($dataEmissao);
            $this->setCertificadoStatus($certificadoStatus);
            $this->setUsuario($usuario);
            $this->setCurso($curso);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setCodigoValidacao()
        public function setCodigoValidacao(string $codigoValidacao): void {
            $this->codigoValidacao = $codigoValidacao;
        }//Fim do Metodo setCodigoValidacao()

        //Metodo setDataEmissao()
        public function setDataEmissao(string $dataEmissao): void {
            $this->dataEmissao = $dataEmissao;
        }//Fim do Metodo setDataEmissao()

        //Metodo setCertificadoStatus()
        public function setCertificadoStatus(string $certificadoStatus): void{
            $this->certificadoStatus = $certificadoStatus;
        }//Fim do Metodo setCertificadoStatus()

        //Metodo setUsuario()
        public function setUsuario(Usuario $usuario): void {
            $this->usuario = $usuario;
        }//Fim do Metodo setUsuario()

        //Metodo setIdCurso()
        public function setCurso(Curso $curso): void {
            $this->curso = $curso;
        }//Fim do Metodo setIdCurso()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdCertificado()
        public function getIdCertificado(): ?int {
            return $this->idCertificado;
        }//Fim do Metodo getidCertificado()

        //Metodo getCodigoValidacao()
        public function getCodigoValidacao(): string {
            return $this->codigoValidacao;
        }//Fim do Metodo getCodigoValidacao()

        //Metodo getDataEmissao()
        public function getDataEmissao(): string{
            return $this->dataEmissao;
        }//Fim do Metodo getDataEmissao()

        //Metodo getCertificadoStatus()
        public function getCertificadoStatus(): string {
            return $this->certificadoStatus;
        }//Fim do Metodo getCertificadoStatus()

        //Metodo getUsuario()
        public function getUsuario(): Usuario {
            return $this->usuario;
        }//Fim do Metodo getUsuario()

        //Metodo getCurso()
        public function getCurso(): Curso {
            return $this->curso;
        }//Fim do Metodo getCurso()

        //Fim dos Metodos Get's
    }//Fim da Classe Certificado
?>