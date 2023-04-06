<?php

namespace App\Http\Controllers;

use App\Imports\PostsImport;
use App\Models\Posts;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Cookie;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\View\View;

use function PHPUnit\Framework\isNull;

class PostsController extends Controller
{
    /**
     * Summary of get
     * @param int $num the id of the post being retrieved. 
     * @return mixed 
     */
    public function get(int $articleNum)
    {
        $post = null;
        try {
            $post = Posts::where([
                ['id', '=', $articleNum]
            ])->firstOrFail();
        } catch (\Exception $e) {
            
            $post = null;
        }

        
        
               
        return $post;
    }

    
/**
     * Summary of get
     * @param int $num the id of the post being retrieved. 
     * @return mixed 
     */
    public function getRecentPost(int $postNum)
    {
        $post = null;
        try {
            $posts = Posts::orderBy('id', 'desc')
            ->limit($postNum+1)
            ->get();

            if ($posts->isNotEmpty()) {
                if($posts->has($postNum-1)){
                    $post = $posts[$postNum-1];
                }
                else
                $post = $posts[0];
                }  
        } catch (\Exception $e) {
            
            $post = null;
        }

        

         
        return $post;
    }

    public function getMostViewedPost(int $postNum)
    {
        $maxPosts = 5;
        $post = null;

        try {
            $posts = Posts::orderBy('view_count', 'desc')
            ->limit($maxPosts)
            ->get();

            if ($posts->isNotEmpty()) {
                if($posts->has($postNum-1)){
                    $post = $posts[$postNum-1];
                }
                else
                $post = $posts[0];
            }
        } catch (\Exception $e) {
            
            $post = null;
        }

        

        
        return $post;
    }

    public function getMostViewedPostContent(int $postNum){
        
        $post = $this->getMostViewedPost($postNum);

        //If no articles found
        if(!$post)
            return "Default Content";
        
        //$post->incrementViewCount();
        return $post->content;
    
    }

    public function getRecentPostName(int $articleNum){

        $post = $this->getRecentPost($articleNum);

        //if no articles found
        if(!$post)
            return "Default Name";

        return $post->title;
    }

    public function getRecentPostContent(int $articleNum){
        
        $post = $this->getRecentPost($articleNum);

        //If no articles found
        if(!$post)
            return "Default Content";
        
        
        //$post->incrementViewCount();
        return $post->content;
    
    }

    public function getPostContent(int $articleNum){
        
        $post = $this->getRecentPost($articleNum);

        //If no articles found
        if(!$post)
            return "Default Content";
        
        if(! Auth::check()){//guest user identified by ip
            $cookie_name = (Str::replace('.','',(request()->ip())));
            } else {
                $cookie_name = (Auth::user()->id);//logged in user, change later!
            }
            
        if(!isset($_COOKIE[$cookie_name])){ //check if cookie is not set
            
            $post->incrementViewCount();
            setcookie($cookie_name, 1, time() + 60, '/');
        }
        
        return response($post->content);
        
    }

    public function importPosts(Request $request) 
    {
        $request->validate([
            'excelFile' => 'required|mimes:xlsx,csv,xls,xlx'
        ]);

        Excel::import(new PostsImport, $request->file('excelFile'));
        
        return view('/homepage');
    }

    public function create(){
        return view('/homepage');
    }

    
}
