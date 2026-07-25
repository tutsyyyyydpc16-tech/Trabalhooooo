<?php
    //classe usuario, brenoooooooooooooooo
    class Usuario{

    //atributos
    private ?int $idUsuario = null; //Chave Primária //Set gerado automaticamente pelo Banco de Dados
    private string $nome;
    private string $email;
    private string $senha;
    private ?string $telefone = null;
    private ?string $biografia = null;

    //metodo Constructor
    public function __construct(string $nome, string $email, string $senha, ?string $telefone, ?string $biografia){
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setTelefone($telefone);
        $this->setBiografia($biografia);
    }//Fim do metodo constructor

    //Metodo setNome()
    public function setNome(string $nome): void {
        $this->nome = $nome;
    }//Fim do metodo setNome()

    //Metodo setemail()
    public function setEmail(string $email): void{
        $this->email = $email;
    }//Fim do metodo setemail()

    //Metodo setSenha()
    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }//Fim do metodo setSenha()

    //Metodo setTelefone()
    public function setTelefone(?string $telefone): void {
        $this->telefone = $telefone;
    }//Fim do metodo setTelefone()

    //Metodo setBiografia()
    public function setBiografia(?string $biografia): void {
        $this->biografia = $biografia;
    }//Fim do metodo setBiografia()a

    //Metodo getIdUsuario()
    public function getIdUsuario(): int {
        return $this->idUsuario;
    }//Fim do metodo getIdUsuario()

    //Metodo getNome()
    public function getNome(): string {
        return $this->nome;
    }//Fim do metodo getNome()

    //Metodo getEmail()
    public function getEmail(): string {
        return $this->email;
    }//Fim do metodo getEmail()

    //Metodo getSenha()
    public function getSenha(): string {
        return $this->senha;
    }//Fim do metodo getSenha()

    //Metodo getTelefone()
    public function getTelefone(): ?string {
        return $this->telefone;
    }//Fim do metodo getTelefone()

    //Metodo getBiografia()
    public function getBiografia(): ?string {
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
