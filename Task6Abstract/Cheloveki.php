<?php
include './Interface/BaseInfo.php';

use Class\Friends;

include './Abstract/Human.php';
include './Class/Friends.php';





$roma = new Friends('Roman', 'Shevtsov', 26, 'Male');
$roma->getBaseInfo();
$roma->setHeight(181);
$roma->setWeight(94);
$roma->setLogin('Ramirez');
$roma->setPassword('123456');
$roma->setGmail('roman.shevtsov@gmail.com');
$roma->setNumber('+375255403943');
$roma->getAllInfo();

$nick = new Friends('Nick', 'A______', 27, 'Male');
$nick->getBaseInfo();

$artem = new Friends('Artem', 'S______', 27, 'Male');
$artem->getBaseInfo();

$jack = new Friends('Eugen', 'S______', 27, 'Male');
$jack->getBaseInfo();

$maxim = new Friends('Maxim', 'A______', 25, 'Male');
$maxim->getBaseInfo();

$tanya = new Friends('Tanya', 'S______', 25, 'Female');
$tanya->getBaseInfo();

$sergey = new Friends('Sergey', 'M______', 27, 'Male');
$sergey->getBaseInfo();
