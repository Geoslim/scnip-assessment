<?php

namespace App\Catalogs;

class Product
{
    /**
     * Serves as my product data instead of a DB
     * @return array[]
     */
    public function get(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Alabaster Table',
                'price' => 12.99,
                'created' => '2019-01-04',
                'sales_count' => 32,
                'views_count' => 730,
            ],
            [
                'id' => 2,
                'name' => 'Zebra Table',
                'price' => 44.49,
                'created' => '2012-01-04',
                'sales_count' => 301,
                'views_count' => 3279,
            ],
            [
                'id' => 3,
                'name' => 'Coffee Table',
                'price' => 10.00,
                'created' => '2014-05-28',
                'sales_count' => 1048,
                'views_count' => 20123,
            ],
            [
                'id' => 4,
                'name' => 'Blue Table',
                'price' => 70.00,
                'created' => '2015-09-18',
                'sales_count' => 108,
                'views_count' => 2023,
            ],
            [
                'id' => 5,
                'name' => 'Media Table',
                'price' => 74.67,
                'created' => '2021-01-12',
                'sales_count' => 418,
                'views_count' => 14099,
            ],
            [
                'id' => 6,
                'name' => 'Plain Table',
                'price' => 814.73,
                'created' => '2021-01-12',
                'sales_count' => 418,
                'views_count' => 14099,
            ],
            [
                'id' => 7,
                'name' => 'Round Table',
                'price' => 149.03,
                'created' => '2001-04-25',
                'sales_count' => 418,
                'views_count' => 14099,
            ]
            // add more
        ];
    }
}
