<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <?php wp_head();?>
</head>
<body>
  <!-- header part start -->
  <header>
      <div class="container header_cont">
          <div class="row">
              <div class="col-lg-6 header_left">
                  <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
              </div>
              <div class="col-lg-6 header_right text-end">
                  <p>২ জ্যৈষ্ঠ, ১৪২৯</p>
                  <a href="">English</a>
              </div>
          </div>
      </div>
  </header>
  <!-- header part end -->
  <!-- logo part start -->
  <section>
      <div class="container logo">
          <div class="row">
              <div class="col-lg-5 logo_left">
                  <a href="">
                   <?php the_custom_logo();?> 
                  <img src="assets/images/logo/logo_bn.png" alt="">
                </a>
              </div>
              <div class="col-lg-5 logo_search">
                  <form action="">
                      <input type="text" placeholder="খুঁজুন " value="<?php get_search_query();?>" name="s">
                      <button>অনুসন্ধান </button>
                  </form>
              </div>
              <div class="col-lg-2 logo_right d-flex justify-content-end">
                  <div class="logo-1">
                      <a href=""><img src="assets/images/logo/a2i-logo-footer.png" alt=""></a>
                  </div>
                  <div class="logo-2">
                      <p>সাথে থাকুন:</p>
                      <a href=""><img src="assets/images/logo/facebook-icon.png" alt=""></a>
                      <a href=""><img src="assets/images/logo/twitter-blue-icon.png" alt=""></a>
                      <a href=""><img src="assets/images/logo/youtube-icon.png" alt=""></a>
                      <a href=""><img src="assets/images/logo/gplus-icon.png" alt=""></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- logo part end -->
  <!-- menu aprt start -->
  <section>
      <div class="container">
          <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <?php
                  wp_nav_menu([
                    'theme_location'=>'TM',
                    'menu_class'=>'navbar-nav'
                  ]);
                  ?>
                    
                    
                  </div>
                </div>
              </nav>
          </div>
      </div>
  </section>
  <!-- menu aprt end -->
  <!-- main part start -->
  <section>
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <!-- main part -->
                  <div class="main_image">
                      <a href="">
                       <?php dynamic_sidebar('mainimg'); ?> 
                      
                    </a>
                  </div>
                  <!-- mark part start -->
                  <div class="mark">
                      <div class="mark-1">
                          <h5><marquee behavior="" direction="">
                              
	নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন 
                          </marquee></h5>
                      </div>
                      <div class="mark-2">
                          <h5><marquee behavior="" direction="">
                            । নিজে সুরক্ষিত থাকুন অন্যকেও নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর মাধ্যমে আর্থিক অনুদান পৌঁছে দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন 
                          </marquee>
                        </h5>
                      </div>
                  </div>
                  <!-- slider part start -->
                  <div class="slider">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                      <?php $query = new WP_Query([
                        'post_type' => 'post',
                        'category_name'=>'slider'
                      ]); ?>
                        <div class="carousel-inner">
                          <?php
                          $x=0;
                          while($query->have_posts()):$query->the_post();
                          $x++;
                          ?>
                          <div class="carousel-item <?php echo ($x==1)?'active':'';?>">
                            <?php the_post_thumbnail();?>
                            
                          </div>
                          <?php endwhile; ?>
                          
                        </div>
                       
                        
                      </div>
                  </div>
                  <!-- tabs part start -->
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                    </li>
                    
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <?php $tab1 = new WP_Query([
                        'post_type' => 'post',
                        'category_name'=>'জনপ্রিয়_সেবা'
                      ]); ?>
                        <div class="row">
                        <?php
                          
                          while($tab1->have_posts()):$tab1->the_post();
                          
                          ?>
                            <div class="col-lg-2">
                           
                                <a href="">
                                <?php the_post_thumbnail();?>  
                                <!-- <img src="assets/images/tabs/business.png" alt=""> -->
                              </a>
                                <a href=""><p>
                                  <?php the_title();?>
                                </p></a>
                            </div>
                            <?php endwhile;?>
                            
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0"><div class="row">
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                    </div></div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0"><div class="row">
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                        <div class="col-lg-2">
                            <a href=""><img src="assets/images/tabs/business.png" alt=""></a>
                            <a href=""><p>
                                অর্থ ও বাণিজ্য                                </p></a>
                        </div>
                    </div></div>
                    
                  </div>
                  <!-- others aprt start -->
                  <div class="others"></div>
              </div>
              <div class="col-lg-4">
                  <!-- sidebar img part start -->
                  <div class="sidebar_img">
                      <a href="">
                      <?php dynamic_sidebar('sideimg');?>  
                      
                    
                    </a>
                      
                  </div>
                  <!-- sidebar vedio part start -->
                  <div class="sidebar_vedio">
                      <h5>সকল বাতায়ন</h5>
                      <form action="">
                        <select class="selector">
                            <option selected>ওয়েবসাইট বাছাই করুন</option>
                            <option value="1">মন্ত্রণালয়</option>
                            <option value="2">অধিদপ্তর </option>
                            <option value="3">ঢাকা বিভাগ</option>
                          </select>
                          <button class="btn1">চলুন</button>
                      </form>
                      <h5 class="text1">মুজিব১০০ আ্যাপ</h5>
                      <iframe width="360" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <h5 class="text1">মাস্ক পরুন সেবা নিন</h5>
                      <a href=""><img src="assets/images/sidebar/mask-bd-portal (1).jpg" class="d-block w-100"alt=""></a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- main part end -->
  <!-- footer part start -->
<footer>
      <div class="container">
        <div class="row">
            <img src="<?= get_template_directory_uri()?>/assets/images/footer/download.png" class="d-block w-100"alt="">
        </div>
        <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg bg-light">
                  <div class="container">
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php
                  wp_nav_menu([
                    'theme_location'=>'FM',
                    'menu_class'=>'navbar-nav'
                  ]);
                  ?>
                      
                      
                    </div>
                  </div>
                </nav>  
            </div>
            <div class="col-lg-4 text-end">
                <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                <img src="<?= get_template_directory_uri()?>/assets/images/footer/np-logo-set.png" alt="">
            </div>
        </div>
      </div>
  </footer>
  <?php wp_footer();?>
  <!-- footer part end -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>