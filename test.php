<?php
$card='372801196908254438';
$sexnum = mb_substr($card, -2,1);
$yu = $sexnum%2;

$sex=$yu?'男':'女';
echo $sex;
?>