<?php
    //Criação dos objetos
    $c1 = new Curso ('...', '...', '...', '...', '...',
                    '...', '...', '...', '...', '...',
                    '...', '...', '...', '...'
    );

    $t1 = new Tutor('...', '...', '...', '...');

    //Associação
    $c1->setUsuario($t1);

    //Exibição do Curso
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

    //Exibição do Usuário
    echo "Nome do Usuário: ".$t1->getNome()."<br>";
    echo "Email do Usuário: ".$t1->getEmail()."<br>";
    echo "Telefone do Usuário: ".$t1->getTelefone()."<br>";
    echo "Biografia do Usuário: ".$t1->getBiografia()."<br>";
?>