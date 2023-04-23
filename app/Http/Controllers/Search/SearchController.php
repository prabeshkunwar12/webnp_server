<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function create(){
        return view('search');
    }

    
    public function display(Request $request){

        $search = $request->query('search_query');
        
        if($search){
           $result = DB::table('Posts')
                ->where('Posts.title', 'LIKE', "%$search%")
                //->limit(5)
                ->simplePaginate(5);

            $resultCount = DB::table('Posts')
            ->where('Posts.title', 'LIKE', "%$search%")
            ->count();
            
            if($resultCount){
                return view('search')
                ->with('result', $result);
            }
            else{
                return view('search')->with('result', 0);
            }
        }
        else{
            return view('homepage');
        }
        
        
    }
}
