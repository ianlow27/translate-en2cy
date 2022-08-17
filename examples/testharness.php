<?php

require_once("../vendor/autoload.php");

$oprawf1 = new Ianl28\TranslateEn2cy\TranslateEn2cy();
$oprawf1->testrun();

$oprawf2 = new Ianl28\DictionaryEnCy\DictionaryEnCy();
$oprawf2->testrun();

$oprawf3 = new Ianl28\ReorderWordsCy\ReorderWordsCy();
$oprawf3->testrun();

$oprawf4 = new Ianl28\ApplyMutationsCy\ApplyMutationsCy();
$oprawf4->testrun();

?>
