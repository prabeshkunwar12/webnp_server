

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

          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.630149892233!2d-63.142056084521414!3d46.257579888174064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5e52b523915db9%3A0x1bf44d9e22aff6b9!2sHealth%20Sciences%20Building%20(HSB)!5e0!3m2!1sen!2sca!4v1675538803180!5m2!1sen!2sca" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <!--Mandatory-->
          <div class="contact-form-container">
            <!-- Your contact form code goes here -->
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
                        <textarea name="message" class="form-control" id="message" rows="7"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>


          <style>
              .map{
                position: relative;
                width: 100%;
                height: 600px;
                margin-bottom: 15%;
              }

              .contact-form-container {
                position: absolute;
                height: 60%;
                top: 65%;
                left: 35%;
                right: 35%;
                bottom: 20%;
                box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
                background-color: aliceblue;
                border-radius: 10px;
                
              }

              .contact-form{
                margin: 5%;
                text-align: center;
              }
        </style>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('discussion_posts.index') }}">Discussion Posts</a>
      </li>
      
        <?php @include 'Footer/footer.blade.php' ?>
    </body>


</html>
   