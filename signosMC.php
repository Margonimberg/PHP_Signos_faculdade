<?php

$xml = simplexml_load_file('signosMC.xml');

echo 'Título: ' . $xml->titulo '<br>';

foreach($xml->signo as $conteudo):
echo 'Nome Signo: ' . $conteudo->signoNome . '<br>'; 
echo 'Data Início: ' . $conteudo->dataInicio . '<br>';
echo 'Data fim: ' . $conteudo->dataFim . '<br>'; 
echo 'Descrição: ' . $conteudo->descricao . '<br>'; 
echo '<hr>';
endforeach;
echo '<hr>';

?>
