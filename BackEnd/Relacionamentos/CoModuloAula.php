<?php
    //Criação de objeto

    $c1 = new Curso ("Java", null, "Programação", 2, "Português",
        "40h", 4.8, "2026-07-25", "Publicado", "250",
        99.90, null
    );

    $m1 = new Modulo ("Introdução", "Primeiro módulo", "1", $c1);

    $a1 = new Aula("Bem Vindos a Java!", null, "Lógica", "2h", 1, "1");
    $a2 = new Aula("Java no Mercado", null, "Utilidades", "2h", 2, "1");
    
    //Adicionando aulas ao módulo
    $m1->addAula($a1);
    $m1->addAula($a2);

    //Exibição do Módulo
    echo "Módulo: ".$m1->getTituloModulo()."<br>";

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