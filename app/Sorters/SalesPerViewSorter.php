<?php

namespace App\Sorters;

use App\Interfaces\SortingInterface;

class SalesPerViewSorter implements SortingInterface
{
    public function sort(array $products): array
    {
        usort($products, function ($productA, $productB) {
            $ratioA = $productA['sales_count'] / $productA['views_count'];
            $ratioB = $productB['sales_count'] / $productB['views_count'];
            return $ratioA <=> $ratioB;
        });

        return $products;
    }
}
