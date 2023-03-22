

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php @include 'header.blade.php'?>

        <div class="contact-page">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.630149892233!2d-63.142056084521414!3d46.257579888174064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5e52b523915db9%3A0x1bf44d9e22aff6b9!2sHealth%20Sciences%20Building%20(HSB)!5e0!3m2!1sen!2sca!4v1675538803180!5m2!1sen!2sca" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>


        <style>
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

  .contact-page .map{
    display: flex;
  }

  .contact-form{
    position:relative;
    margin-left: 30%;
    margin-right: 30%;
    margin-top: 8%;
    margin-bottom: 10%;
  }
        </style>


    </body>



<!--Mandatory-->
<form method="post" action="{{ route('contact.store') }}">
    @csrf
    
    
<div class="contact-form">
    <h1>Get In Touch</h1>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
<?php @include 'Footer/footer.blade.php' ?>
</html>
   