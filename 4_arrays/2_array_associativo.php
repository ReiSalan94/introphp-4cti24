<?php
$estacao = array(
    'verao' => ' de 21 de dezembro a 21 de março ',
    'outono' => ' de 21  de março a 20 de junho ',
    'inverno' => ' de 21  de junho a 20 de setembro ',
    'primavera' => ' de 21  de setembro a 21 de dezembro '
);
echo "A estação verão foi : {$estacao['verao']}";

//concatenado
echo "<br> A estação outono foi : " . $estacao['outono'];

?>