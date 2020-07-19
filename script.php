<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); Listar dados do Array Acima

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome); recuperar os dados da variável nome 
//var_dump($idade); recuperar os dados da variável nome
//return 0; Debugar até aqui
if($idade >= 6 && $idade <=12) 
{
  for($i = 0; $i < count($categorias); $i++)
  {
	if($categorias[$i] == 'infantil')
	  echo "O nadador ".$nome. " Compete na categoria " .$categorias[$i];
  }
}	
else if($idade >= 13 && $idade <=18)
{
 for($i = 0; $i < count($categorias); $i++)
  {
	if($categorias[$i] == 'adolescente')
	  echo "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
  }
}
else
{
  for($i = 0; $i < count($categorias); $i++)
  {
	if($categorias[$i] == 'adulto')
	  echo "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
  }
}	


