<?php

namespace App\Http\Controllers;

use App\Catalogs\Catalog;
use App\Catalogs\Product;
use App\Factories\SorterFactory;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SortingController extends Controller
{
    use JsonResponseTrait;

    public function __construct(
        private readonly SorterFactory $sorterFactory,
        public Product $products
    ) {}

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $catalog = new Catalog($this->products->get());

            $sorter = $this->sorterFactory->resolve($request->input('sorting_type'));

            $sortedProducts = $catalog->getProducts($sorter);

            return $this->successResponse($sortedProducts);
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
