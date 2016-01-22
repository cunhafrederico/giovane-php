#!/usr/bin/php5
<?php

$start = microtime(true);

require_once 'src/EfeitoMagnetico.php';

$em = new EfeitoMagnetico($argv[1], $argv[2], $argv[3]);

$ponto = $em->calculaPonto();

printf('O mouse deverá começar a desenhar no ponto (%d,%d).', $ponto['x'], $ponto['y']);

echo PHP_EOL;

$time_elapsed_secs = microtime(true) - $start;

printf('Tempo de execução: %fs.', $time_elapsed_secs);

echo PHP_EOL;