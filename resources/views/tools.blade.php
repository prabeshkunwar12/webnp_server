<?php
namespace resources\views;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

$homeCon = new HomeController();
$postCon = new PostsController();
@include ('bootstrapcdn.blade.php');
?>
<!DOCTYPE HTML>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href= "{{asset('css/style-tools.css')}}" rel="stylesheet" type = "text/css">
    <link href= "{{asset('css/style-homepage.css')}}" rel="stylesheet" type = "text/css">

    <head>
        <title>Tools</title>
    </head>

    <body>
        <?php @include 'header.blade.php'?>
        <section class="service_section layout_padding-bottom layout_padding2-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Tools and Guidelines
        </h2>
        <h4>
          Here are some tools and guidelines to help you assess and manage your health!
</h4>
      </div>
            <div class="row">
                    <div class="col-lg-6 ">
                    <div class="img-container tab-content">
                        <div class="img-box tab-pane fade show active" id="img1" role="tabpanel">
                        <img src="imgs/service-img.jpg" alt="" />
                        
                        </div>
                        <div class="img-box tab-pane fade  " id="img2" role="tabpanel">
                        
                        <img src="/imgs/wellness-mental-health.jpg" alt="" />
                        </div>
                        <div class="img-box tab-pane fade  " id="img3" role="tabpanel">
                        
                        <img src="/imgs/wellness-health-beauty.webp" alt="" />
                        </div>
                        <div class="img-box tab-pane fade  " id="img4" role="tabpanel">
                        <img src="imgs/service-img.jpg" alt="" />
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="detail-container nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-link active" onclick="showPage('page1')" aria-current="page" href="#">
                        <div class="detail-box active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-selected="true">
                        <h4>
                            Mental <br />
                            Health
                        </h4>
                        </div>
                        </a>

                        <a class="nav-link" onclick="showPage('page2')" href="#">
                        <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-selected="false">
                        <h4>
                            Adult <br />
                            Guidelines
                        </h4>
                        </div>
                        </a>
                        <a class="nav-link" onclick="showPage('page3')" href="#">
                        <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img3" role="tab" aria-selected="false">
                        <h4>
                            Pediatric  <br />
                            Guidlines
                        </h4>
                        </div>
                        </a>
                        
                    </div>
                    </div>
                </div>
    </div>
        </section>

        <div class="page active" id="page1">
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
                        <div class = "recentarticle-main ">
                            <a href="<?php echo ("http://".($postCon)->getRecentPostContent(1));?>">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                A look at the effects of smoking
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($postCon)->getRecentPostContent(1));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main vanish">
                            <a href="<?php echo ("http://".($postCon)->getRecentPostContent(2));?>">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                How yoga can benefit your heart
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($postCon)->getRecentPostContent(2));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main vanish">
                            <a href="<?php echo ("http://".($postCon)->getRecentPostContent(3));?>">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                Daily runs: a trend everyone should follow
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($postCon)->getRecentPostContent(3));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        <div class = "recentarticle-main vanish">
                            <a href="<?php echo ("http://".($postCon)->getRecentPostContent(4));?>">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                Recent advances in Heart Medicine
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($postCon)->getRecentPostContent(4));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                        
                        <div class = "recentarticle-main vanish">
                            <a href="<?php echo ("http://".($postCon)->getRecentPostContent(5));?>">
                            <div class="recentarticle-img">
                            <img src = "../imgs/wellness-mental-health.jpg" >
                            </div>
                            <div class="recentcaption">
                                A random article title
                            </div>
                            </a>
                            
                            <div class="seemore_main">
                                <div class="see_more"><a href="<?php echo ("http://".($postCon)->getRecentPostContent(5));?>">SEE MORE</a></div>
                            </div>
                            
                        </div>
                                                
                    </div>
                    
                </div>
            </div>
            </div>
                </div>
        <div class="page" id="page2">
        <div class="container topicsheader">
                <h3>
                    <b>Adult Guidelines</b>
                </h3>
                    
            <hr>
            </div> 
        <div class="container">
            <h4>
                <b> Cardiovascular Disease</b>
            </h4>
                    
            
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(2)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(2) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(3)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(3) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(4)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(4) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
        <div class="container">
            <h4>
                <b> Depression</b>
            </h4> 
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(2)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(2) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(3)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(3) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
                <div class="container">
            <h4>
                <b> Fatigue</b>
            </h4> 
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
                <div class="container">
            <h4>
                <b> Cerebral Palsy</b>
            </h4> 
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
        </div>
        <div class="page" id="page3">
        <div class="container topicsheader">
                <h3>
                    <b>Pediatric Guidelines</b>
                </h3>
                    
            <hr>
            </div> 
        <div class="container">
            <h4>
                <b> Asthma</b>
            </h4>
                    
            
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(2)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(2) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(3)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(3) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(4)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(4) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
        <div class="container">
            <h4>
                <b> ADHD</b>
            </h4> 
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(2)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(2) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(3)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(3) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
                <div class="container">
            <h4>
                <b> Autism</b>
            </h4> 
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
                <div class="container">
            <h4>
                <b> Cerebral Palsy</b>
            </h4> 
        </div>
        <div class = "topicsbox container">
                    <ul class="topicslist">
                        <div class="topicscol">
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            <li>
                                <a href ="<?php echo ("http://".$homeCon->getCategoryContent(1)) ?>">
                                    <h5>&#8827   <?php echo $homeCon->getCategoryName(1) ?></h5>
                                </a>
                            </li>
                            
                            
                            
                        </div>
                    </ul>
                    <hr>
                </div>
                <br><br>
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
