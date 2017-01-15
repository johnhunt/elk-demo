<?php
// Brings in dependencies
require_once('vendor/autoload.php');

// Creates our logger object
require_once('logger-setup.php');

// Throw a silly warning message
$logger->warn('Ledger mismatch! Account not balanced!',
['context' => 'accounting']);
die('ook');

// Throw a silly error message
$logger->error('Unhandled exception! Procotol failure!',
['context' => 'exceptions']);

// On one page visit this might happen:
$logger->info('A/B test conversion hit',
['context' => 'abtests',
'testcase' => 'Button colours',
'data' => 'Red']);

// On another page this might happen (50/50 a/b test)
$logger->info('A/B test conversion hit',
['context' => 'abtests',
'testcase' => 'Button colours',
'data' => 'Green']);


// Send the user a nice, vague message
echo 'Error! Webpage not working.';
