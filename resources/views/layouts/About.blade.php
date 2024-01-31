<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happyshop contact</title>

    <!-- Google Font -->
    <script src="https://kit.fontawesome.com/47ee39bf9c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

  

  
  <!-- Vendor CSS Files -->
 
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/stylee.css') }}" type="text/css" />
     <!-- Favicons -->
  

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ asset('assetss/css/variables.css') }}" rel="stylesheet">
 

  <!-- Template Main CSS File -->
  <link href="{{ asset('assetss/css/main.css') }}" rel="stylesheet">
  

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
              <li>
                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a>
              </li>
            </ul>
            <div class="header__cart__price">item: <span>${{ $cartTotal }}</span></div>
          </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('frontend/img/language.png') }}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Arabic</a></li>
                    <li><a href="#">Français</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="#">Shop Details</a></li>
                        <li><a href="#">Shoping Cart</a></li>
                        <li><a href="#">Check Out</a></li>
                        <li><a href="#">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> contact.happyshopp@gmail.com</li>
               
            </ul>
        </div>
    </div>
    <!--  End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>contact.happyshopp@gmail.com
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('frontend/img/language.png') }}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Français</a></li>
                                    <li><a href="#">Arabc</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="/login"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt="" style="width: 80px"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ route('shop.index') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">Shop Details</a></li>
                                    <li><a href="#">Shoping Cart</a></li>
                                    <li><a href="#">Check Out</a></li>
                                    <li><a href="#">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="#">About</a></li>
                            <li ><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                          <li>
                            <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                          </li>
                          <li>
                            <a href="{{ route('cart.index') }}"
                              ><i class="fa fa-shopping-bag"></i> <span>{{ $cartCount }}</span></a
                            >
                          </li>
                        </ul>
                        <div class="header__cart__price">item: <span>${{ $cartTotal }}</span></div>
                      </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                            <li><a href="#">téléphones et tablettes</a></li>
                            <li><a href="#">Les ordinateurs</a></li>
                            <li><a href="#">La mode</a></li>
                            <li><a href="#">Gaming</a></li>
                            <li><a href="#">Les télévisions</a></li>
                            <li><a href="#">Les livres</a></li>
                            <li><a href="#">Les caméras</a></li>
                            <li><a href="#">Les accessoires</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+2126754326178</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
  
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>About Us</h2>
    </div>

    <div class="row gy-4">
      <div class="col-lg-6">
        <h3> Welcome to happyshopp</h3>
        <img src="{{ asset('frontend/img/logo.png') }}" class="img-fluid rounded-4 mb-4" alt="">
        <p>Whether you're looking forphones & tablets, computers, or Gaming,or The fashion, or Televisions , or Books ,or Cameras ,or The accessories you can count on happyshopp to deliver. Thank you for choosing us as your trusted partner for all your  needs.</p>
      </div>
      <div class="col-lg-6">
        <div class="content ps-0 ps-lg-5">
         
          <p>
            Welcome to happyshopp, where we are committed to providing the best products and services to our valued customers.

            At happyshopp, we believe that quality is the key to success. That's why we go above and beyond to ensure that every product we sell is of the highest quality possible. From the materials we use to the craftsmanship that goes into each and every item, we are dedicated to creating products that exceed your expectations.
            
            We also believe that great products deserve great service. That's why we work hard to provide you with the best customer experience possible. Our knowledgeable and friendly staff are always here to answer any questions you may have and to help you find the perfect product for your needs.
          </p>

          <div class="position-relative mt-4">
            <img src="assets/img/about.jpg" class="img-fluid rounded-4" alt="">
           
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

<!-- ======= API Section ======= -->
<section id="clients" class="clients">
<div class="container" data-aos="zoom-out">

<div class="clients-slider swiper">
<div class="swiper-wrapper align-items-center">
  <div class="swiper-slide"><img src="assets/img/clients/client-1.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-2.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-3.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-4.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-5.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-6.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-7.svg" class="img-fluid" alt=""></div>
  <div class="swiper-slide"><img src="assets/img/clients/client-8.svg" class="img-fluid" alt=""></div>
</div>
</div>

</div>
</section><!-- End Clients Section -->

<!-- ======= Call To Action Section ======= -->
<section id="cta" class="cta">
<div class="container" data-aos="zoom-out">

<div class="row g-5">

<div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center order-last order-md-first">
  <h3>Welcome to <em>happyshopp</em> to shop</h3>
  <p>  Overall, I find happyshopp to be a user-friendly website with a wide range of products available at competitive prices. The homepage is well-designed and provides easy access to different product categories, promotional offers, and customer reviews. The website's search function is also robust and effective, making it easy to find specific items.</p>
  <a class="cta-btn align-self-start" href="/">Start shopping now</a>
