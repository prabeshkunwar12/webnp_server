<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getAllCategories()
    {
        $categories = null;
        $categories = Categories::orderBy('id', 'asc')
        ->get();
        
        return $categories;
    } 
}
