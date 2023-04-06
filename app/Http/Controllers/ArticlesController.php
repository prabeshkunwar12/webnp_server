<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use Brick\Math\BigInteger;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function getArticlesBySubCategoryID(int $subCategoryID)
    {
        $articles = Articles::whereIn('id', function($query) use ($subCategoryID) {
            $query->select('article_id')
                  ->from('subcategory_articles_pivot')
                  ->where('sub_category_id', $subCategoryID);
        })->get();
        
        return $articles;
        
    }

    public function getDistinctGroups(Collection $articles)
    {
        $groups = $articles->pluck('group')->unique();
        
        return $groups;
        
    }
    public function setSessionValue(Request $request)
    {
        session(['subCategory' => $request->input('subCategory')]);
        return response()->json(['subCategory' => session('subCategory')]);
    }
    
    //public function setSessionValue(Request $request)
    //{
    //    $request->session()->put('sub_category_id', $request->input('subCategory'));
//
    //    $data = [
    //        'message' => 'Session saved successfully.',
    //        'sub_category_id' => $request->input('subCategory')
    //    ];
//
    //    return response()->json($data);
    //}

}
