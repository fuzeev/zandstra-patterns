<?php

namespace Youngsayora\Zandstra\Strategy;

class DescPhpDefaultSortStrategy implements SortingStrategy 
{
    public function sort(array $data): array {
        rsort($data);
        return $data;
    }
}