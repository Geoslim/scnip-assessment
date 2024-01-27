<?php

namespace App\Catalogs;

use App\Interfaces\SortingInterface;

class Catalog
{
    public function __construct(private array $products)
    {
    }

    /**
     * @param SortingInterface $sorter
     * @return array
     */
    public function getProducts(SortingInterface $sorter): array
    {
        return $sorter->sort($this->products);
    }
}
