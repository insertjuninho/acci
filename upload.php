<?php
// Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'img/';
// Tamanho máximo do arquivo (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 10; // 10Mb
// Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'jpeg');
// Renomeia o arquivo? (Se true, o arquivo será salvo como .png e um nome único)
$_UP['renomeia'] = true;
// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite de 2Mb';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['arquivo1']['error'] != 0) {
  
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo1']['error']]);
  exit; // Para a execução do 
}
if ($_FILES['arquivo2']['error'] != 0) {
  
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo2']['error']]);
  exit; // Para a execução do 
}
if ($_FILES['arquivo3']['error'] != 0) {
  
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo3']['error']]);
  exit; // Para a execução do 
}
if ($_FILES['arquivo4']['error'] != 0) {
  
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo4']['error']]);
  exit; // Para a execução do 
}
// Caso  chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
// Faz a verificação da extensão do arquivo
$extensao1 = explode('.', $_FILES['arquivo1']['name']);
$extensao1 = strtolower(end($extensao1));
if (array_search($extensao1, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: png ou jpeg";
  exit;
}
$extensao2 = explode('.', $_FILES['arquivo2']['name']);
$extensao2 = strtolower(end($extensao2));
if (array_search($extensao2, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: png ou jpeg";
  exit;
}
$extensao3 = explode('.', $_FILES['arquivo3']['name']);
$extensao3 = strtolower(end($extensao3));
if (array_search($extensao3, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: png ou jpeg";
  exit;
}
$extensao4 = explode('.', $_FILES['arquivo4']['name']);
$extensao4 = strtolower(end($extensao4));
if (array_search($extensao4, $_UP['extensoes']) === false) {
  echo "Por favor, envie arquivos com as seguintes extensões: png ou jpeg";
  exit;
}
// Faz a verificação do tamanho do arquivo
if ($_UP['tamanho'] < $_FILES['arquivo1']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
  exit;
}
if ($_UP['tamanho'] < $_FILES['arquivo2']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
  exit;
}
if ($_UP['tamanho'] < $_FILES['arquivo3']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
  exit;
}
if ($_UP['tamanho'] < $_FILES['arquivo4']['size']) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
  exit;
}
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
// Primeiro verifica se deve trocar o nome do arquivo
if ($_UP['renomeia'] == true) {
  // Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .png
  

  $nome_final1 = "$id.1.$extensao1";
  $nome_final2 = "$id.2.$extensao2";
  $nome_final3 = "$id.3.$extensao3";
  $nome_final4 = "$id.4.$extensao4";

  // utilizar Where para não ganhar diploma, se não utilizar Where, todos os produtos receberão o mesmo nome de imagem.

mysqli_query($con, "update produto set img = '$nome_final1','$nome_final2','$nome_final3',$nome_final4 where idproduto = $id");


  
// Depois verifica se é possível mover o arquivo para a pasta escolhida
move_uploaded_file($_FILES['arquivo1']['tmp_name'], $_UP['pasta'] . $nome_final1);
move_uploaded_file($_FILES['arquivo2']['tmp_name'], $_UP['pasta'] . $nome_final2);
move_uploaded_file($_FILES['arquivo3']['tmp_name'], $_UP['pasta'] . $nome_final3);
move_uploaded_file($_FILES['arquivo4']['tmp_name'], $_UP['pasta'] . $nome_final4);

}