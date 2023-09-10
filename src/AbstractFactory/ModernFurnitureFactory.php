<?php

namespace Youngsayora\Zandstra\AbstractFactory;

class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair {
        return new ModernChair();
    }

    public function createTable(): Table {
        return new ModernTable();
    }
}