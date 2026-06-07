<?php
    //Criação de objeto
    $m1 = new Modulo ('...', '...', '...', '...');

    $a1 = new Aula('...', '...', '...', '...', '...', '...');
    $a2 = new Aula('...', '...', '...', '...', '...', '...');
    
    //Adicionando aulas ao módulo
    $m1->addAula($a1);
    $m1->addAula($a2);

    //Exibição do Módulo
    echo "Módulo: ".$m1->getTituloModulo()."<br>"

    //Exibição das aulas
    foreach($m1->getAulas() as $a){
        echo "Título: ".$a->getTituloAula()."<br>";
        echo "Descrição: ".$a->getDescricaoAula()."<br>";
        echo "Conteúdo: ".$a->getTipoConteudoAula()."<br>";
        echo "Duração: ".$a->getDuracaoAula()."<br>";
        echo "Ordem: ".$a->getOrdemAula()."<br>";
        echo "ID do Modúlo: ".$a->getIdModulo()."<br>";
    }
?>