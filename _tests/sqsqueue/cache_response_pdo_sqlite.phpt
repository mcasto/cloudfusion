--TEST--
AmazonSQSQueue::cache_response CachePDO:SQLite

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';
	$sqs = new AmazonSQSQueue();

	// First time pulls live data
	$response = $sqs->cache_response('list_queues', 'pdo.sqlite:' . dirname(dirname(__FILE__)) . '/_cache/sqlite.db', 10);
	var_dump($response->isOK());

	// Second time pulls from cache
	$response = $sqs->cache_response('list_queues', 'pdo.sqlite:' . dirname(dirname(__FILE__)) . '/_cache/sqlite.db', 10);
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)
bool(true)
