--TEST--
AmazonSQSQueue::list_queues, with prefix

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// List queues with prefix 'a'
	$sqs = new AmazonSQSQueue();
	$response = $sqs->list_queues('a');

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)
