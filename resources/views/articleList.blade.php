<?php 
    namespace resources\views;

    use App\Http\Controllers\CategoriesController;
    use App\Http\Controllers\SubCategoriesController;
    use App\Http\Controllers\ArticlesController;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\DB;


    @include ('bootstrapcdn.blade.php');

    $catCon = new CategoriesController();
    $subCatCon = new SubCategoriesController();
    $articlesCon = new articlesController();
    setcookie('name1',2,600);
?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php @include 'header.blade.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php
        $subCategoryID=intval(session('subCategory'));
        $articles = $articlesCon->getArticlesBysubcategoryID($subCategoryID);
        $groups = $articlesCon->getDistinctGroups($articles);
        echo '
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <div class="card" pt-10 style="background-color: #dfc8c8;">
                  <div class="card-header" style="background-color: #5654d1; color: #000; font-size: 22px; padding: 10px;">
                    <h4>'.$subCatCon->getSubCategoryByID($subCategoryID)->name.'</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
        ';

        foreach($groups as $group){
          echo '
                      <li class="list-group-item">
                        <div class="card" style="background-color: #b68dec4f;">
                          <div class="card-header" style="background-color: #1b093b; color: #1f76f8; font-size: 10px; padding: 10px;">
                            <h4>'.$group.'</h4>
                          </div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
          ';
          
          foreach($articles as $article){
            if($article->group == $group){
              echo '
                              <li class="list-group-item">
                                <a href="'.$article->location.'">'.$article->name.'</a>
                              </li>
              ';
            }
          }
          
          echo '                    
                            </ul>
                          </div>
                        </div>
                      </li>
          ';
        }

        echo '               
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ';

    ?>
    
    
    
  </body>
  <?php @include 'Footer/footer.blade.php' ?>
</html>