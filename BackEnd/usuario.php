<?php
    //classe usuario, brenoooooooooooooooo
    class Usuario{

    //atributos
    private $IdUsuario; //Chave Primária //Set gerado automaticamente pelo Banco de Dados
    private $nome;
    private $email;
    private $senha;
    private $telefone;
    private $biografia;

    //metodo Constructor
    public function __construct($nome, $email, $senha, $telefone, $biografia){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setTelefone($telefone);
        $this->setBiografia($biografia);
    }//Fim do metodo constructor

    //Metodo setNome()
    public function setNome($nome){
        $this->nome = $nome;
    }//Fim do metodo setNome()

    //Metodo setemail()
    public function setEmail($email){
        $this->email = $email;
    }//Fim do metodo setemail()

    //Metodo setSenha()
    public function setSenha($senha){
        $this->senha = $senha;
    }//Fim do metodo setSenha()

    //Metodo setTelefone()
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }//Fim do metodo setTelefone()

    //Metodo setBiografia()
    public function setBiografia($biografia){
        $this->biografia = $biografia;
    }//Fim do metodo setBiografia()a

    //Metodo getIdUsuario()
    public function getIdUsuario(){
        return $this->IdUsuario;
    }//Fim do metodo getIdUsuario()

    //Metodo getNome()
    public function getNome(){
        return $this->nome;
    }//Fim do metodo getNome()

    //Metodo getEmail()
    public function getEmail(){
        return $this->email;
    }//Fim do metodo getEmail()

    //Metodo getSenha()
    public function getSenha(){
        return $this->senha;
    }//Fim do metodo getSenha()

    //Metodo getTelefone()
    public function getTelefone(){
        return $this->telefone;
    }//Fim do metodo getTelefone()

    //Metodo getBiografia()
    public function getBiografia(){
        return $this->biografia;
    }//Fim do metodo getBiografia()

}//fim da classe usuario ooooooooh maga

//Reecebendo o POST

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Criando usuário

    $usuario = new Usuario($nome, $email, $senha, null, null);

    //Mandar para a página inicial
    header("Location: ../FrontEnd/Orbit.html");
    exit;

?>
