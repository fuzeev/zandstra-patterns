<?php

namespace Youngsayora\Zandstra\AbstractFactory;

interface FurnitureFactory 
{
    public function createChair(): Chair;
    public function createTable(): Table;
}