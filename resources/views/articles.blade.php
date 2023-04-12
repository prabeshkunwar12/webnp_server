<?php 
    namespace resources\views;

    use App\Http\Controllers\CategoriesController;
    use App\Http\Controllers\SubCategoriesController;
    use App\Http\Controllers\ArticlesController;
    use Illuminate\Support\Facades\Session;


    @include ('bootstrapcdn.blade.php');

    $catCon = new CategoriesController();
    $subCatCon = new SubCategoriesController();
    $articlesCon = new ArticlesController();
    setcookie('name1',2,600);
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
      .page {
        display: none;
      }

      .active {
        display: block;
      }

        .intro-image{
        text-align: center;
        margin-top: 3%;
        margin-bottom: 4%;
        color: #1c4b82;
        }

        .Nav-top .social-media{
        text-align: right;
        margin-right: 2%;
        }

        .search-click {
        border: 1px solid #ccc;
        outline: none;
        background-size: 22px;
        background-position: 13px;
        border-radius: 10px;
        width: 50px;
        height: 50px;
        padding: 25px;
        transition: all 0.5s;
        }
        .search-click:focus {
        width: 300px;
        padding-left: 50px;
        }
        .search-click {
        position: relative;
        overflow: hidden;
        height: 50px;
        }
        .search-click input {
        background: transparent;
        border: 1px solid #ccc;
        outline: none;
        position: absolute;
        width: 300px;
        height: 50px;
        left: 0%;
        padding: 10px;
        }

        .card{
        display: flex;
        text-decoration: none;
        }

        .carousel{
        align-items: center;
        }

        .whats-new{
        margin-top: 3%;
        }

        .carousel{
        margin-bottom: 5%;
        }

        #looking-for-image{
        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

        .process{
        margin-bottom: 5%;
        }

        .card-img-top {
            height: 300px; /* Specify the desired height */
            width: 100%; /* Specify the desired width */
            object-fit: cover; /* Use object-fit property to control how the image is resized */
            padding-top: 30px;
        }
    </style>
  </head>
  <body>
    <?php @include 'header.blade.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
        $categories = $catCon->getAllCategories();
        $totalCategories = $categories->count();
        for($i=1; $i<=$totalCategories; $i++)
        {
            if($i==1){
                echo'
                    <div class="page active" id="page'.$i.'">
                        <!--Category starts here-->

                        <nav class="nav nav-pills nav-fill">
                            
                ';
            }
            else{
                echo'
                    <div class="page" id="page'.$i.'">
                        <!--Category starts here-->

                        <nav class="nav nav-pills nav-fill">
                            
                ';
            }
            
                            
                            
            for($j=1; $j<=$totalCategories; $j++){
                if($i==$j){
                    echo'
                        <a class="nav-link active" onclick="showPage(\'page'.$j.'\')" aria-current="page" href="#">'.$categories[$j-1]->name.'</a>
                    ';
                }
                else{
                    echo'
                        <a class="nav-link" href="#" onclick="showPage(\'page'.$j.'\')">'.$categories[$j-1]->name.'</a>
                    ';
                }
                
            }
            
            echo'
                    </nav>
                    <dIv class="intro-image">
                        <h1>'.$categories[$i-1]->name.'</h1>
                    </dIv>
            ';

            $subCategories = $subCatCon->getSubCategoriesByCategory($categories[$i-1]);
            $TotalSubCategories = $subCategories->count();
            for ($j = 1; $j <= $TotalSubCategories; $j += 3){
                echo '
                    <section class="section">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-lg-4">
                                    <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                        console.log(\'starting\');
                                        $.ajax({
                                            
                                            url: \'/save_session_articles\',
                                            type: \'POST\',
                                            data: {subCategory: \'' . $subCategories[$j-1]->id . '\'},
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
                
                $imagePath = "imgs/ArticlesImgs/".trim($subCategories[$j-1]->name).".jpg"; 

                if (file_exists($imagePath)) {
                    echo '
                                            <img class="card-img-top" src="'.$imagePath.'" alt="'.$subCategories[$j-1]->img_alt.'">
                    ';
                } else {
                    echo '
                                            <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    ';
                }

                

                echo '
                                        <span class="card-body">
                                            <h4 class="title mt-4">' . $subCategories[$j-1]->name . '</h4>
                                        </span>
                                    </a>
                                </div>
                ';

                if($j+1 <= $TotalSubCategories){
                    echo'
                                    <div class="col-lg-4">
                                        <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                            console.log(\'starting\');
                                            $.ajax({
                                                
                                                url: \'/save_session_articles\',
                                                type: \'POST\',
                                                data: {subCategory: \'' . $subCategories[$j]->id . '\'},
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
                    $imagePath = "imgs/articlesImgs/".trim($subCategories[$j]->name).".jpg"; 

                    if (file_exists($imagePath)) {
                        echo '
                                                <img class="card-img-top" src="'.$imagePath.'" alt="'.$subCategories[$j]->img_alt.'">
                        ';
                    } else {
                        echo '
                                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        ';
                    }
                    echo '
                                            <span class="card-body">
                                                <h4 class="title mt-4">' . $subCategories[$j]->name . '</h4>
                                            </span>
                                        </a>
                                    </div>
                    ';
                    if($j+2 <= $TotalSubCategories){
                        echo'
                                    <div class="col-lg-4">
                                        <a class="card border-0 text-dark" href="#" onclick="event.preventDefault();
                                            console.log(\'starting\');
                                            $.ajax({
                                                
                                                url: \'/save_session_articles\',
                                                type: \'POST\',
                                                data: {subCategory: \'' . $subCategories[$j+1]->id . '\'},
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
                                        $imagePath = "imgs/articlesImgs/".trim($subCategories[$j+1]->name).".jpg"; 

                                        if (file_exists($imagePath)) {
                                            echo '
                                                                    <img class="card-img-top" src="'.$imagePath.'" alt="'.$subCategories[$j+1]->img_alt.'">
                                            ';
                                        } else {
                                            echo '
                                                                    <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                            ';
                                        }

                                        echo '
                                            <span class="card-body">
                                                <h4 class="title mt-4">' . $subCategories[$j+1]->name . '</h4>
                                            </span>
                                        </a>
                                    </div>
                        ';
                    }
                    
                }
                
                echo'
                            </div>
                        </div>
                    </section> 
                ';

                
            }
            
             
            echo'
                </div> 
            ';
        }  
    ?>
    
    

    <script>
        function showPage(pageId) {
            // hide all pages
            var pages = document.querySelectorAll('.page');
            for (var i = 0; i < pages.length; i++) {
                pages[i].classList.remove('active');
            }

            // show selected page
            document.getElementById(pageId).classList.add('active');
        }
    </script>
    
  </body>
  <?php @include 'Footer/footer.blade.php' ?>
</html>