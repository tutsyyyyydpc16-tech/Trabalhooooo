<?php
    //Classe Desempenho
    class DesempenhoTurma {
        //Atributos
        private $DesempenhoTurmaId; //Chave Primária
        private $DesempenhoTarefasEntregues;
        private $DesempenhoTarefasPendentes;
        private $DesempenhoTarefasExpiradas;
        private $DesempenhoMedia;
        private $DesempenhoNivel;
        private $TurmaId; //Chave Estrangeira
        //Fim dos atributos

        //Metodo Construtor
        public function __construct(
            $DesempenhoTarefasEntregues, $DesempenhoTarefasPendentes, $DesempenhoTarefasExpiradas, $DesempenhoMedia, $DesempenhoNivel, $TurmaId){
            $this->setDesempenhoTarefasEntregues($DesempenhoTarefasEntregues);
            $this->setDesempenhoTarefasPendentes($DesempenhoTarefasPendentes);
            $this->setDesempenhoTarefasExpiradas($DesempenhoTarefasExpiradas);
            $this->setDesempenhoMedia($DesempenhoMedia);
            $this->setDesempenhoNivel($DesempenhoNivel);
            $this->setTurmaId($TurmaId);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setDesempenhoTarefasEntregues()
        public function setDesempenhoTarefasEntregues($DesempenhoTarefasEntregues){
            if(is_int($DesempenhoTarefasEntregues)){
                $this->DesempenhoTarefasEntregues = $DesempenhoTarefasEntregues;
            }
        }//Fim do Metodo setDesempenhoTarefasEntregues()

        //Metodo setDesempenhoTarefasPendentes()
        public function setDesempenhoTarefasPendentes($DesempenhoTarefasPendentes){
            if(is_int($DesempenhoTarefasPendentes)){
                $this->DesempenhoTarefasPendentes = $DesempenhoTarefasPendentes;
            }
        }//Fim do Metodo setDesempenhoTarefasPendentes()

        //Metodo setDesempenhoTarefasExpiradas()
        public function setDesempenhoTarefasExpiradas($DesempenhoTarefasExpiradas){
            if(is_int($DesempenhoTarefasExpiradas)){
                $this->DesempenhoTarefasExpiradas = $DesempenhoTarefasExpiradas;
            }
        }//Fim do Metodo setDesempenhoTarefasExpiradas()

        //Metodo setDesempenhoMedia()
        public function setDesempenhoMedia($DesempenhoMedia){
            if(is_float($DesempenhoMedia) || is_int($DesempenhoMedia)){
                $this->DesempenhoMedia = $DesempenhoMedia;
            }
        }//Fim do Metodo setDesempenhoMedia()

        //Metodo setDesempenhoNivel()
        public function setDesempenhoNivel($DesempenhoNivel){
            if(is_string($DesempenhoNivel)){
                $this->DesempenhoNivel = $DesempenhoNivel;
            }
        }//Fim do Metodo setDesempenhoNivel()

        //Metodo setTurmaId()
        public function setTurmaId($TurmaId){
            if(is_int($TurmaId)){
                $this->TurmaId = $TurmaId;
            }
        }//Fim do Metodo setTurmaId()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getDesempenhoTurmaId()
        public function getDesempenhoTurmaId(){
            return $this->DesempenhoTurmaId;
        }//Fim do Metodo getDesempenhoTurmaId()

        //Metodo getDesempenhoTarefasEntregues()
        public function getDesempenhoTarefasEntregues(){
            return $this->DesempenhoTarefasEntregues;
        }//Fim do Metodo getDesempenhoTarefasEntregues()

        //Metodo getDesempenhoTarefasPendentes()
        public function getDesempenhoTarefasPendentes(){
            return $this->DesempenhoTarefasPendentes;
        }//Fim do Metodo getDesempenhoTarefasPendentes()

        //Metodo getDesempenhoTarefasExpiradas()
        public function getDesempenhoTarefasExpiradas(){
            return $this->DesempenhoTarefasExpiradas;
        }//Fim do Metodo getDesempenhoTarefasExpiradas()

        //Metodo getDesempenhoMedia()
        public function getDesempenhoMedia(){
            return $this->DesempenhoMedia;
        }//Fim do Metodo getDesempenhoMedia()

        //Metodo getDesempenhoNivel()
        public function getDesempenhoNivel(){
            return $this->DesempenhoNivel;
        }//Fim do Metodo getDesempenhoNivel()

        //Metodo getTurmaId()
        public function getTurmaId(){
            return $this->TurmaId;
        }//Fim do Metodo getTurmaId()

        //Fim dos Metodos Get's

    }//Fim da Classe Desempenho
?>