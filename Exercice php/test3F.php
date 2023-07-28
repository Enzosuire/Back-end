<?php


$saisie=readline("saisir son numéro de carte vitale : ");
print PHP_EOL;

print preg_match('/^([1-2]{1}) ([0-9]{2}) ([0-1]{1})([0-9]{1}) (2[AB]|[0-9]{2}) ([0-9]{3}) ([0-9]{3}) ([0-9]{2})$/i', $saisie);

?>
