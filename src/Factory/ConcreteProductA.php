<?php

namespace Youngsayora\Zandstra\Factory;

class ConcreteProductA implements Product
{
    public function getName(): string {
        return 'ConcreteProductA';
    }
}