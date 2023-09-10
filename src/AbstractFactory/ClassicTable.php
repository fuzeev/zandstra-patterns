<?php

namespace Youngsayora\Zandstra\AbstractFactory;

class ClassicTable implements Table 
{
    public function putSomethingOn(): string 
    {
        return "You've put something on a classic table.";
    }
}
