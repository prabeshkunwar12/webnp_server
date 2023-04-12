<?php 
namespace resources\views;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubCategoriesController;


@include ('bootstrapcdn.blade.php');

$homeCon = new HomeController();
$postCon = new PostsController();
$subCatCon = new SubCategoriesController();
setcookie('name1',2,600);
?>
<!DOCTYPE HTML>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">
    <script class="u-script" type="text/javascript" src="AboutUsResource/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="AboutUsResource/javascript.js" defer=""></script>
    <head>
        <title>WebNp - Homepage</title>
    </head>

    <body>
        <?php @include 'header.blade.php'?>

        <div class="intro">
            <div class="intro-image">
                <img src="/imgs/logo.png" alt="Error" class="img-fluid">
            </div>
        </div>

        <figure class="text-center">
            <blockquote class="blockquote">
              <p>"It is complicated knowing where to go for reliable information in clinical practice"</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Jodi,<cite title="Source Title">NP Student</cite>
            </figcaption>
          </figure>
          
        <!-- Recently Added Articles -->
        <div>
            <div class = "container recentarticlessection">
                <div class="recentarticlesheader">
                    <h3>
                        <b>Recent Posts</b>
                    </h3>
                    <div class="seeall_main">
                            <div class="see_all"><a href="/articles">SHOW ALL</a></div>
                    </div>
                    <p>Take a Look at our Recent Posts, Vetted and Approved by Medical Professionals! </p>
                    <hr>
                </div>
                
                    <div class="row">
                        <?php
                            for($i=1; $i<=5; $i++){
                                echo'
                                    <div class = "recentarticle-main vanish">
                                        <a href="//">
                                        <div class="recentarticle-img">
                                        <img src = "../imgs/wellness-mental-health.jpg" >
                                        </div>
                                        <div class="recentcaption">
                                            A look at the effects of smoking
                                        </div>
                                        </a>
                                        
                                        <div class="seemore_main">
                                            <div class="see_more"><a href="//">SEE MORE</a></div>
                                        </div>
                                    </div>
                                ';
                            }
                        ?>                             
                    
                </div>
            </div>
            </div>
            <!-- List of Categories -->
            <div class="container topicsheader">
                <h3>
                    <b>Medical Categories</b>
                </h3>
                <div class="seeall_main">
                    <div class="see_all"><a href="/articles">SHOW ALL</a></div>
                </div>
                    
            <hr>
            </div> 
            
                <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            
                            <?php
                                for($i=1; $i<=16; $i++){
                                    echo'
                                        <li>
                                            <a href = "#">
                                                <h5>&#8827 '.$subCatCon->getSubCategoryByID($i)->name.'</h5>
                                            </a>
                                        </li>
                                    ';
                                }
                            ?>
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>

            <!-- Most Viewed Section -->
        <div style="background-color: var(--tertiary);">
        <div class="container recentarticlessection " >
        <div class="recentarticlesheader">
            <h3>
                <b>Popular Posts</b>
            </h3>
            <div class="seeall_main">
                <div class="see_all"><a href="/articles">SHOW ALL</a></div>
            </div>
            <p>Here are the posts most viewed by visitors to our site! </p>
            <hr>
        </div>
        <div class="row">
            <?php
                for($i=1; $i<=5; $i++){
                    echo'
                        <div class = "recentarticle-main vanish">
                            <a href="//">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                A look at the effects of smoking
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="//">SEE MORE</a></div>
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>  
    </div>
    </div>    
           



            <!-- Introduction -->
                <div class="container-fluid bg-light shadow">
            <h1 style="text-align: center;">Introduction</h1>

            <div class="row" >
                <div class="col-3 p-3" style="text-align: center;"><img class="rounded-circle" src="imgs/gail1.jpg"></div>

                <div class="col-9 p-3" text-align="center">
                    <i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                    </i>
                </div>
            </div>
        </div>
        <br><br>

        
        <?php @include 'Footer/footer.blade.php' ?>
        </body>
    </html>
