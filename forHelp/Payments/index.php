<?php

use Payments\Class\Asia\Tinkof;
use Payments\Class\EU\Tinkof as TAsia;

include './Interface/Payment.php';
include './Abstract/PaymentsEU.php';
include './Class/Asia/Tinkof.php';
include './Class/EU/Tinkof.php';

$tinkoffEU = new Tinkof();

//TODO: Поправь это
$tinkoffEU->setUserId(1)
    ->setPrice(1234)
    ->setOrderId(6)
    ->setData(['test' => 'test'])
    ->send();

$tinkoffASIS = new TAsia();

$tinkoffASIS->setUserId(1)
    ->setPrice(1234)
    ->setOrderId(6)
    ->setData(['test' => 'test'])
    ->send();

