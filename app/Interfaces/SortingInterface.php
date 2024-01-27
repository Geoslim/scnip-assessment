<?php

namespace App\Interfaces;

interface SortingInterface
{
    /**
     * @param array $products
     * @return array
     */
    public function sort(array $products): array;
}
