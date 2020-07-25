<?php

session_start();

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
  $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha novamente.';
  header('location: index.php');
  return;  
}	
else if(strlen($nome) < 3)
{
  $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de três caracteres.';
  header('location: index.php'); 
  return;
}	
else if(strlen($nome) > 40)
{
  $_SESSION['mensagem-de-erro'] = 'O nome não pode conter mais do que 40 dígitos ou muito extenso.';
  header('location: index.php');  
  return;  
}	

else if(!is_numeric($idade))
{
   $_SESSION['mensagem-de-erro'] = 'Informe um número para a idade.';
   header('location: index.php');
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
	{	
	  $_SESSION['mensagem-de-sucesso'] =  "O nadador ".$nome. " Compete na categoria " .$categorias[$i];
	  header('location: index.php');
	  return;
	}  
  }
}	
else if($idade >= 13 && $idade <=18)
{
 for($i = 0; $i < count($categorias); $i++)
  {
	if($categorias[$i] == 'adolescente')
	{	
	  $_SESSION['mensagem-de-sucesso'] =  "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
	  header('location: index.php');
	  return;
	} 
  }
}
else
{
  for($i = 0; $i < count($categorias); $i++)
  {
	if($categorias[$i] == 'adulto')
	{	
	  $_SESSION['mensagem-de-sucesso'] =  "O nadador ".$nome. " Compete na categoria ".$categorias[$i];
	  header('location: index.php');
	  return;
	}  
  }
}	


