<?php

namespace Youngsayora\Zandstra\Strategy;

class AscBubbleSortStrategy implements SortingStrategy 
{
    public function sort(array $data): array 
    {
        $n = count($data);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    // меняем элементы местами
                    $temp = $data[$j];
                    $data[$j] = $data[$j + 1];
                    $data[$j + 1] = $temp;
                }
            }
        }
        return $data;
    }
}