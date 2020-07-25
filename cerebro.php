<?php
$jogador1 = $_POST['movimento_da_mariana'];

$jogador2 = $_POST['movimento_rival'];

$movimentos = [];

$movimentos[] = 'tesoura';

$movimentos[] = 'pedra';

$movimentos[] = 'papel';



print_r($movimentos);
var_dump($jogador1);
var_dump($jogador2);

