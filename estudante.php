<?php //Começo da classe Estudante
    //Classe Estudante
    //Subclasse
    class Estudante extends Usuario{
        //Atributos
        protected $IdUsuario; //Chave Estrangeira

        //Metodo Construtor
        public function __construct($nome, $email, $senha, $telefone, $biografia, $IdUsuario){
            //Enviado para a Superclasse Usuario
            parent::__construct($nome, $email, $senha, $telefone, $biografia);
            $this->setIdUsuario($IdUsuario);
        }//Fim do Metodo Construtor

        //Metodo setIdUsuario
        public function setIdUsuario($IdUsuario){
            if(is_int($IdUsuario)){
                $this->IdUsuario = $IdUsuario;
            }
        }//Fim do Metodo setIdUsuario

        //Metodo getIdUsuario()
        public function getIdUsuario(){
            return $this->IdUsuario
        }//Fim do Metodo getIdUsuario()
    }//Fim da classe Estudante
?>