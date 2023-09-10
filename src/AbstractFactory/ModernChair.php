<?php

namespace Youngsayora\Zandstra\AbstractFactory;

class ModernChair implements Chair 
{
    public function sitOn(): string {
        return "You're sitting on a modern chair.";
    }
}