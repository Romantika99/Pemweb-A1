<?php
$bil=2;
while ($bil<50){
$div_count=0;
for ( $a=1;$a<=$bil;$a++)
{
    if (($bil%$a)==0){
    $div_count++;
    }
}
    if ($div_count<3){
    echo $bil." , ";
    }
$bil=$bil+1;
}
?>