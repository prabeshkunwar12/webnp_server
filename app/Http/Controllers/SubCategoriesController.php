<?php

namespace App\Http\Controllers;

use App\Models\SubCategories;
use App\Models\Categories;
use App\Http\Requests\StoreSubCategoriesRequest;
use App\Http\Requests\UpdateSubCategoriesRequest;
use Brick\Math\BigInteger;

class SubCategoriesController extends Controller
{
    public function getAllSubCategories()
    {
        $categories = null;
        $categories = Categories::orderBy('id', 'asc')
        ->get();
        
        return $categories;
    } 

    public function getSubCategoriesByCategory(Categories $category)
    {
        $subCategories = null;
        $subCategories = SubCategories::orderBy('id', 'asc')
        ->where('categories_id', $category->id)
        ->get();
        
        return $subCategories;
    }
    
    public function getSubCategoryByID(int $id)
    {
        return SubCategories::findOrFail($id);
    }

    // returns the category of subcategory
    public function category(SubCategories $subCategories)
    {
        return $subCategories->category();
    }
}
