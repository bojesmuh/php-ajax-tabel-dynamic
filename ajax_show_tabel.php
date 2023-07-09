<?php

$data = [[
    'item_id' => 'a1',
    'qty' => 2,
    'warehouse' => 'GUDANG'
],
[
    'item_id' => 'a2',
    'qty' => 1,
    'warehouse' => 'GUDANG'
]
];

$result = [
    'code' => '000',
    'data' => $data
];

echo json_encode($result);