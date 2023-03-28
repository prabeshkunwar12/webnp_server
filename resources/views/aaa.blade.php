<div class="page active" id="page1">
    

    <!--Category starts here

    <nav class="nav nav-pills nav-fill">
        <a class="nav-link active" onclick="showPage('page1')" aria-current="page" href="#">Symptoms</a>
        <a class="nav-link" href="#" onclick="showPage('page2')">Chronic Conditions and Diseases</a>
        <a class="nav-link" href="#" onclick="showPage('page3')">Mental Health</a>
        <a class="nav-link" href="#" onclick="showPage('page4')">Life Stages and Health</a>
        <a class="nav-link" href="#" onclick="showPage('page5')">Clinical Skills</a>
      </nav>

    Category ends here-->

    <!--Category starts here-->

    <nav class="nav nav-pills nav-fill">
        <?php
            echo'
                <a class="nav-link active" onclick="showPage(\'page1\')" aria-current="page" href="#">'.$categories[0]->name.'</a>
            ';
            
            for($i=2; $i<=$totalCategories; $i++){
                echo'
                    <a class="nav-link" href="#" onclick="showPage(\'page'.$i.'\')">'.$categories[$i-1]->name.'</a>
                ';
            }
        ?>    
    </nav>

    <!--Category ends here-->
    

    <dIv class="intro-image">
        <h1>Symptoms</h1>
    </dIv>

    <section class="section">
        <div class="container">

            <h3 class="section-title mb-4">Abdominal Pain</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <h3 class="section-title mb-4">Back and Neck Pain</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">

            <h3 class="section-title mb-4">Cough and Dyspnea</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">

            <h3 class="section-title mb-4">Diarrhea</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">

            <h3 class="section-title mb-4">Ear Symptoms</h3>

            <div class="row text-center">
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="javascript:void(0)" class="card border-0 text-dark">
                        <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                        <span class="card-body">
                            <h4 class="title mt-4">Article</h4>
                            <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Advanced Feature Start -->
    <div class="whats-new">
  <div class="container-xxl py-6" id="features">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Whats new!</h1>
            <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Articles</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Articles</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Articles</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="advanced-feature-item text-center rounded py-5 px-4">
                    <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                    <h5 class="mb-3">Articles</h5>
                    <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Advanced Feature End -->

    


    <!--Carousel-->
    <div class="carousel">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <section class="section">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Track your health</h4>
                                        <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Participate in health surverys</h4>
                                        <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Get a general statistics about health data</h4>
                                        <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
              <div class="carousel-item">
                <section class="section">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Track your health</h4>
                                        <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Participate in health surverys</h4>
                                        <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Get a general statistics about health data</h4>
                                        <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
              <div class="carousel-item">
                <section class="section">
                    <div class="container">               
                        <div class="row text-center">
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Track your health</h4>
                                        <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Participate in health surverys</h4>
                                        <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="javascript:void(0)" class="card border-0 text-dark">
                                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                    <span class="card-body">
                                        <h4 class="title mt-4">Get a general statistics about health data</h4>
                                        <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    <!--Ends here-->

<!-- Process Start -->
<div class="process">
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" id="looking-for-image" src="imgs/pexels-pixabay-40568.jpg">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="mb-4">What you are looking for</h1>
                    <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                    <ul class="process mb-0">
                        <li>
                            <span><i class="fa fa-cog"></i></span>
                            <div>
                                <h5>Category</h5>
                                <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                            </div>
                        </li>
                        <li>
                            <span><i class="fa fa-address-card"></i></span>
                            <div>
                                <h5>Category</h5>
                                <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                            </div>
                        </li>
                        <li>
                            <span><i class="fa fa-check"></i></span>
                            <div>
                                <h5>Category</h5>
                                <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Process End -->
</div>

<!--Symptoms Page ends here (Page 1)-->


<!--Chronic conditions and diseases starts here (Page 2)-->

<div class="page" id="page2">
  
  

<!--Category starts here-->


    <nav class="nav nav-pills nav-fill">
        <a class="nav-link" onclick="showPage('page1')" aria-current="page" href="#">Symptoms</a>
        <a class="nav-link active" href="#" onclick="showPage('page2')">Chronic Conditions and Diseases</a>
        <a class="nav-link" href="#" onclick="showPage('page3')">Mental Health</a>
        <a class="nav-link" href="#" onclick="showPage('page4')">Life Stages and Health</a>
        <a class="nav-link" href="#" onclick="showPage('page5')">Clinical Skills</a>
    </nav>

<!--Category ends here-->


<dIv class="intro-image">
    <h1>Chronic Conditions and Diseases</h1>
</dIv>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Allergic Reaction</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Breast Concerns</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Common Infections</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Dyspnea</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Fever</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Advanced Feature Start -->
<div class="whats-new">
<div class="container-xxl py-6" id="features">
<div class="container">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Whats new!</h1>
        <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Advanced Feature End -->




<!--Carousel-->
<div class="carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">               
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<!--Ends here-->

<!-- Process Start -->
<div class="process">
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" id="looking-for-image" src="imgs/pexels-pixabay-40568.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">What you are looking for</h1>
                <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                <ul class="process mb-0">
                    <li>
                        <span><i class="fa fa-cog"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-address-card"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-check"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Process End -->
</div>

<!--Chronic condition and diseases ends here (Page 2)-->


<!--Mental Health starts here (Page 3)-->
<div class="page" id="page3">
  

<!--Category starts here-->

