<?php
    require_once __DIR__ . '/../Config.php';
    //Criação dos objetos
    $t1 = new Tutor("Breno", "breno.silveira@gmail.com", "123456", null, null, "Programação Pra Web");

    $c1 = new Curso ("Java", null, "Programação", 2, "Português",
        "40h", 4.8, "2026-07-25", "Publicado", "250",
        99.90, $t1
    );

    //Associação
    $c1->setUsuario($t1);

    //Exibição do Curso
    echo "Nome do Curso: ".$c1->getTituloCurso()."<br>";
    echo "Descrição do Curso: ".$c1->getDescricaoCurso()."<br>";
    echo "Categoria do Curso: ".$c1->getCategoriaCurso()."<br>";
    echo "Nível do Curso: ".$c1->getNivelCurso()."<br>";
    echo "Idioma do Curso: ".$c1->getIdiomaCurso()."<br>";
    echo "Carga Horária do Curso: ".$c1->getCargaHorariaCurso()."<br>";
    echo "Nota Média do Curso: ".$c1->getNotaMediaCurso()."<br>";
    echo "Data de Publicação do Curso: ".$c1->getDataPublicacaoCurso()."<br>";
    echo "Status do Curso: ".$c1->getStatusCurso()."<br>";
    echo "Quantidade de Avaliações do Curso: ".$c1->getQuantidadeAvaliacoesCurso()."<br>";
    echo "ID do Usuário do Curso: ".$c1->getUsuario()->getIdUsuario()."<br>";
    echo "Preço do Curso: ".$c1->getPrecoCurso()."<br>";

    //Exibição do Usuário
    echo "Nome do Usuário: ".$t1->getNome()."<br>";
    echo "Email do Usuário: ".$t1->getEmail()."<br>";
    echo "Telefone do Usuário: ".$t1->getTelefone()."<br>";
    echo "Biografia do Usuário: ".$t1->getBiografia()."<br>";
?>