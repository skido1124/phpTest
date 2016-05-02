<?php
require '../../vendor/autoload.php';

use Aws\Sqs\SqsClient;

// credentials から読み込み
$client = new SqsClient([
    'profile' => 'test',
    'region'  => 'ap-northeast-1',
    'version' => 'latest'
]);


try {
    // createQueue
    $queue = $client->createQueue([
        'QueueName' => 'queue-test',
        //'Attributes' => [
        //    'DelaySeconds'       => 5,
        //    'MaximumMessageSize' => 4096, // 4 KB
        //    'VisibilityTimeout' => 2 * 60 * 60, // 2 min
        //]
    ]);
    $queueUrl = $queue->get('QueueUrl');
    print $queueUrl;

    // send Message
    $client->sendMessage(array(
        'QueueUrl'    => $queueUrl,
        'MessageBody' => 'キュ〜〜',
    ));

    // receive Message
    $receive = $client->receiveMessage(array(
        'QueueUrl' => $queueUrl,
    ));

    if (is_null($receive['Messages'])) {
        throw new Exception('receive messages null');
    }
    foreach ($receive['Messages'] as $message) {
        echo $message['Body'];
    }

} catch (Exception $e) {
    print_r($e->getMessage());
}
