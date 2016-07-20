<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="geral">
<div id="titulo">
<h1>Aplicativo de Palíndromo</h1>
</div>
<form action="<? $PHP_SELF; ?>" method="POST"> 
	<p> 
		<h3>Digite aqui abaixo a palavra que quer saber se é um Palíndromo ou não:</h3> 
		<input type="text" size="20" name="palavra">
        <br />
    <p id="observacao">Após digitar só apertar a tecla enter.</p> 
	</p>   
 </form>
<?php
$palavra=$_POST["palavra"];
$palindromo=0;

$j=strlen($palavra)-1;
for ($i=0;$i<strlen($palavra);$i++){
    $inversa[$j]=$palavra[$i];
    $j--;
    }
for ($i=0,$j=0;$i<strlen($palavra);$i++,$j++){
    if ($palavra[$i]!=$inversa[$j])
       $palindromo=0;                         
    else                                               
       $palindromo=$palindromo+1;
}
if ($palindromo==strlen($palavra))  
   echo "<h1>Resultado: É um Palíndromo</h1>"; 
else
   echo "<h1>Resultado: Nao é um Palíndromo</h1>";
?>
</div>
</body>
</html>
