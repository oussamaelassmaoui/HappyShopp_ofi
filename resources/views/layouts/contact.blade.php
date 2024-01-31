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

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/stylee.css') }}" type="text/css" />
    
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
                <li><a href="/About">About</a></li>
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
                            <li><a href="/About">About</a></li>
                            <li class="active"><a href="/contact">Contact</a></li>
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
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="fa-solid fa-location-dot"></i>
                <h4>Location:</h4>
                <p>Rabat-Salé-Kénitra</p>
              </div>

              <div class="email">
                <i class="fa-regular fa-envelope"></i>
                <h4>Email:</h4>
                <p>contact.happyshopp@gmail.com</p>
              </div>

              <div class="phone">
                <i class="fa-solid fa-mobile"></i>
                <h4>Call:</h4>
                <p>+2126754326178</p>
              </div>

              <div style="width: 100%"><iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=350&amp;hl=en&amp;q=rabat+(Happyshop)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe></div>              </div>

          </div>
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left"> 
    
            <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                                            @csrf
             
                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                            @endif
            <div class="row">
              <div class="form-group col-md-6" data-validate = "Name is required">
                <label for="name">Your Name</label>
                <input class="form-control" type="text" name="name" >
               
                                                </span>
                                                @error('name')
                                                    <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                            </div>
    
              <div class="form-group col-md-6 mt-3 mt-md-0" data-validate = "Valid email is required: ex@abc.xyz">
                <label for="name">Your Email</label>
                <input class="form-control" type="text" name="email" >
              </div>
              </div>
              <div class="form-group mt-3" data-validate = "Subject is required">
                <label for="name">Subject</label>
                <input class="form-control" type="text" name="subject" >
                                                    @error('subject')
                                                        <span class="text-danger"> {{ $message }} </span>
                                                    @enderror
                                                </div>
        
    
              <div class="form-group mt-3" data-validate = "Message is required">
                <label for="name">Message</label>
                <textarea class="form-control" name="content" rows="10" ></textarea>
                                            <span class="focus-input100"></span>
                                            @error('content')
                                               <span class="text-danger"> {{ $message }} </span>
                                             @enderror
                                            </div>
              
                                            
          
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="d-grid gap-2 col-6 mx-auto btn" style="background-color: #FF914C" >
                 Send
                </button>
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer__about">
                <div class="footer__about__logo">
                  <a href="/l"><img src="{{ asset('frontend/img/logo.png') }}" alt="" style="width: 100px"/></a>
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
                  <li><a href="#">Contact</a></li>
                  <li><a href="/About">About</a></li>
                  
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

    <!-- Js Plugins -->
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



</body>

</html>