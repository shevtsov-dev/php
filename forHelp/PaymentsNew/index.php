<?php

use Payments\Class\Asia\Alfa;
use Payments\Class\Asia\Tinkof;
use Payments\Class\EU\Tinkof as TAsia;
use Payments\Singleton\DataBase;
use Payments\Static\OldConnectEx;
use Payments\Static\Price;
use Payments\Static\Counter;
use Payments\Static\OldConnect;

/*include './Interface/Payment.php';
include './Abstract/PaymentsEU.php';
include './Class/Asia/Tinkof.php';
include './Class/EU/Tinkof.php';
include './Trait/Order.php';
include './Static/Price.php';
include './Static/Counter.php';

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
    ->send();*/

//$objPrice = new Price();
//$objPrice->price;//обратиться к свойству
//$objPrice->getPrice();//обратиться к методу
//echo Price::convertToRu(123);//вызов статического метода

/*echo Counter::$count . PHP_EOL;
Counter::increment();
echo Counter::$count . PHP_EOL;*/

/*$counter = new Counter();
$counter->plus();
$counter->decrement();

$counter2 = new Counter();
$counter2->plus();
$counter2->decrement();

echo Counter::$count . PHP_EOL;
echo Counter::NAME . PHP_EOL;*/

//include './Singleton/DataBase.php';

//class 1
//$db = DataBase::getInstance();
//class 2
//$db1 = DataBase::getInstance();

include './Static/OldConnect.php';

OldConnect::test();
OldConnectEx::test();
$obj = new OldConnectEx();

(new Alfa())->validation();
