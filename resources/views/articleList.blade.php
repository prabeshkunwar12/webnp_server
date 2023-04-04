<?php 
    namespace resources\views;

    use App\Http\Controllers\CategoriesController;
    use App\Http\Controllers\SubCategoriesController;
    use App\Http\Controllers\ArticlesController;
    use Illuminate\Support\Facades\Session;


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
        $subCategory=session('subCategory');
        echo $subCategory;
    ?>
  </body>
  <?php @include 'Footer/footer.blade.php' ?>
</html>