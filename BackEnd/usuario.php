<?php
    //Classe Usuario
    class Usuario{
    
    //Atributos
    private $nome;
    private $email;
    private $matricula; //Chave Primária
    private 
    private $caracteristica = [];

    private $conta;

    //Metodo Construtor
    public function __construct($nome, $idade,Conta $conta){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setMatricula($matricula);
        $this->setConta($conta);
    }//Fim do metodo construtor
    
    // Metodo setNome()
    public function setNome($nome){
        if (is_string($nome)){
            $this->nome = $nome;
        }
    }

    // Metodo setIdade()
    public function setIdade($idade){
        if (is_int($idade) && $idade > 0){
            $this->idade = $idade;
        }
    }

    // Metodo setConta()
    public function setConta(Conta$c){
        $this->conta = $c;
    }// Fim do metodo setConta()

    public function addCaracteristica($nome, $valor){
        $u1 = new Caracteristica($nome, $valor);
        $this->caracteristica[] = $u1;
    }//Fim do metodo public function caracteristica

    //Metodo Get

    //Metodo getCaracteristicas
    public function getCaracteristicas(){
        return $this->caracteristica;
    }
    //Fim do Metodo getCaracteristicas

    public function getConta(){
        return $this->conta;
    }//Fim do metodo getConta()

     //Metodo getNome()
     public function getNome(){
        return $this->nome;
    }//Fim do metodo getNome()

     //Metodo getIdade()
     public function getIdade(){
        return $this->idade;
    }//Fim do metodo getIdade()

     //Metodo getMatricula()
     public function getMatricula(){
        return $this->matricula;
    }//Fim do metodo getMatricula()

}//Fim da classe Usuario

?>