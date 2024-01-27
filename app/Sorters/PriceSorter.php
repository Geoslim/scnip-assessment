<?php

namespace App\Sorters;

use App\Interfaces\SortingInterface;

class PriceSorter implements SortingInterface
{
    public function sort(array $products): array
    {
        usort($products, function ($productA, $productB) {
            return $productA['price'] <=> $productB['price'];
        });

        return $products;
    }
}
