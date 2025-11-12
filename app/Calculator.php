<?php

namespace App;

class Calculator
{
    /**
     * Addition de deux nombres
     */
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Soustraction de deux nombres
     */
    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    /**
     * Multiplication de deux nombres
     */
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * Division de deux nombres
     *
     * @throws \InvalidArgumentException
     */
    public function divide(float $a, float $b): float
    {
        if ($b === 0.0) {
            throw new \InvalidArgumentException('Division par zéro impossible');
        }

        return $a / $b;
    }
}