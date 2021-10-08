<?php
    $nome = "Hanriel";

    function teste(){
        global $nome;
        echo $nome . "<br/>";
    };

    function teste2(){
        $nome = "wile";
        echo $nome . " " ."Agora no teste2";
    };

    teste();
    teste2();
?>