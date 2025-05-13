<?php
echo "Olá Mundo";
?> <br>
5+2 = <?php echo 5+2; ?> <br>
10-2 = <?php echo 10-2; ?> <br>
10/2 = <?php echo 10/2; ?> <br>
10*2 = <?php echo 10*2; ?> <br>
10%2 = <?php echo 10%2; ?> <br>
10**2 = <?php echo 10**2; ?> <br>

<?php
$salario = 5000.35; //deciaml ou float
$idade = 21; //int
$sobrenome = "Araujo"; //string
$animalEstimacao = false; //bool ou boolean

echo "<br>";
echo "Eu tenho $idade anos <br> ";
echo 'Eu tenho $idade anos <br> ';
echo 'Eu tenho ' . $idade . ' anos <br> ';
echo "Eu tenho " . $idade . " anos <br> ";
 
if($idade > 21){
    echo "cuidado com o tigrinho";
 
}else{
    echo "você ainda tem chance";
}
?>
 
<?="ola";?>
 
<?php
 
$corFavorita = "Rosa";
 
switch($corFavorita) {
    case 'azul' :
        echo "<br>Sua cor favorita é azul";
        break;
    case 'vermelho':
        echo"<br>Sua cor favorita é vermelho";
        break;
    case 'amarelo':
        echo"<br>Sua cor favorita é amarelo";
    default:
      echo"<br>Não sei sua cor favorita";
      break;
}
 
$i = 0;
while($i<10){
    echo "<br>vambora";
    $i = $i + 1;
}
 
for($i = 0; $i < 10; $i=$i=1){
    echo "<br>vambora";
}
?>

