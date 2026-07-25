<?php //Começo da classe Tutor
    //Classe Estudante
    //Subclasse
    class Tutor extends Usuario{
        //Atributos
        private string $disciplina;
        //Metodo Construtor
        public function __construct(string $nome, string $email, string $senha, ?string $telefone, ?string $biografia, string $disciplina) {
            //Enviado para a Superclasse Usuario
            parent::__construct($nome, $email, $senha, $telefone, $biografia);
            $this->setDisciplina($disciplina);
        }//Fim do Metodo Construtor

        //Metodo setDisciplina()
        public function setDisciplina(string $disciplina): void {
            $this->disciplina = $disciplina;
        }//Fim do Metodo setDisciplina()

        //Metodo getDisciplina()
        public function getDisciplina(): string {
            return $this->disciplina;
        }//Fim do Metodo getDisciplina()
    }//Fim da classe Tutor
?>