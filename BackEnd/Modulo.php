<?php
    //Classe Modulo
    class Modulo {
        //Atributos
        private ?int $idModulo = null; //Chave Primária //set gerado automaticamente pelo banco de dados
        private string $tituloModulo;
        private ?string $descricaoModulo = null;
        private string $ordemModulo;
        private Curso $curso;
        private array $aulas = []; //Composição
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct(string $tituloModulo, ?string $descricaoModulo, string $ordemModulo, Curso $curso){
            $this->setTituloModulo($tituloModulo);
            $this->setDescricaoModulo($descricaoModulo);
            $this->setOrdemModulo($ordemModulo);
            $this->setCurso($curso);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTituloModulo()
        public function setTituloModulo(string $tituloModulo): void {
            $this->tituloModulo = $tituloModulo;
        }//Fim do Metodo setTituloModulo()

        //Metodo setDescricaoModulo()
        public function setDescricaoModulo(?string $descricaoModulo): void{
            $this->descricaoModulo = $descricaoModulo;
        }//Fim do Metodo setDescricaoModulo()

        //Metodo setOrdemModulo()
        public function setOrdemModulo(string $ordemModulo){
            $this->ordemModulo = $ordemModulo;
        }//Fim do Metodo setOrdemModulo()

        //Metodo setCurso()
        public function setCurso(Curso $curso): void {
            $this->curso = $curso;
        }//Fim do Metodo setCurso()

        //Fim dos Metodos Set's

        //Metodo addAula
        public function addAula(Aula $aula): void {
            $this->aulas[] = $aula;
        }//Fim do metodo addAula

        //Metodos Get's

        //Metodo getIdModulo()
        public function getIdModulo(): ?int{
            return $this->idModulo;
        }//Fim do Metodo getIdModulo()

        //Metodo getTituloModulo()
        public function getTituloModulo(): string {
            return $this->tituloModulo;
        }//Fim do Metodo getTituloModulo()

        //Metodo getDescricaoModulo()
        public function getDescricaoModulo(): ?string {
            return $this->descricaoModulo;
        }//Fim do Metodo getDescricaoModulo()

        //Metodo getOrdemModulo()
        public function getOrdemModulo(): string {
            return $this->ordemModulo;
        }//Fim do Metodo getOrdemModulo()

        //Metodo getCurso()
        public function getCurso(): Curso {
            return $this->curso;
        }//Fim do Metodo getCurso()

        public function getAulas(): array {
            return $this->aulas;
        }

        //Fim dos Metodos Get's

    }//Fim da Classe Modulo
?>