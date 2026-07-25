<?php
    //Classe ProgressoCurso
    class ProgressoCurso {
        //Atributos
        private ?int $idProgressoCurso = null; //Chave Primária //set gerado automaticamente pelo banco de dados
        private float $progressoPorcentagem;
        private string $dataUltimoAcesso;
        private string $progressoStatus;
        private Usuario $usuario;
        private Curso $curso;
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct(float $progressoPorcentagem, string $dataUltimoAcesso, string $progressoStatus, Usuario $usuario, Curso $curso){
            $this->setProgressoPorcentagem($progressoPorcentagem);
            $this->setDataUltimoAcesso($dataUltimoAcesso);
            $this->setProgressoStatus($progressoStatus);
            $this->setUsuario($usuario);
            $this->setCurso($curso);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setProgressoPorcentagem()
        public function setProgressoPorcentagem(float $progressoPorcentagem): void {
            if ($progressoPorcentagem >= 0 && $progressoPorcentagem <= 100) {
                    $this->progressoPorcentagem = $progressoPorcentagem;
            }
        }//Fim do Metodo setProgressoPorcentagem()

        //Metodo setDataUltimoAcesso()
        public function setDataUltimoAcesso(string $dataUltimoAcesso): void{
            $this->dataUltimoAcesso = $dataUltimoAcesso;
        }//Fim do Metodo setDataUltimoAcesso()

        //Metodo setProgressoStatus()
        public function setProgressoStatus(string $progressoStatus): void {
                $this->progressoStatus = $progressoStatus;
        }//Fim do Metodo setProgressoStatus()

        //Metodo setUsuario()
        public function setUsuario(Usuario $usuario): void {
            $this->usuario = $usuario;
        }//Fim do Metodo setUsuario()

        //Metodo setCurso()
        public function setCurso(Curso $curso): void{
            $this->curso = $curso;
        }//Fim do Metodo setIdCurso()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdProgressoCurso()
        public function getIdProgressoCurso(): ?int {
            return $this->idProgressoCurso;
        }//Fim do Metodo getIdProgressoCurso()

        //Metodo getProgressoPorcentagem()
        public function getProgressoPorcentagem(): float {
            return $this->progressoPorcentagem;
        }//Fim do Metodo getProgressoPorcentagem()

        //Metodo getDataUltimoAcesso()
        public function getDataUltimoAcesso(): string {
            return $this->dataUltimoAcesso;
        }//Fim do Metodo getDataUltimoAcesso()

        //Metodo getProgressoStatus()
        public function getProgressoStatus(): string {
            return $this->progressoStatus;
        }//Fim do Metodo getProgressoStatus()

        //Metodo getUsuario()
        public function getUsuario(): Usuario {
            return $this->usuario;
        }//Fim do Metodo getUsuario()

        //Metodo getIdCurso()
        public function getCurso(): Curso {
            return $this->curso;
        }//Fim do Metodo getIdCurso()

        //Fim dos Metodos Get's
    }//Fim da Classe ProgressoCurso
?>