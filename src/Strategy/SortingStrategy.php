<?php

namespace Youngsayora\Zandstra\Strategy;

interface SortingStrategy 
{
    public function sort(array $data): array;
}