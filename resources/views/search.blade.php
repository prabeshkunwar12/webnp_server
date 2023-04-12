<?php 
namespace resources\views;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
$postCon = new PostsController();
@include ('bootstrapcdn.blade.php');




?>
<!DOCTYPE HTML>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">

    <head>
        <title>WebNp - Search Results</title>
    </head>

    <body>
        <?php @include 'header.blade.php'?>
                <!-- List of Categories -->
            <div class="container topicsheader">
                <h3>
                    <b>Search Results</b>
                </h3>
                
                    
            <hr>
            
            @if (!$result)
            
                <h5> No Results Found</h5>

            @else

                @foreach ($result as $post)
                

                <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="{{ $post->content }}">
                                    <h5>&#8827   {{ $post->id }}</h5> 
                                </a>
                            </li>
                            
                    </div>
                </ul>
                    </ul>
                    <hr>
                </div>
                <br><br>
                @endforeach

            {{ $result->appends(['search_query'=>request()->query('search_query')])->links() }}
        @endif
        <?php @include 'Footer/footer.blade.php' ?>
    </body>
</html>
