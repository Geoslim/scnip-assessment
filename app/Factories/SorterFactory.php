<?php

namespace App\Factories;

use App\Sorters\PriceSorter;
use App\Sorters\SalesPerViewSorter;

class SorterFactory
{
    /**
     * @param string|null $sortingKey
     * @return PriceSorter|SalesPerViewSorter
     */
    public function resolve(?string $sortingKey): PriceSorter|SalesPerViewSorter
    {
        return match ($sortingKey) {
            'price' => new PriceSorter(),
            'sales_per_view' => new SalesPerViewSorter(),
            default => throw new \InvalidArgumentException('Invalid sorting key: ' . $sortingKey), // could also decide to fetch the unsorted products as default
        };
    }
}
