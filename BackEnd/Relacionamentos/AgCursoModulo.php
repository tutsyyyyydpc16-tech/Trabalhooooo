<?php
    //Criação de objeto
    $c1 = new Curso ('...', '...', '...', '...', '...',
                    '...', '...', '...', '...', '...',
                    '...', '...', '...', '...'
    );

    $m1 = new Modulo ('...', '...', '...', '...');
    $m2 = new Modulo ('...', '...', '...', '...');
    $m3 = new Modulo ('...', '...', '...', '...');
    $m4 = new Modulo ('...', '...', '...', '...');

    //Agregação dos Módulos no Curso
    $c1->addModulo($m1);
    $c1->addModulo($m2);
    $c1->addModulo($m3);
    $c1->addModulo($m4);

    //Exibição do curso
    echo "Nome do Curso: ".$c1->getTituloCurso()."<br>";
    echo "Descrição do Curso: ".$c1->getDescricaoCurso()."<br>";
    echo "Categoria do Curso: ".$c1->getCategoriaCurso()."<br>";
    echo "Nível do Curso: ".$c1->getNivelCurso()."<br>";
    echo "Idioma do Curso: ".$c1->getIdiomaCurso()."<br>";
    echo "Carga Horária do Curso: ".$c1->getCargaHorariaCurso()."<br>";
    echo "Capa do Curso: ".$c1->getCapaCurso()."<br>";
    echo "Banner do Curso: ".$c1->getBannerCurso()."<br>";
    echo "Nota Média do Curso: ".$c1->getNotaMediaCurso()."<br>";
    echo "Data de Publicação do Curso: ".$c1->getDataPublicacaoCurso()."<br>";
    echo "Status do Curso: ".$c1->getStatusCurso()."<br>";
    echo "Quantidade de Avaliações do Curso: ".$c1->getQuantidadeAvaliacoesCurso()."<br>";
    echo "ID do Usuário do Curso: ".$c1->getIdUsuarioCurso()."<br>";
    echo "Preço do Curso: ".$c1->getPrecoCurso()."<br>";

    //Exibição do Módulo
    foreach($c1->getModulos() as $m){
        echo "Título do Módulo: ".$m->getTituloModulo()."<br>";
        echo "Descrição do Módulo: ".$m->getDescricaoModulo()."<br>";
        echo "Ordem do Módulo: ".$m->getOrdemModulo()."<br>";
        echo "ID do Curso do Módulo: ".$m->getIdCursoModulo()."<br>";
    }

?>