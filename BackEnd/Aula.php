<?php
    //Classe Aula
    class Aula{
        //Atributos
        private ?int $idAula = null; //Chave Primária //set gerado automaticamente pelo banco de dados
        private string $tituloAula;
        private ?string $descricaoAula = null;
        private string $tipoConteudoAula;
        private string $duracaoAula;
        private string $ordemAula;
        private Modulo $modulo; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct(string $tituloAula, ?string $descricaoAula, string $tipoConteudoAula, string $duracaoAula, string $ordemAula, Modulo $modulo){
            $this->setTituloAula($tituloAula);
            $this->setDescricaoAula($descricaoAula);
            $this->setTipoConteudoAula($tipoConteudoAula);
            $this->setDuracaoAula($duracaoAula);
            $this->setOrdemAula($ordemAula);
            $this->setModulo($modulo);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTituloAula()
        public function setTituloAula(string $tituloAula): void {
            $this->tituloAula = $tituloAula;
        }//Fim do Metodo setTituloAula()

        //Metodo setDescricaoAula()
        public function setDescricaoAula(?string $descricaoAula): void {
            $this->descricaoAula = $descricaoAula;
        }//Fim do Metodo setDescricaoAula()

        //Metodo setTipoConteudoAula()
        public function setTipoConteudoAula(string $tipoConteudoAula): void {
            $this->tipoConteudoAula = $tipoConteudoAula;
        }//Fim do Metodo setTipoConteudoAula()

        //Metodo setDuracaoAula()
        public function setDuracaoAula(string $duracaoAula): void {
            $this->duracaoAula = $duracaoAula;
        }//Fim do Metodo setDuracaoAula()

        //Metodo setOrdemAula()
        public function setOrdemAula(string $ordemAula): void {
            $this->ordemAula = $ordemAula;
        }//Fim do Metodo setOrdemAula()

        //Metodo setModulo()
        public function setModulo(Modulo $modulo): void{
            $this->modulo = $modulo;
        }//Fim do Metodo setModulo()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdAula()
        public function getIdAula(): ?int{
            return $this->idAula;
        }//Fim do Metodo getIdAula()

        //Metodo getTituloAula()
        public function getTituloAula(): string {
            return $this->tituloAula;
        }//Fim do Metodo getTituloAula()

        //Metodo getDescricaoAula()
        public function getDescricaoAula(): ?string {
            return $this->descricaoAula;
        }//Fim do Metodo getDescricaoAula()

        //Metodo getTipoConteudoAula()
        public function getTipoConteudoAula(): string {
            return $this->tipoConteudoAula;
        }//Fim do Metodo getTipoConteudoAula()

        //Metodo getDuracaoAula()
        public function getDuracaoAula(): string {
            return $this->duracaoAula;
        }//Fim do Metodo getDuracaoAula()

        //Metodo getOrdemAula()
        public function getOrdemAula(): string {
            return $this->ordemAula;
        }//Fim do Metodo getOrdemAula()

        //Metodo getModulo()
        public function getModulo(): Modulo {
            return $this->modulo;
        }//Fim do Metodo getModulo()

        //Fim dos Metodos Get's
    }//Fim da Classe Aula
?>