<?php //Classe Agenda
    class Agenda{
    //Atributos
    private $AgendaTarefas = [];
    private $AgendaModoVisualizacao;
    //Fim dos Atributos

    //Metodo Construtor

     public function __construct($AgendaModoVisualizacao) {
        $this->setAgendaModoVisualizacao($AgendaModoVisualizacao);
    }//Fim do metodo construtor

    //Metodo Set's

    //Metodo setAgendaModoVisualizacao()
    public function setAgendaModoVisualizacao($AgendaModoVisualizacao){
        if(is_string($AgendaModoVisualizacao)){
            $this->AgendaModoVisualizacao = $AgendaModoVisualizacao;
        }
    }//Fim do Metodo setAgendaModoVisualizacao()

    //Fim dos Metodos Set's

    //Metodo Get's

    //Metodo getAgendaTarefas()
    public function getAgendaTarefas(){
        return $this->AgendaTarefas;
    }//Fim do Metodo getAgendaTarefas()

    //Metodo getAgendaModoVisualizacao()
    public function getAgendaModoVisualizacao(){
        return $this->AgendaModoVisualizacao;
    }//Fim do Metodo getAgendaModoVisualizacao()

    //Fim dos Metodos Get's

    //Metodos adicionais

    //Metodo addAgendaTarefa()
    public function addAgendaTarefa($Tarefa){
        $this->AgendaTarefas[] = $Tarefa;
    }//Fim do Metodo addAgendaTarefa()

}//Fim da Classe Agenda

?>
