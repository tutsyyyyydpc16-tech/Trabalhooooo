<?php
    //Classe Tarefa
    class Tarefa {
        //Atributos
        private $TarefaId; //Chave Primária
        private $TarefaDescricao;
        private $TarefaTitulo;
        private $TarefaNivelPrioridade;
        private $TarefaStatus;
        private $TarefaDataEntrega;
        private $TarefaDataCriacao;
        private $UsuarioId; //Chave Estrangeira
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($TarefaDescricao, $TarefaTitulo, $TarefaNivelPrioridade, $TarefaStatus, $TarefaDataEntrega, $TarefaDataCriacao, $UsuarioId){
            $this->setTarefaDescricao($TarefaDescricao);
            $this->setTarefaTitulo($TarefaTitulo);
            $this->setTarefaNivelPrioridade($TarefaNivelPrioridade);
            $this->setTarefaStatus($TarefaStatus);
            $this->setTarefaDataEntrega($TarefaDataEntrega);
            $this->setTarefaDataCriacao($TarefaDataCriacao);
            $this->setUsuarioId($UsuarioId);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTarefaDescricao()
        public function setTarefaDescricao($TarefaDescricao){
            if(is_string($TarefaDescricao)){
                $this->TarefaDescricao = $TarefaDescricao;
            }
        }//Fim do Metodo setTarefaDescricao()

        //Metodo setTarefaTitulo()
        public function setTarefaTitulo($TarefaTitulo){
            if(is_string($TarefaTitulo)){
                $this->TarefaTitulo = $TarefaTitulo;
            }
        }//Fim do Metodo setTarefaTitulo()

        //Metodo setTarefaNivelPrioridade()
        public function setTarefaNivelPrioridade($TarefaNivelPrioridade){
            if(is_int($TarefaNivelPrioridade)){
                if ($TarefaNivelPrioridade == 1 || $TarefaNivelPrioridade == 2 || $TarefaNivelPrioridade == 3) {
                    $this->TarefaNivelPrioridade = $TarefaNivelPrioridade;
                }
            }
        }//Fim do Metodo setTarefaNivelPrioridade()

        //Metodo setTarefaStatus()
        public function setTarefaStatus($TarefaStatus){
            if(is_string($TarefaStatus)){
                if ($TarefaStatus == "Pendente" || $TarefaStatus == "Em Andamento" || $TarefaStatus == "Concluída") {
                    $this->TarefaStatus = $TarefaStatus;
                }
            }
        }//Fim do Metodo setTarefaStatus()

        //Metodo setTarefaDataEntrega()
        public function setTarefaDataEntrega($TarefaDataEntrega){
            if(is_string($TarefaDataEntrega)){
                $this->TarefaDataEntrega = $TarefaDataEntrega;
            }
        }//Fim do Metodo setTarefaDataEntrega()

        //Metodo setTarefaDataCriacao()
        public function setTarefaDataCriacao($TarefaDataCriacao){
            if(is_string($TarefaDataCriacao)){
                $this->TarefaDataCriacao = $TarefaDataCriacao;
            }
        }//Fim do Metodo setTarefaDataCriacao()

        //Metodo setUsuarioId()
        public function setUsuarioId($UsuarioId){
            if(is_int($UsuarioId)){
                $this->UsuarioId = $UsuarioId;
            }
        }//Fim do Metodo setUsuarioId()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getTarefaId()
        public function getTarefaId(){
            return $this->TarefaId;
        }//Fim do Metodo getTarefaId()

        //Metodo getTarefaDescricao()
        public function getTarefaDescricao(){
            return $this->TarefaDescricao;
        }//Fim do Metodo getTarefaDescricao()

        //Metodo getTarefaTitulo()
        public function getTarefaTitulo(){
            return $this->TarefaTitulo;
        }//Fim do Metodo getTarefaTitulo()

        //Metodo getTarefaNivelPrioridade()
        public function getTarefaNivelPrioridade(){
            return $this->TarefaNivelPrioridade;
        }//Fim do Metodo getTarefaNivelPrioridade()

        //Metodo getTarefaStatus()
        public function getTarefaStatus(){
            return $this->TarefaStatus;
        }//Fim do Metodo getTarefaStatus()

        //Metodo getTarefaDataEntrega()
        public function getTarefaDataEntrega(){
            return $this->TarefaDataEntrega;
        }//Fim do Metodo getTarefaDataEntrega()

        //Metodo getTarefaDataCriacao()
        public function getTarefaDataCriacao(){
            return $this->TarefaDataCriacao;
        }//Fim do Metodo getTarefaDataCriacao()

        //Metodo getUsuarioId()
        public function getUsuarioId(){
            return $this->UsuarioId;
        }//Fim do Metodo getUsuarioId()

        //Fim dos Metodos Get's

    }//Fim da Classe Tarefa
?>