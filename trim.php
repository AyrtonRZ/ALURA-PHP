<?php

$csv = ',Ayrton Rodrigues,24,';

//remove caract desejado das pontas
echo trim($csv, ',') . PHP_EOL;

//remove caract do lado esquerdo
echo ltrim($csv, ',') . PHP_EOL;

//remove carct do lado direito
echo rtrim($csv, ',') . PHP_EOL;