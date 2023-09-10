<?php

namespace Youngsayora\Zandstra\Singleton;

class Singleton
{
    private array $props = [];
    private static Singleton $instance;

    private function __construct()
    {      
    }
    
    public static function getInstance(): Singleton
    {
        if(empty(self::$instance))
        {
            self::$instance = new Singleton;
        }

        return self::$instance;
    }

    public function setProperty(string $key, string $val): void 
    {
        $this->props[$key] = $val;
    }

    public function getProperty(string $key): string 
    {
        return $this->props[$key];
    }
}