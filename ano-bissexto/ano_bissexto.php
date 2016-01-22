#!/usr/bin/php5
<?php

$start = microtime(true);

require_once 'src/AnoBissexto.php';

AnoBissexto::ehBissexto($argv[1]);

echo PHP_EOL;

$time_elapsed_secs = microtime(true) - $start;

printf('Tempo de execução: %fs.', $time_elapsed_secs);

echo PHP_EOL;