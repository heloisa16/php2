<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <?php
    $nome = "Heloisa";
    $idade ="18";
    $fumante = true;
    //False -- Falso - 0  / true - verdadeiro - 1
    echo "<p>IC do cliente: $nome <br>";
    echo "Idade do Cliente: $idade <br>";
    echo "Fumante: $fumante </p>";

/*OPERADORES ARITIMÉTICOS */

echo 20*3;
echo"<br>";

// OPERADORES RELACIONAIS 

echo 20>10;
echo "<br>";

// ESTRUTURA DE DECISÃO

// UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
//SE FOR FUMANTE NÃO PODE ENTRAR
//idade não pode ser < 10 anos 

//IF SIMPLES - TERÁ NO MÁXIMO 2 RESPOSTA DIFERENTES
echo "<br>";
$idade = 18;
$fumante = false;
// if = SE
if($idade >= 75 || $fumante == true || $idade <= 10){
    echo"PROIBIDO A ENTRADA ACIMA DE 75 ANOS NA FESTA NÃO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10 ANOS";
}else{
    echo "pode entar, seja bem vindo";
}
 
//UM ALUNO, SE TIRAR UMA NOTA ACIMA DE 8 ELE É APROVADO
// SE TIRAR UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
//SE ELE TIRAR ABAIXO DE 5 ESTARÁ REPROVADO 

//IF COMPOSTO - TERÁ MAIS DE 2 RESPOSTAS DIFERENTES
echo"<br>";
$nota = 10;
if($nota >= 8  ){
    echo "Aprovado(a)";
}else if ($nota >= 5){
echo "Rcuperação";
}else{
 echo "Reprovado(a)";
}


//vcs irão  no Senac somente se:
// estiver uniformisados
// chegar no  horário
//mensagem: Verdadeiro ------- PARABÉNS, VC PODE IR
//            falso --------- FERROU, VC VAI FICAR NA SALA DO VALDEIR

echo "<br>";
$uniforme = false;
$horario = true;
if($uniforme == true || $horario == true){
    echo"PARABÉNS, VC PODE IR!!";
}else{
    echo "FERROU, VC VAI FICAR NA SALA DO VALDEIR";
}












    ?>
</body>
</html>