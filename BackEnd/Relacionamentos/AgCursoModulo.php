<?php
    require_once __DIR__ . '/../Config.php';
    //Criação de objeto

    $usuario = new Usuario(
        "Arthur",
        "tutsyyyyy.dpc16@gmail.com",
        "123456",
        null,
        null
    );
    $c1 = new Curso ("Java", null, "Programação", 2, "Português",
                    "40h", 4.8, "2026-07-25", "Publicado", "250",
                    99.90, $usuario
    );

    $m1 = new Modulo ("Introdução", "Primeiro módulo", "1", $c1);
    $m2 = new Modulo ("Intermediário", "Segundo módulo", "2", $c1);
    $m3 = new Modulo ("Avançado", "Terceiro módulo", "3", $c1);
    $m4 = new Modulo ("Profissional", "Quarto módulo", "4", $c1);

    //Agregação dos Módulos no Curso
    $c1->addModulo($m1);
    $c1->addModulo($m2);
    $c1->addModulo($m3);
    $c1->addModulo($m4);

    //Exibição do Usuário
    echo "Nome do Usuário: ".$c1->getUsuario()->getNome()."<br>";
    echo "Email do Usuário: ".$c1->getUsuario()->getEmail()."<br>";

    //Exibição do curso
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
    echo "Preço do Curso: ".$c1->getPrecoCurso()."<br>";

    //Exibição do Módulo
    foreach($c1->getModulos() as $m){
        echo "Título do Módulo: ".$m->getTituloModulo()."<br>";
        echo "Descrição do Módulo: ".$m->getDescricaoModulo()."<br>";
        echo "Ordem do Módulo: ".$m->getOrdemModulo()."<br>";
        echo "ID do Curso do Módulo: ".$m->getCurso()->getIdCurso()."<br>";
    }

?>