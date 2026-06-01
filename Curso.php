<?php
    //Clase Curso
    class Curso{
        //Atributos
        private $IdCurso; //Chave Primária //set gerado automaticamente pelo banco de dados
        private $TituloCurso;
        private $DescricaoCurso;
        private $CategoriaCurso;
        private $NivelCurso;
        private $IdiomaCurso;
        private $CargaHorariaCurso;
        private $CapaCurso;
        private $BannerCurso;
        private $NotaMediaCurso;
        private $DataPublicacaoCurso;
        private $StatusCurso;
        private $QuantidadeAvaliacoesCurso;
        private $IdUsuario; //Chave Estrangeira
        private $PrecoCurso;
        private $IdModuloCurso; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($TituloCurso, $DescricaoCurso, $CategoriaCurso, $NivelCurso,
         $IdiomaCurso, $CargaHorariaCurso, $CapaCurso, $BannerCurso, $NotaMediaCurso, $DataPublicacaoCurso,
          $StatusCurso, $QuantidadeAvaliacoesCurso, $IdUsuario, $PrecoCurso, $IdModuloCurso){
            $this->setTituloCurso($TituloCurso);
            $this->setDescricaoCurso($DescricaoCurso);
            $this->setCategoriaCurso($CategoriaCurso);
            $this->setNivelCurso($NivelCurso);
            $this->setIdiomaCurso($IdiomaCurso);
            $this->setCargaHorariaCurso($CargaHorariaCurso);
            $this->setCapaCurso($CapaCurso);
            $this->setBannerCurso($BannerCurso);
            $this->setNotaMediaCurso($NotaMediaCurso);
            $this->setDataPublicacaoCurso($DataPublicacaoCurso);
            $this->setStatusCurso($StatusCurso);
            $this->setQuantidadeAvaliacoesCurso($QuantidadeAvaliacoesCurso);
            $this->setIdUsuario($IdUsuario);
            $this->setPrecoCurso($PrecoCurso);
            $this->setIdModuloCurso($IdModuloCurso);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTituloCurso()
        public function setTituloCurso($TituloCurso){
            if(is_string($TituloCurso)){
                $this->TituloCurso = $TituloCurso;
            }
        }//Fim do Metodo setTituloCurso()

        //Metodo setDescricaoCurso()
        public function setDescricaoCurso($DescricaoCurso){
            if(is_string($DescricaoCurso)){
                $this->DescricaoCurso = $DescricaoCurso;
            }
        }//Fim do Metodo setDescricaoCurso()

        //Metodo setCategoriaCurso()
        public function setCategoriaCurso($CategoriaCurso){
            if(is_string($CategoriaCurso)){
                $this->CategoriaCurso = $CategoriaCurso;
            }
        }//Fim do Metodo setCategoriaCurso()

        //Metodo setNivelCurso()
        public function setNivelCurso($NivelCurso){
            if(is_string($NivelCurso)){
                $this->NivelCurso = $NivelCurso;
            }
        }//Fim do Metodo setNivelCurso()

        //Metodo setIdiomaCurso()
        public function setIdiomaCurso($IdiomaCurso){
            if(is_string($IdiomaCurso)){
                $this->IdiomaCurso = $IdiomaCurso;
            }
        }//Fim do Metodo setIdiomaCurso()

        //Metodo setCargaHorariaCurso()
        public function setCargaHorariaCurso($CargaHorariaCurso){
            if(is_int($CargaHorariaCurso)){
                $this->CargaHorariaCurso = $CargaHorariaCurso;
            }
        }//Fim do Metodo setCargaHorariaCurso()

        //Metodo setCapaCurso()
        public function setCapaCurso($CapaCurso){
            if(is_string($CapaCurso)){
                $this->CapaCurso = $CapaCurso;
            }
        }//Fim do Metodo setCapaCurso()

        //Metodo setBannerCurso()
        public function setBannerCurso($BannerCurso){
            if(is_string($BannerCurso)){
                $this->BannerCurso = $BannerCurso;
            }
        }//Fim do Metodo setBannerCurso()

        //Metodo setNotaMediaCurso()
        public function setNotaMediaCurso($NotaMediaCurso){
            if(is_float($NotaMediaCurso) || is_int($NotaMediaCurso)){
                $this->NotaMediaCurso = $NotaMediaCurso;
            }
        }//Fim do Metodo setNotaMediaCurso()

        //Metodo setDataPublicacaoCurso()
        public function setDataPublicacaoCurso($DataPublicacaoCurso){
            if(is_string($DataPublicacaoCurso)){
                $this->DataPublicacaoCurso = $DataPublicacaoCurso;
            }
        }//Fim do Metodo setDataPublicacaoCurso()

        //Metodo setStatusCurso()
        public function setStatusCurso($StatusCurso){
            if(is_string($StatusCurso)){
                $this->StatusCurso = $StatusCurso;
            }
        }//Fim do Metodo setStatusCurso()

        //Metodo setQuantidadeAvaliacoesCurso()
        public function setQuantidadeAvaliacoesCurso($QuantidadeAvaliacoesCurso){
            if(is_int($QuantidadeAvaliacoesCurso)){
                $this->QuantidadeAvaliacoesCurso = $QuantidadeAvaliacoesCurso;
            }
        }//Fim do Metodo setQuantidadeAvaliacoesCurso()

        //Metodo setIdUsuario()
        public function setIdUsuario($IdUsuario){
            if(is_int($IdUsuario)){
                $this->IdUsuario = $IdUsuario;
            }
        }//Fim do Metodo setIdUsuario()

        //Metodo setPrecoCurso()
        public function setPrecoCurso($PrecoCurso){
            if(is_float($PrecoCurso) || is_int($PrecoCurso)){
                $this->PrecoCurso = $PrecoCurso;
            }
        }//Fim do Metodo setPrecoCurso()

        //Metodo setIdModuloCurso()
        public function setIdModuloCurso($IdModuloCurso){
            if(is_int($IdModuloCurso)){
                $this->IdModuloCurso = $IdModuloCurso;
            }
        }//Fim do Metodo setIdModuloCurso()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getIdCurso()
        public function getIdCurso(){
            return $this->IdCurso;
        }//Fim do Metodo getIdCurso()

        //Metodo getTituloCurso()
        public function getTituloCurso(){
            return $this->TituloCurso;
        }//Fim do Metodo getTituloCurso()

        //Metodo getDescricaoCurso()
        public function getDescricaoCurso(){
            return $this->DescricaoCurso;
        }//Fim do Metodo getDescricaoCurso()

        //Metodo getCategoriaCurso()
        public function getCategoriaCurso(){
            return $this->CategoriaCurso;
        }//Fim do Metodo getCategoriaCurso()

        //Metodo getNivelCurso()
        public function getNivelCurso(){
            return $this->NivelCurso;
        }//Fim do Metodo getNivelCurso()

        //Metodo getIdiomaCurso()
        public function getIdiomaCurso(){
            return $this->IdiomaCurso;
        }//Fim do Metodo getIdiomaCurso()

        //Metodo getCargaHorariaCurso()
        public function getCargaHorariaCurso(){
            return $this->CargaHorariaCurso;
        }//Fim do Metodo getCargaHorariaCurso()

        //Metodo getCapaCurso()
        public function getCapaCurso(){
            return $this->CapaCurso;
        }//Fim do Metodo getCapaCurso()

        //Metodo getBannerCurso()
        public function getBannerCurso(){
            return $this->BannerCurso;
        }//Fim do Metodo getBannerCurso()

        //Metodo getNotaMediaCurso()
        public function getNotaMediaCurso(){
            return $this->NotaMediaCurso;
        }//Fim do Metodo getNotaMediaCurso()

        //Metodo getDataPublicacaoCurso()
        public function getDataPublicacaoCurso(){
            return $this->DataPublicacaoCurso;
        }//Fim do Metodo getDataPublicacaoCurso()

        //Metodo getStatusCurso()
        public function getStatusCurso(){
            return $this->StatusCurso;
        }//Fim do Metodo getStatusCurso()

        //Metodo getQuantidadeAvaliacoesCurso()
        public function getQuantidadeAvaliacoesCurso(){
            return $this->QuantidadeAvaliacoesCurso;
        }//Fim do Metodo getQuantidadeAvaliacoesCurso()

        //Metodo getIdUsuario()
        public function getIdUsuario(){
            return $this->IdUsuario;
        }//Fim do Metodo getIdUsuario()

        //Metodo getPrecoCurso()
        public function getPrecoCurso(){
            return $this->PrecoCurso;
        }//Fim do Metodo getPrecoCurso()

        //Metodo getIdModuloCurso()
        public function getIdModuloCurso(){
            return $this->IdModuloCurso;
        }//Fim do Metodo getIdModuloCurso()

        //Fim dos Metodos Get's
    }//Fim da classe Curso
?>