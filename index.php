<?php
include 'database.php';
include 'header.php';
?>


<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">
     <div class="swiper-wrapper">

      <?php
    $slider_query = "SELECT * FROM d_slider";
    $slider_result = mysqli_query($conn, $slider_query);
    while($r = mysqli_fetch_array($slider_result)){
       ?>

         <div class="swiper-slide carousel-item-a intro-item bg-image"
            style="background-image: url(./manage/<?php echo $r['slider']; ?>)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top"><?php echo $r['s_heading1']; ?></p>
                                    <h1 class="intro-title mb-4 ">
                                        <span class="color-b"><?php echo $r['s_heading2']; ?>
                                        </span><?php echo $r['s_heading3']; ?>
                                    </h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="<?php echo $r['s_btn_link']; ?>"><span
                                                class="price-a"><?php echo $r['s_btn_text']; ?></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <?php
          }
             ?>
      </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">



<?php 
include 'home-partial/about-partial.php';
include 'home-partial/service-partial.php';
include 'home-partial/property-list-partial.php';
?>

    <!--end white loop -->

    <!-- End About Us Section -->



   

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Best Agents</h2>
                        </div>
                        <div class="title-link">
                            <a href="agents-grid.php">All Agents
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="assets/img/agent-4.jpg" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="agent-single.php" class="link-two">Margaret Sotillo
                                            <br> Escala</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d color-text-a">
                                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                </p>
                                <div class="info-agents color-a">
                                    <p>
                                        <strong>Phone: </strong> +54 356 945234
                                    </p>
                                    <p>
                                        <strong>Email: </strong> agents@example.com
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer-d">
                                <div class="socials-footer d-flex justify-content-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="assets/img/agent-1.jpg" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="agent-single.php" class="link-two">Stiven Spilver
                                            <br> Darw</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d color-text-a">
                                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                </p>
                                <div class="info-agents color-a">
                                    <p>
                                        <strong>Phone: </strong> +54 356 945234
                                    </p>
                                    <p>
                                        <strong>Email: </strong> agents@example.com
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer-d">
                                <div class="socials-footer d-flex justify-content-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="assets/img/agent-5.jpg" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="agent-single.php" class="link-two">Emma Toledo
                                            <br> Cascada</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d color-text-a">
                                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                </p>
                                <div class="info-agents color-a">
                                    <p>
                                        <strong>Phone: </strong> +54 356 945234
                                    </p>
                                    <p>
                                        <strong>Email: </strong> agents@example.com
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer-d">
                                <div class="socials-footer d-flex justify-content-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest News</h2>
                        </div>
                        <div class="title-link">
                            <a href="blog-grid.php">All News
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="news-carousel" class="swiper">
                <div class="swiper-wrapper">

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">House</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.php">House is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="assets/img/post-5.jpg" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">Travel</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.php">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="assets/img/post-7.jpg" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">Park</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.php">Park is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">Travel</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="#">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                </div>
            </div>

            <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div id="testimonial-carousel" class="swiper">
                <div class="swiper-wrapper">

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-img">
                                        <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate
                                            ea nam praesentium
                                            debitis hic ber quibusdam
                                            voluptatibus officia expedita corpori.
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">Albert & Erika</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                    <div class="carousel-item-a swiper-slide">
                        <div class="testimonials-box">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-img">
                                        <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="testimonial-ico">
                                        <i class="bi bi-chat-quote-fill"></i>
                                    </div>
                                    <div class="testimonials-content">
                                        <p class="testimonial-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate
                                            ea nam praesentium
                                            debitis hic ber quibusdam
                                            voluptatibus officia expedita corpori.
                                        </p>
                                    </div>
                                    <div class="testimonial-author-box">
                                        <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                                        <h5 class="testimonial-author">Pablo & Emma</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->

                </div>
            </div>
            <div class="testimonial-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">EstateAgency</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo
                            consequat duis
                            sed aute irure.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> contact@example.com
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> +54 356 945234
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">The Company</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">International sites</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Venezuela</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">China</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Argentina</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include 'footer.php';

?>