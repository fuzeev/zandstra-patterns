<?php

namespace Youngsayora\Zandstra\AbstractFactory;

class ModernTable implements Table 
{
    public function putSomethingOn(): string 
    {
        return "You've put something on a modern table.";
    }
}