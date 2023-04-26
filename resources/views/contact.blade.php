<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt8Wh6v/2sQ3j6mgDp0J3f3zF3gXz0vi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php @include 'header.blade.php'?>

          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.630149892233!2d-63.142056084521414!3d46.257579888174064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5e52b523915db9%3A0x1bf44d9e22aff6b9!2sHealth%20Sciences%20Building%20(HSB)!5e0!3m2!1sen!2sca!4v1675538803180!5m2!1sen!2sca" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="contact-form-container">
            <form method="post" action="{{ route('contact.store') }}">
                @csrf
                <div class="contact-form">
                    <h1 style="text-align:center">Get In Touch</h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="email" style="font-weight: bold;">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" required placeholder="Email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message" style="font-weight: bold;">Message</label>
                        <textarea name="message" class="form-control" id="message" rows="7" required placeholder="Enter your message here">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                      
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
              padding: 10px;
              width: 30%;
              position: absolute;
              height: auto;
              top: calc(60% + 200px);
              left: 35%;
              right: 35%;
              transform: translateY(-50%);
              box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;
              background-color: rgba(135, 206, 235, 0.5);
              border-radius: 10px;
          }
  
            .contact-form{           
                width: 100%;
                text-align: left;
            }
  
            /* Responsive styles */
            @media (max-width: 1200px) {
              .contact-form-container {
                width: 50%;
                left: 25%;
                right: 25%;
              }
            }
  
            @media (max-width: 992px) {
              .contact-form-container {
                width: 70%;
                left: 15%;
                right: 15%;
              }
            }
  
            @media (max-width: 768px) {
              .contact-form-container {
                position: static;
                transform: translateY(0);
                width: 90%;
                margin: 0 auto;
              }
            }
  
            @media (max-width: 576px) {
              .contact-form-container {
                width: 100%;
                margin: 0;
                padding: 10px;
                border-radius: 0;
              }
            }
  
          </style>
          
          <?php @include 'Footer/footer.blade.php' ?>
        </body>
        </html>
        
