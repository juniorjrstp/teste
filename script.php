<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); Listar dados do Array Acima

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
  echo "O nome não pode ser vazio";
  return;  
}	

if(strlen($nome) < 3)
{
  echo 'O nome deve conter mais de três caracteres';
  return;  
}	

if(strlen($nome) > 40)
{
  echo 'O nome não pode conter mais do que 40 dígitos ou muito extenso';
  return;  
}	

if(!is_numeric($idade))
{
   echo 'Informe um número para a idade';
   return;
}	

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


