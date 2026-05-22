<?php
    //Classe Tarefa
    class Tarefa {
        //Atributos
        private $TarefaTitulo;
        private $TarefaDescricao;
        private $TarefaNota;
        private $TarefaDataEntrega;
        private $TarefaPrioridade;
        private $TarefaAnexos = [];
        private $TarefaEstudantesDestinados = [];
        //Fim dos Atributos

        //Metodo Construtor
        public function __construct($TarefaTitulo, $TarefaDescricao, $TarefaNota, $TarefaDataEntrega, $TarefaPrioridade){
            $this->setTarefaTitulo($TarefaTitulo);
            $this->setTarefaDescricao($TarefaDescricao);
            $this->setTarefaNota($TarefaNota);
            $this->setTarefaDataEntrega($TarefaDataEntrega);
            $this->setTarefaPrioridade($TarefaPrioridade);
        }//Fim do Metodo Construtor

        //Metodos Set's

        //Metodo setTarefaTitulo()
        public function setTarefaTitulo($TarefaTitulo){
            if(is_string($TarefaTitulo)){
                $this->TarefaTitulo = $TarefaTitulo;
            }
        }//Fim do Metodo setTarefaTitulo()

        //Metodo setTarefaDescricao()
        public function setTarefaDescricao($TarefaDescricao){
            if(is_string($TarefaDescricao)){
                $this->TarefaDescricao = $TarefaDescricao;
            }
        }//Fim do Metodo setTarefaDescricao()

        //Metodo setTarefaNota()
        public function setTarefaNota($TarefaNota){
            if(is_float($TarefaNota) || is_int($TarefaNota)){
                $this->TarefaNota = $TarefaNota;
            }
        }//Fim do Metodo setTarefaNota()

        //Metodo setTarefaDataEntrega()
        public function setTarefaDataEntrega($TarefaDataEntrega){
            if(is_string($TarefaDataEntrega)){
                $this->TarefaDataEntrega = $TarefaDataEntrega;
            }
        }//Fim do Metodo setTarefaDataEntrega()

        //Metodo setTarefaPrioridade()
        public function setTarefaPrioridade($TarefaPrioridade){
            if(is_string($TarefaPrioridade)){
                if ($TarefaPrioridade == "Baixa" || $TarefaPrioridade == "Média" || $TarefaPrioridade == "Alta") {
                    $this->TarefaPrioridade = $TarefaPrioridade;
                }
            }
        }//Fim do Metodo setTarefaPrioridade()

        //Fim dos Metodos Set's

        //Metodos Get's

        //Metodo getTarefaTitulo()
        public function getTarefaTitulo(){
            return $this->TarefaTitulo;
        }//Fim do Metodo getTarefaTitulo()

        //Metodo getTarefaDescricao()
        public function getTarefaDescricao(){
            return $this->TarefaDescricao;
        }//Fim do Metodo getTarefaDescricao()

        //Metodo getTarefaNota()
        public function getTarefaNota(){
            return $this->TarefaNota;
        }//Fim do Metodo getTarefaNota()

        //Metodo getTarefaDataEntrega()
        public function getTarefaDataEntrega(){
            return $this->TarefaDataEntrega;
        }//Fim do Metodo getTarefaDataEntrega()

        //Metodo getTarefaPrioridade()
        public function getTarefaPrioridade(){
            return $this->TarefaPrioridade;
        }//Fim do Metodo getTarefaPrioridade()

        //Metodo getTarefaAnexos()
        public function getTarefaAnexos(){
            return $this->TarefaAnexos;
        }//Fim do Metodo getTarefaAnexos()

        //Metodo getTarefaEstudantesDestinados()
        public function getTarefaEstudantesDestinados(){
            return $this->TarefaEstudantesDestinados;
        }//Fim do Metodo getTarefaEstudantesDestinados()

        //Fim dos Metodos Get's

        //Metodos Adicionais

        //Metodo addTarefaEstudanteDestinados()
        public function addEstudanteDestinados($estudante){
            if ($estudante != null) {
                $this->TarefaEstudantesDestinados[] = $estudante;
            }
        }//Fim do Metodo adicionarEstudanteDestinados()

        //Metodo addTarefaAnexo()
        public function addTarefaAnexo($anexo){
            $this->TarefaAnexos[] = $anexo;
        }//Fim do Metodo addTarefaAnexo()

        //Metodo removerTarefaEstudanteDestinados()
        public function removeEstudanteDestinados($estudante){
            if(($key = array_search($estudante, $this->TarefaEstudantesDestinados)) !== false) {
                unset($this->TarefaEstudantesDestinados[$key]);
            }
        }//Fim do Metodo removerEstudanteDestinados()

        //Metodo removerTarefaAnexo()
        public function removeTarefaAnexo($anexo){
            if(($key = array_search($anexo, $this->TarefaAnexos)) !== false) {
                unset($this->TarefaAnexos[$key]);
            }
        }//Fim do Metodo removerTarefaAnexo()

    }//Fim da Classe Tarefa
?>