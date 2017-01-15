<?php
// Set up the ES client object to connect to our ES server
define('ELASTIC_HOST', 'localhost');
$client = new Elasticsearch\Client(['hosts' => [ELASTIC_HOST]]);

// Becomes the 'channel' field in ES
$logger = new Monolog\Logger('Applogger (staging)');

// Format output in logstash output format (good for ES!)
// Argument here becomes the 'type' field in ES
$formatter = new Monolog\Formatter\LogstashFormatter('applogging');

// Bind the es client object to the ES handler
$handler = new Monolog\ElasticLogstashHandler($client);

// Format the log output with the logstash formatter object
$handler->setFormatter($formatter);

// Push the new handler onto the logger's stack
$logger->pushHandler($handler);