</div>

<div class="col-lg-4 col-md-6 order-first order-md-last d-flex align-items-center">
  <div class="img">
    <img src="assets/img/cta.jpg" alt="" class="img-fluid">
  </div>
</div>

</div>

</div>
</section><!-- End Call To Action Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
<div class="container" data-aos="fade-up">

<div class="testimonials-slider swiper">
<div class="swiper-wrapper">

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
      <h3>Saul Goodman</h3>
      <h4>Ceo &amp; Founder</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        I have been a customer of happyshopp for several years now, and I have always been impressed with their attention to detail and commitment to quality. Their team is knowledgeable, friendly, and always willing to go the extra mile to ensure customer satisfaction
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
      <h3>Sara Wilsson</h3>
      <h4>Designer</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        I had an issue with my Smartphones, and I reached out to happyshopp's customer support team for assistance. They were prompt in their response and resolved the issue quickly and efficiently. I appreciate their professionalism and dedication to customer service
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
      <h3>Jena Karlis</h3>
      <h4>Store Owner</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        Thank you, happyshopp, for providing such excellent service. I was impressed by the attention to detail and the level of professionalism displayed by the team. They made the entire process seamless and stress-free, and I couldn't be happier with the end result. I will definitely be using happyshopp again in the future.        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
      <h3>Matt Brandon</h3>
      <h4>Freelancer</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        Working with happyshopp has been an absolute delight. The team is passionate about what they do, and it shows in the quality of their work. They took the time to understand my needs and provided me with a solution that exceeded my expectations. I would highly recommend happyshopp to anyone looking for phones & tablets, computers, or Gaming,or The fashion, or Televisions , or Books ,or Cameras ,or The accessories.
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

  <div class="swiper-slide">
    <div class="testimonial-item">
      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
      <h3>John Larson</h3>
      <h4>Entrepreneur</h4>
      <div class="stars">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
      </div>
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        I was hesitant to try happyshopp at first, but I'm so glad I did. The team was professional, courteous, and knowledgeable, making the entire process a breeze. The product itself is of excellent quality, and I have no doubt that it will last me for years to come. I would highly recommend happyshopp  to anyone looking for  phones & tablets, computers, or Gaming,or The fashion, or Televisions , or Books ,or Cameras ,or The accessories.
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
    </div>
  </div><!-- End testimonial item -->

</div>
<div class="swiper-pagination"></div>
</div>

</div>
</section><!-- End Testimonials Section -->



<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
<div class="container-fluid" data-aos="fade-up">

<div class="row gy-4">

<div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

  <div class="content px-xl-5">
    <h3>Frequently Asked <strong>Questions</strong></h3>
    
  </div>

  <div class="accordion accordion-flush px-xl-5" id="faqlist">

    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
          <i class="bi bi-question-circle question-icon"></i>
          How do I use Pay after Delivery once it's activated?
        </button>
      </h3>
      <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
        <div class="accordion-body">
          If your order is eligible, Pay after Delivery will appear as a payment option on the order confirmat        </div>
      </div>
    </div><!-- # Faq item-->

    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
          <i class="bi bi-question-circle question-icon"></i>
          Why has the estimated delivery time changed and when will I receive the goods?
        </button>
      </h3>
      <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
        <div class="accordion-body">
          Estimated delivery time will be changed according to the actual logistics and transportation situation. Usually you will receive the package within estimated delivery time.        </div>
      </div>
    </div><!-- # Faq item-->

    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
          <i class="bi bi-question-circle question-icon"></i>
          Why does it show that a refund is being processed after order cancellation?
        </button>
      </h3>
      <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
        <div class="accordion-body">
          You are supposed to get a refund for this order and happyshopp is processing the refund. After succe        </div>
      </div>
    </div><!-- # Faq item-->

    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
          <i class="bi bi-question-circle question-icon"></i>
          How can I get a refund if my credit card is no longer valid or has expired?
        </button>
      </h3>
      <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
        <div class="accordion-body">
          <i class="bi bi-question-circle question-icon"></i>
          For security reason, the refund will only be processed to the original card from which the payment has been deducted. <br>

          If your original card has expired or is not valid anymore, you may contact the card issuer(your bank or card company) for assistance, for they will still be able to receive the money on your behalf.        </div>
      </div>
    </div><!-- # Faq item-->

    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
      <h3 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
          <i class="bi bi-question-circle question-icon"></i>
          What's Free Return Service?
        </button>
      </h3>
      <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
        <div class="accordion-body">
          4. FAQsQ1. What does 'Free Return' mean?A1. You could return the item within 15 days after receiving
        </div>
      </div>
    </div><!-- # Faq item-->

  </div>

