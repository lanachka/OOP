<?php

include __DIR__. '/vendor/autoload.php';

$logger = new \logger\Logger();
$logger->log('critical', 'Тyт все  полетело', ['hello'=>'how are you']);
$logger->info('just info', ['hello'=>'how are you']);