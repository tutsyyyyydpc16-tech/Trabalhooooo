<?php //Começo da classe Estudante
    //Classe Estudante
    //Subclasse
    class Estudante extends Usuario{
        //Atributos
        private int $matricula;

        //Metodo Construtor
        public function __construct(string $nome, string $email, string $senha, ?string $telefone, ?string $biografia, int $matricula){
            //Enviado para a Superclasse Usuario
            parent::__construct($nome, $email, $senha, $telefone, $biografia);
            $this->setMatricula($matricula);
        }//Fim do Metodo Construtor

        //Metodo setMatricula()
        public function setMatricula(int $matricula) : void {
            $this->matricula = $matricula;
        }
        //Metodo getMatricula
        public function getMatricula() : int{
            return $this->matricula;
        }//Fim do Metodo getMatricula()

    }//Fim da classe Estudante
?>