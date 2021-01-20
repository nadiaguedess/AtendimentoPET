<?php
//declaracao dos dados do cliente
$nome_do_proprietario = $_POST['nome_do_proprietario'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$cep = $_POST['cep'];
$nome_animal1 = $_POST['nome_animal1'];
$nome_animal2 = $_POST['nome_animal2'];
$nome_animal3 = $_POST['nome_animal3'];
$nome_animal4 = $_POST['nome_animal4'];
//declaracao dos dados do animal

$queixa_animal1 = $_POST['queixa_animal1'];
$diagnostico_animal1 = $_POST['diagnostico_animal1'];
$queixa_animal2 = $_POST['queixa_animal2'];
$diagnostico_animal2 = $_POST['diagnostico_animal2'];
$queixa_animal3 = $_POST['queixa_animal3'];
$diagnostico_animal3 = $_POST['diagnostico_animal3'];
$queixa_animal4 = $_POST['queixa_animal4'];
$diagnostico_animal4 = $_POST['diagnostico_animal4'];

//variavel que recebe o array do proprietario
$proprietario = array("$nome_do_proprietario","$data_nascimento","$sexo","$logradouro","$numero","$complemento","$bairro","$cidade","$uf","$cep");
//variavel que recebe o array dos animais
$queixa = array($queixa_animal1 => $diagnostico_animal1, $queixa_animal2 => $diagnostico_animal2, $queixa_animal3 => $diagnostico_animal3, $queixa_animal4 => $diagnostico_animal4);
$animal =  array($nome_animal1 => $queixa_animal1, $nome_animal2 => $queixa_animal2, $nome_animal3 => $queixa_animal3 , $nome_animal4 => $queixa_animal4);

//variavel que calcula o tamanho do array
$tamanho = count($proprietario);
$tamanho_animal = count($queixa);



//for para imprimir o vetor referente aos dados do proprietario
echo "Dados do Proprietario";
echo '<br>';
echo '<br>';
for($i=0; $i<$tamanho; $i++){
	echo $proprietario[$i];
	echo '<br>';

}


//colocando o vetor em ordem alfabetica
ksort($queixa);
ksort($animal);

//imprimir o nome dos animais
echo '<br>';
echo "Nome dos Animais";
echo '<br>';
foreach($animal as $k=> $d){
	echo '<br>';
	echo $k;
	echo ' - ';
	echo $d;

}

echo '<br>';


//imprimir a queixa e o diagnostico
echo '<br>';
echo "Queixa e Diagnostico";
echo '<br>';
foreach($queixa as $k=> $d){
	echo '<br>';
	echo $k;
	echo ' - ';
	echo $d;

}



//verificando se o atendimento foi realizado ou nao
$i=0;
$diagnostico = true;

while($i < $tamanho_animal){
	if($tamanho_animal[$i] == ""){
	
		$diagnostico == false;
	
	}
		$i++;

}

if($diagnostico == false){

	echo '<script>alert("Aguardando atendimento!")</script>';

}
else{

	echo '<script>alert("Atendimento realizado!")</script>';

}


?>