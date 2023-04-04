<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    public function getArticlesBySubCategory(SubCategories $subCategory)
    {
        $articles = null;
        $articles = DB::table('subcategory_articles_pivot')->where(["sub_category_id", "=", $subCategory->id])->get(["article_id"]);
        return $articles;
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
