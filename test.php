<?php
    include "DtkSdk.php";
    $client = new GetTipList();

    $client->setAppKey('5ff42cda0fd35');
    $client->setAppSecret('28318c5c2ea7b5c57fa7fab0a990db7f');
    $client->setVersion('v3.0.0');

    $res = $client->setParams([])->request();
    var_dump($res);