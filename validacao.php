<?php

$tmp = $_FILES['meuarquivo']['tmp_name'];
$name = $_FILES['meuarquivo']['name'];

$pessoa = $_POST['onome'];

$cidade = $_POST['cidad'];

$data = date("d.m.y");  

 $nomeFinal = $pessoa.'-'.$cidade.'-'.$data;

 $path = pathinfo($name); //pega informações sobre o file

 $ext = $path['extension']; //separa a extensão

 $arquivo = $nomeFinal.".".$ext;


$extpermitidas = array("png","PNG","jpg","jpeg","gif","svg");

if (in_array($ext, $extpermitidas)) {
move_uploaded_file($tmp,"filesSents /".$arquivo);
echo "<br> Arquivo enviado com sucesso";
}else{
echo "<br>Extensão não permitida!!";
}