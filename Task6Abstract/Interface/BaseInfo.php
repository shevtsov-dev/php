<?php

namespace Interface;

interface BaseInfo
{
    public function getGmail();
    public function setGmail(string $gmail);
    public function getLogin();
    public function setLogin(string $login);
    public function getPassword();
    public function setPassword(string $password);
    public function getHeight();
    public function setHeight(int $height);
    public function getWeight();
    public function setWeight(int $weight);
    public function getNumber();
    public function setNumber(string $number);
    public function getBaseInfo();
    public function getAllInfo();
}
