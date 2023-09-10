<?php

namespace Youngsayora\Zandstra\Strategy;

class SortingContext {
    private $strategy;

    public function __construct(SortingStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(SortingStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function executeStrategy(array $data): array {
        return $this->strategy->sort($data);
    }
}