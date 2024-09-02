<?php

namespace Payments\Interface;

interface Payment
{
    public const API_KEY = '';
    public function validation($data): bool;
}