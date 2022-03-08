<?php

$userIds = ['U01', 'U02', 'U03'];
$orderIds = ['T01', 'T02', 'T03, T04'];

$userOrders = [
    ['userId' => 'U01', 'orderIds' => ['T01', 'T02']],
    ['userId' => 'U02', 'orderIds' => []],
    ['userId' => 'U03', 'orderIds' => ['T03']],
];


$userData = ['U01' => 'Tom', 'U02' => 'Sam', 'U03' => 'John'];
$orderData = [
    'T01' => ['name' => 'A', 'price' => 499],
    'T02' => ['name' => 'B', 'price' => 599],
    'T03' => ['name' => 'C', 'price' => 699],
    'T04' => ['name' => 'D', 'price' => 799]
];

$orderByUserId = [];
foreach ($userOrders as $userOrderData) {
    $orderByUserId[$userOrderData['userId']] = $userOrderData['orderIds'];
}
$result = [];
foreach ($userData as $userId => $userName) {
    if (!empty($orderByUserId[$userId])) {
        $userOrderArray = [];
        foreach ($orderByUserId[$userId] as $orderId) {
            $userOrderArray[] = ['id' => $orderId, 'name' => $orderData[$orderId]['name'], 'price' => $orderData[$orderId]['price']];
        }
        $result[] = [
            'user' => ['id' => $userId, 'name' => $userName],
            'orders' => $userOrderArray
        ];
    } else {
        $result[] = [
            'user' => ['id' => $userId, 'name' => $userName],
            'orders' => []
        ];
    }
}
