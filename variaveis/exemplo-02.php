<?php
    /* 
    *Comentário de bloco.
    *Serve para documentar o código.
    */
    $anoNascimento = 1990;

    $nome1 = "João";

    $sobrenome = "Da Silva";

    $nomeCompleto = $nome1 . " " . $sobrenome;

    echo $nomeCompleto;

    exit;

    echo "<br />";

    // unset($nome1); //Destruir a variável.
    //isset(variavel) para saber se ela existe.

    if(isset($nome1)){
        echo $nome1;
    };
    // $1nome = ""; não pode.
    //$%nome = ""; não pode.
?>