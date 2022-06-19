<?php
/* formatnya:
    do {
        statement;
        statement;
        increment;
    }while(condition);
*/

$i = 1000;
do{
    echo "$i ";
    echo "Akan tampil di browser<br/>";
    $i = $i+1;
}while($i <= 10);
