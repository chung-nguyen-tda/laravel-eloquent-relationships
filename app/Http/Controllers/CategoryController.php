<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getProductsByCategory($id, Request $request) {
        $products = Category::find($id)->products;
        return $products;
    }
}
