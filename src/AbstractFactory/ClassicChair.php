<?php

namespace Youngsayora\Zandstra\AbstractFactory;

class ClassicChair implements Chair 
{
    public function sitOn(): string {
        return "You're sitting on a classic chair.";
    }
}