</div>

<div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
</div>

</div>
</section><!-- End F.A.Q Section -->

<!-- ======= Categories Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up">

<div class="container">

<div class="section-header">
<h2>Categories</h2>
</div>

</div>

<div class="container-fluid" data-aos="fade-up" data-aos-delay="200">

<div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

<ul class="portfolio-flters">
  <li data-filter="*" class="filter-active">All</li>
  <li data-filter=".filter-app">App</li>
  <li data-filter=".filter-product">Product</li>
  <li data-filter=".filter-branding">Branding</li>
  <li data-filter=".filter-books">Books</li>
</ul><!-- End Categories Filters -->

<div class="row g-0 portfolio-container">

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 1</h4>
      <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Portfolio Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
    <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Product 1</h4>
      <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
    <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Branding 1</h4>
      <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
    <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Books 1</h4>
      <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 2</h4>
      <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
    <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Product 2</h4>
      <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
    <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Branding 2</h4>
      <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
    <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Books 2</h4>
      <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
    <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>App 3</h4>
      <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-product">
    <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Product 3</h4>
      <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-branding">
    <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Branding 3</h4>
      <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-books">
    <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
    <div class="portfolio-info">
      <h4>Books 3</h4>
      <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
    </div>
  </div><!-- End Categories Item -->

</div><!-- End Categories Container -->

</div>

</div>
</section><!-- End Categories Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
<div class="container" data-aos="fade-up">

<div class="section-header">
<h2>Our Team</h2>
</div>

<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

<div class="col-xl-3 col-md-5 d-flex" data-aos="zoom-in" data-aos-delay="200">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <div class="social">
        <a href=""><i class="bi bi-twitter"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <h4>Oussama Elassmaoui</h4>
      <span>Developer full stack</span>
    </div>
  </div>
</div><!-- End Team Member -->

<div class="col-xl-3 col-md-5 d-flex" data-aos="zoom-in" data-aos-delay="400">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <div class="social">
        <a href=""><i class="bi bi-twitter"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <h4>Khalid Ammar</h4>
      <span>Developer full stack</span>
    </div>
  </div>
</div><!-- End Team Member -->

<div class="col-xl-3 col-md-5 d-flex" data-aos="zoom-in" data-aos-delay="600">
  <div class="team-member">
    <div class="member-img">
      <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
    </div>
    <div class="member-info">
      <div class="social">
        <a href=""><i class="bi bi-twitter"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <h4>Ilyass Bhihi</h4>
      <span>Developer full stack</span>
    </div>
  </div>
</div><!-- End Team Member -->
<div class="col-xl-3 col-md-5 d-flex" data-aos="zoom-in" data-aos-delay="400">
    <div class="team-member">
      <div class="member-img">
        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
      </div>
      <div class="member-info">
        <div class="social">
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
        <h4>Mohammed El Aouri</h4>
        <span>Developer full stack</span>
      </div>
    </div>
  </div><!-- End Team Member -->
</div>

</div>
</section><!-- End Team Section -->


<!---Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer__about">
                <div class="footer__about__logo">
                  <a href="/"><img src="{{ asset('frontend/img/logo.png') }}" alt="" style="width: 100px"/></a>
                </div>
                <ul>
                  <li>Address: Rabat-Salé-Kénitra</li>
                  <li>Phone: +2126754326178</li>
                  <li>Email: contact.happyshopp@gmail.com
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
              <div class="footer__widget">
                <h6>About</h6>
                <ul>
                  <li><a href="/Contact">Contact</a></li>
                  
                </ul>
                <ul>
                  <li><a href="/cart">View Cart</a></li>
                
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="footer__widget">
                <h6>Join Our Newsletter Now</h6>
                <p>
                  Get E-mail updates about our latest shop and special offers.
                </p>
                <form action="#">
                  <input type="text" placeholder="Enter your mail" />
                  <button type="submit" class="site-btn">Subscribe</button>
                </form>
                <div class="footer__widget__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="footer__copyright">
                <div class="footer__copyright__text">
                  <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    Happyshop
                   
                    
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
                <div class="footer__copyright__payment">
                  <img src="{{ asset('frontend/img/payment-item.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <!-- Footer Section End -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/maine.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  



</body>

</html>