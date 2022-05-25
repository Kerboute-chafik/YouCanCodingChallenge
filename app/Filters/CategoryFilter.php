<?php


namespace App\Filters;

use App\Models\Product;

class CategoryFilter
{
    public function filter($id)
    {
        $products = Product::where('category_id',$id)->get();
        return $products;
    }
}
