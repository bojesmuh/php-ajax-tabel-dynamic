<?php

$item_id = $_POST['item_id'];
$qty = $_POST['qty'];
$data = [];
foreach ($item_id as $key => $val) {
    $data[] = [
        'item_id' => $val,
        'qty' => $qty[$key],
    ];
}

echo json_encode($data);