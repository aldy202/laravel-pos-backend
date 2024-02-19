<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::paginate(10);
        $categories = Category::all();
        return response()->json([
            'status' => 'success',
            'data' => $categories
        ], 200);
    }
}
