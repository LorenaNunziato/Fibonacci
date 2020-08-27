<?php
    $numero = $_POST['numero'];
    $vetor=array();

    for ($i=2; $i <= $numero; $i++){
        $vetor[0]=0;
        $vetor[1]=1;
        $vetor[$i] = $vetor[$i-1] + $vetor[$i-2];
    }
    echo"Sequencia de Fibonacci";

    for($i=0; $i < $numero; $i++){
        echo"</br>$vetor[$i]";
    }

?>