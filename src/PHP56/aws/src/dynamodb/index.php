<?php
require '../../vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;

// credentials から読み込み
$client = new DynamoDbClient([
    'profile' => 'test',
    'region'  => 'ap-northeast-1',
    'version' => 'latest'
]);


try {
    // getItem
    $options = [
        'TableName' => 'Test',
        'Key' => [
            'id' => ['N' => '2'] // キー id を String の test_id で検索
        ],
        'ConsistentRead' => false, // true:整合性強。必ず最新。false: 整合性弱。最新とは限らないが速い
    ];

    // $item = $client->getItem($options);
    // print_r($item);

    // query
    $options = [
        'TableName' => 'Test',
        // 'ScanIndexForward' => true, // true:昇順、false: 降順
        // 'IndexName' => 'index',
        'KeyConditions' => [
            'id' => [
                'AttributeValueList' => [
                    ['N' => 3],
                ],
                'ComparisonOperator' => 'EQ', // 比較演算子 EQ: =
            ]
        ]
    ];
    // $query = $client->getIterator('Query', $options);
    // var_dump($query);

    // putItem
    $options = [
        'TableName' => 'Test',
        'Item' => [
            'id' => ['N' => '6'],
            'Score' => ['N' => '20'],
            'first_name' => ['S' => 'RokuTarou'],
            'last_name' => ['S' => 'Suzuki'],
        ]
    ];
    // $client->putItem($options);

    // updateItem
    $options = [
        'TableName' => 'Test',
        'Key' => [
            'id' => ['N' => '6'],
        ],
        'AttributeUpdates' => [
            'last_name' => [
                'Action' => 'PUT', // PUT:上書き、ADD:属性追加、DELETE:削除
                'Value' => ['S' => 'Satou']
            ],
        ]
    ];
    // $client->updateItem($options);

} catch (Exception $e) {
    print_r($e->getMessage());
}
