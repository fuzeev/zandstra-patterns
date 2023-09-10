<?php

namespace Youngsayora\Zandstra\AbstractFactory;

class ClassicFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair {
        return new ClassicChair();
    }

    public function createTable(): Table {
        return new ClassicTable();
    }
}