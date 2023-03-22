<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    /**
     * Returns the view associated with the recently added page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        
        return view('/welcome');
    }

    
    
    /**
     * Retrieves a Category from the database based on given category id
     * @param int $categoryNum the id of the category
     * @return mixed Returns the category if it is in the database, otherwise it returns null
     */
    public function getCategory(int $categoryNum)
    {
        //Database that controller will check for the articles
        $tableName = 'categories';

        $category = null;
        
        //array of collection
        $categories = DB::table($tableName)
            ->where('id', $categoryNum)
            ->get();

        if ($categories->isNotEmpty()) {
            if($categories->has(0)){
                $category = $categories[0];
            }
        }

        return $category;
    }

    public function getCategoryName(int $categoryNum){

        $category = $this->getCategory($categoryNum);

        //if no categories found
        if(!$category)
            return "Default Name";
        
        return $category->name;
    }

    public function getCategoryContent(int $categoryNum){

        $category = $this->getCategory($categoryNum);

        //if no categories found
        if(!$category)
            return "Default Content";
        return $category->content;
    }

}
