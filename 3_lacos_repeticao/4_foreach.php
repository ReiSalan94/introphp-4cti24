<?php
/*estrutura de repetição para trabalhar com arrays */
$mendes = array(
    "Xandão é o cara!",
    " xanxan, ",
    " bora BGS! "
);

foreach ($mendes as $view) {
    echo $view;
}
?>
<hr>
<?php
$meses = array(
    'Janeiro' => 1,
    'Fevereiro' => 2,
    'Março' => 3,
    'Abril' => 4,
);
foreach($meses as $chave => $valor){
    echo ' O mês '. $chave . ' é ' . $valor .' <br>';
}
?>