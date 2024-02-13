<?php
require 'phpPersonnageConst.php';
$merlin = new Personnage('Merlin');
var_dump($merlin);
$merlin->parler();
echo('<br>');
$merlin-> toutNeuf();
var_dump($merlin);