<nav class="nav nav-pills nav-fill">
    <a class="nav-link" onclick="showPage('page1')" aria-current="page" href="#">Symptoms</a>
    <a class="nav-link" href="#" onclick="showPage('page2')">Chronic Conditions and Diseases</a>
    <a class="nav-link active" href="#" onclick="showPage('page3')">Mental Health</a>
    <a class="nav-link" href="#" onclick="showPage('page4')">Life Stages and Health</a>
    <a class="nav-link" href="#" onclick="showPage('page5')">Clinical Skills</a>
  </nav>

<!--Category ends here-->


<dIv class="intro-image">
    <h1>Mental Health</h1>
</dIv>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Anger</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Bipolar Disorders</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Dementia including Alzheimer's</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Eating Disorders Including Anorexia and Bulimia</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">General</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Advanced Feature Start -->
<div class="whats-new">
<div class="container-xxl py-6" id="features">
<div class="container">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Whats new!</h1>
        <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Advanced Feature End -->




<!--Carousel-->
<div class="carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">               
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<!--Ends here-->

<!-- Process Start -->
<div class="process">
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" id="looking-for-image" src="imgs/pexels-pixabay-40568.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">What you are looking for</h1>
                <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                <ul class="process mb-0">
                    <li>
                        <span><i class="fa fa-cog"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-address-card"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-check"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Process End -->
</div>
<!--Mental Health Ends here (Page 4)-->


<!--Life stages and health starts here (Page 4)-->


<div class="page" id="page4">
    
<!--Category starts here-->

<nav class="nav nav-pills nav-fill">
    <a class="nav-link" onclick="showPage('page1')" aria-current="page" href="#">Symptoms</a>
    <a class="nav-link" href="#" onclick="showPage('page2')">Chronic Conditions and Diseases</a>
    <a class="nav-link" href="#" onclick="showPage('page3')">Mental Health</a>
    <a class="nav-link active" href="#" onclick="showPage('page4')">Life Stages and Health</a>
    <a class="nav-link" href="#" onclick="showPage('page5')">Clinical Skills</a>
  </nav>

<!--Category ends here-->


<dIv class="intro-image">
    <h1>Life Stages and Health</h1>
</dIv>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Asthma</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Skin Concerns</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Sleep Concerns</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Hyperlipidemia</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">General</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Advanced Feature Start -->
<div class="whats-new">
<div class="container-xxl py-6" id="features">
<div class="container">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Whats new!</h1>
        <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Advanced Feature End -->




<!--Carousel-->
<div class="carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">               
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<!--Ends here-->

<!-- Process Start -->
<div class="process">
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" id="looking-for-image" src="imgs/pexels-pixabay-40568.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">What you are looking for</h1>
                <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                <ul class="process mb-0">
                    <li>
                        <span><i class="fa fa-cog"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-address-card"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-check"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Process End -->
</div>

<!--Life stages and health ends here (Page 4)-->


<!--Clinical Skills starts here (Page 5)-->
<div class="page" id="page5">


<!--Category starts here-->

<nav class="nav nav-pills nav-fill">
    <a class="nav-link" onclick="showPage('page1')" aria-current="page" href="#">Symptoms</a>
    <a class="nav-link" href="#" onclick="showPage('page2')">Chronic Conditions and Diseases</a>
    <a class="nav-link" href="#" onclick="showPage('page3')">Mental Health</a>
    <a class="nav-link" href="#" onclick="showPage('page4')">Life Stages and Health</a>
    <a class="nav-link active" href="#" onclick="showPage('page5')">Clinical Skills</a>
  </nav>

<!--Category ends here-->


<dIv class="intro-image">
    <h1>Clinical Skills</h1>
</dIv>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Assessment and Physical Examination</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Diagnosis and Problem Solving</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Communication and Interpersonal Skills</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Treatment and Management</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <h3 class="section-title mb-4">Documentation and Record Keeping</h3>

        <div class="row text-center">
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="javascript:void(0)" class="card border-0 text-dark">
                    <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                    <span class="card-body">
                        <h4 class="title mt-4">Article</h4>
                        <p class="xs-font">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.</p>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Advanced Feature Start -->
<div class="whats-new">
<div class="container-xxl py-6" id="features">
<div class="container">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Whats new!</h1>
        <p class="mb-5">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-edit fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-sync fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-laptop fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="advanced-feature-item text-center rounded py-5 px-4">
                <i class="fa fa-draw-polygon fa-3x text-primary mb-4"></i>
                <h5 class="mb-3">Articles</h5>
                <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Advanced Feature End -->




<!--Carousel-->
<div class="carousel">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
          <div class="carousel-item">
            <section class="section">
                <div class="container">               
                    <div class="row text-center">
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/stat.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Track your health</h4>
                                    <p class="xs-font">You can track your health as it will be shown in graph which easier to understand</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="imgs/survey.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Participate in health surverys</h4>
                                    <p class="xs-font">You need to update the survey form on a weekly basis</p>
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="javascript:void(0)" class="card border-0 text-dark">
                                <img class="card-img-top" src="/imgs/track.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, ollie Landing page">
                                <span class="card-body">
                                    <h4 class="title mt-4">Get a general statistics about health data</h4>
                                    <p class="xs-font">Your health information will be anlayzed and it will shown to you in a meaningful way.</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

</div>
<!--Ends here-->

<!-- Process Start -->
<div class="process">
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid rounded" id="looking-for-image" src="imgs/pexels-pixabay-40568.jpg">
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="mb-4">What you are looking for</h1>
                <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>
                <ul class="process mb-0">
                    <li>
                        <span><i class="fa fa-cog"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-address-card"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo</p>
                        </div>
                    </li>
                    <li>
                        <span><i class="fa fa-check"></i></span>
                        <div>
                            <h5>Category</h5>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Process End -->
</div>
<!--Clinical Skills ends here (Page 5)-->
