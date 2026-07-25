<?php
    //Clase Curso
    class Curso{
        //Atributos
        protected ?int $idCurso = null; //Chave Primária //set gerado automaticamente pelo banco de dados
        protected string $tituloCurso;
        protected ?string $descricaoCurso = null;
        protected string $categoriaCurso;
        protected int $nivelCurso;
        protected string $idiomaCurso;
        protected string $cargaHorariaCurso;
        protected float $notaMediaCurso;
        protected string $dataPublicacaoCurso;
        protected string $statusCurso;
        protected ?int $quantidadeAvaliacoesCurso = null;
        protected float $precoCurso;
        protected ?Usuario $usuario = null; //Associação
        protected array $modulos = []; //Agregação
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct(string $tituloCurso, ?string $descricaoCurso, string $categoriaCurso, int $nivelCurso,
                                    string $idiomaCurso, string $cargaHorariaCurso, float $notaMediaCurso, string $dataPublicacaoCurso,
                                    string $statusCurso, ?string $quantidadeAvaliacoesCurso, float $precoCurso, ?Usuario $usuario){
            $this->setTituloCurso($tituloCurso);
            $this->setDescricaoCurso($descricaoCurso);
            $this->setCategoriaCurso($categoriaCurso);
            $this->setNivelCurso($nivelCurso);
            $this->setIdiomaCurso($idiomaCurso);
            $this->setCargaHorariaCurso($cargaHorariaCurso);
            $this->setNotaMediaCurso($notaMediaCurso);
            $this->setDataPublicacaoCurso($dataPublicacaoCurso);
            $this->setStatusCurso($statusCurso);
            $this->setQuantidadeAvaliacoesCurso($quantidadeAvaliacoesCurso);
            $this->setPrecoCurso($precoCurso);
            $this->setUsuario($usuario);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTituloCurso()
        public function setTituloCurso(string $tituloCurso): void {
            $this->tituloCurso = $tituloCurso;
        }//Fim do Metodo setTituloCurso()

        //Metodo setDescricaoCurso()
        public function setDescricaoCurso(?string $descricaoCurso): void{
            $this->descricaoCurso = $descricaoCurso;
        }//Fim do Metodo setDescricaoCurso()

        //Metodo setCategoriaCurso()
        public function setCategoriaCurso(string $categoriaCurso): void {
            $this->categoriaCurso = $categoriaCurso;
        }//Fim do Metodo setCategoriaCurso()

        //Metodo setNivelCurso()
        public function setNivelCurso(int $nivelCurso): void {
            $this->nivelCurso = $nivelCurso;
        }//Fim do Metodo setNivelCurso()

        //Metodo setIdiomaCurso()
        public function setIdiomaCurso(string $idiomaCurso): void {
            $this->idiomaCurso = $idiomaCurso;
        }//Fim do Metodo setIdiomaCurso()

        //Metodo setCargaHorariaCurso()
        public function setCargaHorariaCurso(string $cargaHorariaCurso): void {
            $this->cargaHorariaCurso = $cargaHorariaCurso;
        }//Fim do Metodo setCargaHorariaCurso()

        //Metodo setNotaMediaCurso()
        public function setNotaMediaCurso(float $notaMediaCurso): void {
            $this->notaMediaCurso = $notaMediaCurso;
        }//Fim do Metodo setNotaMediaCurso()

        //Metodo setDataPublicacaoCurso()
        public function setDataPublicacaoCurso(string $dataPublicacaoCurso): void{
            $this->dataPublicacaoCurso = $dataPublicacaoCurso;
        }//Fim do Metodo setDataPublicacaoCurso()

        //Metodo setStatusCurso()
        public function setStatusCurso(string $statusCurso): void {
            $this->statusCurso = $statusCurso;
        }//Fim do Metodo setStatusCurso()

        //Metodo setQuantidadeAvaliacoesCurso()
        public function setQuantidadeAvaliacoesCurso(?int $quantidadeAvaliacoesCurso): void {
            $this->quantidadeAvaliacoesCurso = $quantidadeAvaliacoesCurso;
        }//Fim do Metodo setQuantidadeAvaliacoesCurso()

        //Metodo setPrecoCurso()
        public function setPrecoCurso(float $precoCurso): void {
            $this->precoCurso = $precoCurso;
        }//Fim do Metodo setPrecoCurso()

        //Metodo setUsuario()
        public function setUsuario(?Usuario $usuario): void{
            $this->usuario = $usuario;
        }//Fim do Metodo setUsuario()

        //Fim dos Metodos Set's

        //Metodo addModulo()
        public function addModulo(Modulo $modulo): void {
            $this->modulos[] = $modulo;
        }//Fim do Metodo addModulos()

        //Metodos Get's

        //Metodo getIdCurso()
        public function getIdCurso(): ?int {
            return $this->idCurso;
        }//Fim do Metodo getIdCurso()

        //Metodo getTituloCurso()
        public function getTituloCurso(): string {
            return $this->tituloCurso;
        }//Fim do Metodo getTituloCurso()

        //Metodo getDescricaoCurso()
        public function getDescricaoCurso(): ?string {
            return $this->descricaoCurso;
        }//Fim do Metodo getDescricaoCurso()

        //Metodo getCategoriaCurso()
        public function getCategoriaCurso(): string {
            return $this->categoriaCurso;
        }//Fim do Metodo getCategoriaCurso()

        //Metodo getNivelCurso()
        public function getNivelCurso(): int {
            return $this->nivelCurso;
        }//Fim do Metodo getNivelCurso()

        //Metodo getIdiomaCurso()
        public function getIdiomaCurso(): string {
            return $this->idiomaCurso;
        }//Fim do Metodo getIdiomaCurso()

        //Metodo getCargaHorariaCurso()
        public function getCargaHorariaCurso(): string {
            return $this->cargaHorariaCurso;
        }//Fim do Metodo getCargaHorariaCurso()

        //Metodo getNotaMediaCurso()
        public function getNotaMediaCurso(): float {
            return $this->notaMediaCurso;
        }//Fim do Metodo getNotaMediaCurso()

        //Metodo getDataPublicacaoCurso()
        public function getDataPublicacaoCurso(): string {
            return $this->dataPublicacaoCurso;
        }//Fim do Metodo getDataPublicacaoCurso()

        //Metodo getStatusCurso()
        public function getStatusCurso(): string {
            return $this->statusCurso;
        }//Fim do Metodo getStatusCurso()

        //Metodo getQuantidadeAvaliacoesCurso()
        public function getQuantidadeAvaliacoesCurso(): ?int {
            return $this->quantidadeAvaliacoesCurso;
        }//Fim do Metodo getQuantidadeAvaliacoesCurso()

        //Metodo getPrecoCurso()
        public function getPrecoCurso(): float {
            return $this->precoCurso;
        }//Fim do Metodo getPrecoCurso()

        //Metodo getUsuario()
        public function getUsuario(): ?Usuario {
            return $this->usuario;
        }//Fim do Metodo getUsuario()

        //Metodo getModulos()
        public function getModulos(): array {
            return $this->modulos;
        }//Fim do Metodo getModulos()

        //Fim dos Metodos Get's
    }//Fim da classe Curso
?>