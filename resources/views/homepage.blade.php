<?php 
namespace resources\views;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\ArticlesController;

@include ('bootstrapcdn.blade.php');

$homeCon = new HomeController();
$postCon = new PostsController();

$subCatCon = new SubCategoriesController();
$articleCon = new ArticlesController();
setcookie('name1',2,600);

?>
<!DOCTYPE HTML>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script class="u-script" type="text/javascript" src="AboutUsResource/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="AboutUsResource/javascript.js" defer=""></script>
    <head>
        <title>WebNp - Homepage</title>
    </head>

    <body>
        <?php @include 'header.blade.php'?>

        <div class="intro-image">
            <img src="/imgs/logo.png" alt="Error" class="img-fluid">

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
        <div class="my-div" style="padding-top: 7rem;">
            <div class = "container recentarticlessection">
                <div class="recentarticlesheader">
                    <h3>
                        <b>Recent Articles</b>
                    </h3>
                    <div class="seeall_main">
                            <div class="see_all"><a href="/articles">SHOW ALL</a></div>
                    </div>
                    <hr>
                </div>

                <div class="carousel">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                    <div>                                
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" >
                        <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                            <div class="carousel-item active">
                                <section class="section">
                                    <div class="container-fluid mx-auto">
                                        <div class="row text-center">
                                            
                                            <?php
                                                for ($i = 1; $i <= 3; $i += 1){
                                                    echo '
                                                        <div class="col-lg-4">
                                                            <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                                                console.log(\'starting\');
                                                                $.ajax({
                                                                    
                                                                    url: \'/save_session_articles\',
                                                                    type: \'POST\',
                                                                    data: {subCategory: \'' . strval($i) . '\'},
                                                                    headers: {
                                                                        \'X-CSRF-TOKEN\': $(\'meta[name=\\\'csrf-token\\\']\').attr(\'content\')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data.subCategory);
                                                                        window.location.href = \'/articleList\';
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log(\'Error saving session: \' + errorThrown);
                                                                    }
                                                                });
                                                            ">
                                                    ';
                                                    $imagePath = "imgs/ArticlesImgs/".trim($subCatCon->getSubCategoryByID($i)->name).".jpg"; 

                                                    if (file_exists($imagePath)) {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="'.$imagePath.'" alt="'.$subCatCon->getSubCategoryByID($i)->img_alt.'">
                                                        ';
                                                    } else {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                                        ';
                                                    }
                                                    echo '
                                                                
                                                                <span class="card-body mt-auto">
                                                                    <h4 class="title mt-auto">'.$subCatCon->getSubCategoryByID($i)->name.'</h4>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>

                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="carousel-item">
                                <section class="section">
                                    <div class="container">
                                        <div class="row text-center">
                                            <?php
                                                for ($i = 4; $i <= 6; $i += 1){
                                                    echo '
                                                        <div class="col-lg-4">
                                                            <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                                                console.log(\'starting\');
                                                                $.ajax({
                                                                    
                                                                    url: \'/save_session_articles\',
                                                                    type: \'POST\',
                                                                    data: {subCategory: \'' . strval($i) . '\'},
                                                                    headers: {
                                                                        \'X-CSRF-TOKEN\': $(\'meta[name=\\\'csrf-token\\\']\').attr(\'content\')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data.subCategory);
                                                                        window.location.href = \'/articleList\';
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log(\'Error saving session: \' + errorThrown);
                                                                    }
                                                                });
                                                            ">
                                                    ';
                                                    $imagePath = "imgs/ArticlesImgs/".trim($subCatCon->getSubCategoryByID($i)->name).".jpg"; 

                                                    if (file_exists($imagePath)) {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="'.$imagePath.'" alt="'.$subCatCon->getSubCategoryByID($i)->img_alt.'">
                                                        ';
                                                    } else {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                                        ';
                                                    }
                                                    echo '
                                                                
                                                                <span class="card-body">
                                                                    <h4 class="title mt-auto">'.$subCatCon->getSubCategoryByID($i)->name.'</h4>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="carousel-item">
                                <section class="section">
                                    <div class="container">               
                                        <div class="row text-center">
                                            <?php
                                                for ($i = 7; $i <= 9; $i += 1){
                                                    echo '
                                                        <div class="col-lg-4">
                                                            <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                                                console.log(\'starting\');
                                                                $.ajax({
                                                                    
                                                                    url: \'/save_session_articles\',
                                                                    type: \'POST\',
                                                                    data: {subCategory: \'' . strval($i) . '\'},
                                                                    headers: {
                                                                        \'X-CSRF-TOKEN\': $(\'meta[name=\\\'csrf-token\\\']\').attr(\'content\')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data.subCategory);
                                                                        window.location.href = \'/articleList\';
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log(\'Error saving session: \' + errorThrown);
                                                                    }
                                                                });
                                                            ">
                                                    ';
                                                    $imagePath = "imgs/ArticlesImgs/".trim($subCatCon->getSubCategoryByID($i)->name).".jpg"; 

                                                    if (file_exists($imagePath)) {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="'.$imagePath.'" alt="'.$subCatCon->getSubCategoryByID($i)->img_alt.'">
                                                        ';
                                                    } else {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                                        ';
                                                    }
                                                    echo '
                                                                
                                                                <span class="card-body">
                                                                    <h4 class="title mt-auto">'.$subCatCon->getSubCategoryByID($i)->name.'</h4>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                    </div>

                                </section>
                            </div>
                        </div>    
                    </div>
                    
                </div>
            </div>    
        </div> 
        <!--Ends here-->    
            

        <!-- List of Categories -->
        <div class="container topicsheader">
            <h3>
                <b>Recent Articles</b>
            </h3>
            <div class="seeall_main">
                <div class="see_all"><a href="/articles">SHOW ALL</a></div>
            </div>
            <p>Take a Look at our Recent Posts, Vetted and Approved by Medical Professionals! </p>   
        <hr>
        </div> 
        
        <div class = "topicsbox container" style="padding-bottom: 7rem;">
            <ul class="topicslist">
                <div class="topicscol" style="background-color: #423ba8; color: #ffffff;">
                    
                    <?php
                        $articlesList = $articleCon->getRecentArticles();
                        foreach($articlesList as $articles)
                        {
                            echo'
                                <li>
                                    <div >
                                        <a href = "'.$articles->location.'">
                                            <h5>&#8827 '.$articles->name.'</h5>
                                        </a>
                                    </div>
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
                        <b>Popular Categories</b>
                    </h3>
                    <div class="seeall_main">
                        <div class="see_all"><a href="/articles">SHOW ALL</a></div>
                    </div>
                        <p>Here are the categories most viewed by visitors to our site! </p>
                    <hr>
                </div>
                <div class="carousel">
                    <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                            <div class="carousel-item">
                                <section class="section">
                                    <div class="container-fluid mx-auto">
                                        <div class="row text-center">
                                            <?php
                                                for ($i = 1; $i <= 3; $i += 1){
                                                    echo '
                                                        <div class="col-lg-4">
                                                            <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                                                console.log(\'starting\');
                                                                $.ajax({
                                                                    
                                                                    url: \'/save_session_articles\',
                                                                    type: \'POST\',
                                                                    data: {subCategory: \'' . strval($i) . '\'},
                                                                    headers: {
                                                                        \'X-CSRF-TOKEN\': $(\'meta[name=\\\'csrf-token\\\']\').attr(\'content\')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data.subCategory);
                                                                        window.location.href = \'/articleList\';
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log(\'Error saving session: \' + errorThrown);
                                                                    }
                                                                });
                                                            ">
                                                    ';
                                                    $imagePath = "imgs/ArticlesImgs/".trim($subCatCon->getSubCategoryByID($i)->name).".jpg"; 

                                                    if (file_exists($imagePath)) {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="'.$imagePath.'" alt="'.$subCatCon->getSubCategoryByID($i)->img_alt.'">
                                                        ';
                                                    } else {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                                        ';
                                                    }
                                                    echo '
                                                                
                                                                <span class="card-body mt-auto">
                                                                    <h4 class="title mt-auto">'.$subCatCon->getSubCategoryByID($i)->name.'</h4>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="carousel-item active">
                                <section class="section">
                                    <div class="container">
                                        <div class="row text-center">
                                            <?php
                                                for ($i = 4; $i <= 6; $i += 1){
                                                    echo '
                                                        <div class="col-lg-4">
                                                            <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                                                console.log(\'starting\');
                                                                $.ajax({
                                                                    
                                                                    url: \'/save_session_articles\',
                                                                    type: \'POST\',
                                                                    data: {subCategory: \'' . strval($i) . '\'},
                                                                    headers: {
                                                                        \'X-CSRF-TOKEN\': $(\'meta[name=\\\'csrf-token\\\']\').attr(\'content\')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data.subCategory);
                                                                        window.location.href = \'/articleList\';
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log(\'Error saving session: \' + errorThrown);
                                                                    }
                                                                });
                                                            ">
                                                    ';
                                                    $imagePath = "imgs/ArticlesImgs/".trim($subCatCon->getSubCategoryByID($i)->name).".jpg"; 

                                                    if (file_exists($imagePath)) {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="'.$imagePath.'" alt="'.$subCatCon->getSubCategoryByID($i)->img_alt.'">
                                                        ';
                                                    } else {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                                        ';
                                                    }
                                                    echo '
                                                                
                                                                <span class="card-body">
                                                                    <h4 class="title mt-auto">'.$subCatCon->getSubCategoryByID($i)->name.'</h4>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="carousel-item">
                                <section class="section">
                                    <div class="container">               
                                        <div class="row text-center">
                                            <?php
                                                for ($i = 7; $i <= 9; $i += 1){
                                                    echo '
                                                        <div class="col-lg-4">
                                                            <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                                                console.log(\'starting\');
                                                                $.ajax({
                                                                    
                                                                    url: \'/save_session_articles\',
                                                                    type: \'POST\',
                                                                    data: {subCategory: \'' . strval($i) . '\'},
                                                                    headers: {
                                                                        \'X-CSRF-TOKEN\': $(\'meta[name=\\\'csrf-token\\\']\').attr(\'content\')
                                                                    },
                                                                    success: function(data) {
                                                                        console.log(data.subCategory);
                                                                        window.location.href = \'/articleList\';
                                                                    },
                                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                                        console.log(\'Error saving session: \' + errorThrown);
                                                                    }
                                                                });
                                                            ">
                                                    ';
                                                    $imagePath = "imgs/ArticlesImgs/".trim($subCatCon->getSubCategoryByID($i)->name).".jpg"; 

                                                    if (file_exists($imagePath)) {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="'.$imagePath.'" alt="'.$subCatCon->getSubCategoryByID($i)->img_alt.'">
                                                        ';
                                                    } else {
                                                        echo '
                                                                                <img style="max-height: 300px;" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                                        ';
                                                    }
                                                    echo '
                                                                
                                                                <span class="card-body">
                                                                    <h4 class="title mt-auto">'.$subCatCon->getSubCategoryByID($i)->name.'</h4>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    ';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>    
        </div>   
           



        <!-- Introduction -->
        <div class="container-fluid bg-light shadow">

            <h1 style="text-align: center;">Introduction</h1>
                
            <div class="row " >
                <div class="col-3 p-3 intro-header"><img class="rounded-circle" src="imgs/gail1.jpg"></div>

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
