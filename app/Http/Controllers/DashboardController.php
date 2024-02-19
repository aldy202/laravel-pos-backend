<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        //pagination
         // Menghitung total data pengguna
        $totalUsers = User::where('role','=','user')->count();
        $totalAdmin = User::where('role','=','admin')->count();
        $totalStaf = User::where('role','=','staff')->count();

        $totalProducts = Product::count();
        $totalCategories = Category::count();

        return view('pages.dashboard', compact('totalUsers', 'totalAdmin','totalStaf','totalProducts','totalCategories'));
    }
}
