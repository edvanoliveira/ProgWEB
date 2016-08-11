<?php

include "equipamento.php";
include "equipamentosonoro.php";

$objeto1 = new Equipamento\Sonoro\EquipamentoSonoro();
$objeto2 = new Equipamento\Sonoro\EquipamentoSonoro();

$objeto1->liga(true);
$objeto1->mono();

var_dump($objeto1);

$objeto2->liga(true);
$objeto2->setVolume(8);
$objeto2->stereo();
var_dump($objeto2);

?>