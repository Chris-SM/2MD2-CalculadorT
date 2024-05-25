<?php
$Numer = $_GET["Num"];
$Quant = $_GET["Vezes"];
$Numer = str_replace(",",".",$Numer);
$Quant = str_replace(",",".",$Quant);
echo "<center>Tabuada do ",$Numer," até ",$Quant,"<br><br>";
echo "<style> table, th, td { border: 1px solid black;}</style>
    <table><tr><td style='font-size: large;color: darkblue;background-color: lightgray;'>Calculo</td>
    <td style='font-size: large;color: darkblue;background-color: lightgray;'>Resultado</td></tr>";
if($Quant>0){
    for($A = 0;$A<=$Quant;$A++)
{
    echo "<tr><td>",$Numer,"X",$A,"</td><td>",($Numer*$A),"</td></tr>";
}}
else
{
    for($A = 0;$A>=$Quant;$A--)
{
    echo "<tr><td>",$Numer,"X",$A,"</td><td>",($Numer*$A),"</td></tr>";
}}
echo "</table><br>";
echo "<form action='index.html'><input type='submit' value='Voltar'></form></center>"
?>