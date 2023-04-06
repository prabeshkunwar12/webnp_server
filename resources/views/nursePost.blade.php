<?php 
namespace resources\views;

use App\Http\Controllers\ContactController;

@include ('bootstrapcdn.blade.php');
?>

<!doctype html>
<html lang="en">
  <head>
  <style>
      .page {
        display: none;
      }

      .active {
        display: block;
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href= "{{asset('css/style-tools.css')}}" rel="stylesheet" type = "text/css">
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">
  </head>
  <body>
  <?php @include 'header.blade.php'?>

  <div class="row">
                    <div class="col-lg-6 ">
                    <div class="img-container tab-content">
                        <div class=" tab-pane fade show active" id="img1" role="tabpanel">
                        
                        
                        </div>
                        <div class=" tab-pane fade  " id="img2" role="tabpanel">
                        
                        
                        </div>
                    </div>
                    </div>
    </div>
    <div class="col-lg-6 container">
                    <div class="detail-container nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-link active" onclick="showPage('page1')" aria-current="page" href="#">
                        <div class="detail-box active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-selected="true">
                        <h4>
                            Link to External Website
                        </h4>
                        </div>
                        </a>

                        <a class="nav-link" onclick="showPage('page2')" href="#">
                        <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-selected="false">
                        <h4>
                            Personal Article
                        </h4>
                        </div>
                        </a>
                    </div>
    </div>
    <div class="page active" id="page1">
  <form method="post" action="{{ route('contact.store') }}">
    @csrf
    
    
<div class="contact-form container">
    <h1>Found an article that would be useful for more people to know about? Send it to us to take a look at it!</h1>
    <div class="form-group">
        <label for="email">Article Link</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <br>
    <div class="form-group">
        <label for="message">Why you think it would be a good fit for the website</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
    </div>

<div class="page" id="page2">

<form method="post" action="{{ route('contact.store') }}"enctype="multipart/form-data">
    @csrf
    
    
    <div class=" container contact-form" >
    <h2>Found an article that would be useful for more people to know about? Send it to us to take a look at it!</h2>
    

        <div class="mb-3">
        <label for="formFile" class="form-label">Upload your Article as a PDF file</label>
        <input class="form-control" type="file" id="pdfFile" name = pdfFile>
    
    <br>
    <div class="form-group">
        <label for="message">Your Sources</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>
<?php @include 'Footer/footer.blade.php' ?>
</body>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script>
      function showPage(pageId) {
        // hide all pages
        var pages = document.querySelectorAll('.page');
        var box = document.querySelectorAll('.detail-box');
        for (var i = 0; i < pages.length; i++) {
          pages[i].classList.remove('active');
          box[i].classList.remove('active');
        }

        // show selected page
        document.getElementById(pageId).classList.add('active');
      }
    </script>
    </html>