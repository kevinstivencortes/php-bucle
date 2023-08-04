<!-- Diseña un codigo que genere un ciclo for anidado para imprimir las tablas de multiplicar del 1 al 10 -->
<?php
for ($num=1; $num <=10 ; $num++) {
    for ($i=0; $i <=10 ; $i++) {
        $res=($num*$i);
        echo $num ."<tr>";
        echo $res ."<br>";
        /* echo "$num  $i $res" ."<tr>"; */
    }
}
?>