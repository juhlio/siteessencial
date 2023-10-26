

<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link href="https://apiessencial.com.br/vercel/assets/images/favicon/favicon.png" rel="icon">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
        <link rel="stylesheet" href="https://apiessencial.com.br/vercel/assets/css/libraries.css">
        <link rel="stylesheet" href="https://apiessencial.com.br/vercel/assets/css/style.css">
        <script src="https://kit.fontawesome.com/47b650be03.js" crossorigin="anonymous"></script>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>




    </head>

    <body>

    <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header3" class="header header-3 header-full">
        <div class="header__topbar header__topbar-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-9 col-lg-9">
                        <ul class="contact__list list-unstyled">
                           
                        </ul>
                    </div><!-- /.col-lg-9 -->
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="social__icons justify-content-end">
                            <span>Redes Sociais:</span>
                            <a target="_blank" href="https://www.facebook.com/essencialgeradores/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/essencialenergia/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=5511940632628&text=Oi%20Essencial"><i class="fa fa-whatsapp"></i></a>
                        </div><!-- /.social-icons -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->

        <nav class="navbar navbar-expand-lg">

            <div class="container">

                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="https://apiessencial.com.br/vercel/assets/images/logo/logo-light.png" class="logo-light" alt="logo">
                    <img src="https://apiessencial.com.br/vercel/assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                </a>
                <button class="navbar-toggler" type="button">
                    <span class="menu-lines"><span></span></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavigation">
                    <ul class="navbar-nav mr-30 ml-auto">
                        <li class="nav__item with-dropdown">
                            <a href="{{route('home')}}"  class="nav__item-link">Home</a>
                        </li><!-- /.nav-item -->
                        <li class="nav__item with-dropdown">
                            <a href="#" data-toggle="dropdown"  class="dropdown-toggle nav__item-link">Institucional</a>
                            <ul class="dropdown-menu">
                                <li class="nav__item"><a href="{{route('quemsomos')}}" class="nav__item-link">Quem Somos</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{route('equipe')}}" class="nav__item-link">Equipe</a></li>
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{route('frota')}}" class="nav__item-link">Frota</a></li>
                                <!-- /.nav-item -->
                                <!-- /.nav-item -->
                                <li class="nav__item"><a href="{{route('timeline')}}" class="nav__item-link">Linha do Tempo</a></li>
                                <!-- /.nav-item -->


                            </ul><!-- /.dropdown-menu -->
                        </li><!-- /.nav-item -->

                        <li class="nav__item with-dropdown">
                            <a href="#" class="dropdown-toggle nav__item-link">Venda</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item with-dropdown">
                            <a href="#"  class="dropdown-toggle nav__item-link">Locação</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item with-dropdown">
                            <a href="#" d class="dropdown-toggle nav__item-link">Manutenção</a>
                        </li><!-- /.nav-item -->

                         <li class="nav__item with-dropdown">
                            <a href="#" class="dropdown-toggle nav__item-link">Cases</a>
                        </li><!-- /.nav-item -->

                        <li class="nav__item with-dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle nav__item-link">Blog</a>
                        </li><!-- /.nav-item -->
                        <!-- /.nav-item -->
                    </ul><!-- /.navbar-nav -->
                </div><!-- /.navbar-collapse -->
                <div class="modules__wrapper mr-2 d-flex align-items-center">


                  <a target="_blank" onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=5511940632628&text=Oi%20Essencial%20Energia');"  href="https://api.whatsapp.com/send?phone=5511940632628&text=Oi%20Essencial%20Energia" class="mr-2"><img height="50px" src="{{asset('assets/images/home/whats_icone.png')}}" ></a>

                    </div><!-- /.modules-wrapper -->
                <div class="navbar-modules">


                    <div class="modules__wrapper d-flex align-items-center">

                        <a href="#" class="module__btn module__btn-contact">Contato</a>
                        <a href="#" class="module__btn module__btn-search"><i class="york-search"></i></a>
                    </div><!-- /.modules-wrapper -->
                </div><!-- /.navbar-modules -->
            </div><!-- /.container -->
        </nav><!-- /.navabr -->
    </header>


    @yield('content')

<!--
   ========================
      Footer
    ========================== -->
    <footer id="footer1" class="footer footer-1 bg-heading">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 footer__widget footer__widget-about">
              <div class="footer__widget-content">
                <img src="https://apiessencial.com.br/vercel/assets/images/logo/logo-dark.png" alt="Essencial Energia Grupos Geradores" class="footer__logo">
                <p>Soluções Completas para Grupos Geradores de Energia. Desde o dimensionamento até o Start Up.</p>
                <ul class="contact__list2 list-unstyled">
                  <li><i class="icon-phone"></i>  0800 779 9009</li>
                  <li><i class="icon-document"></i>  contato@essencialenergia.com</li>
                  <li><i class="icon-map-pin"></i>  Avenida Atlântica, 998 - Santo André-SP</li>
                </ul>
              </div>
            </div><!-- /.col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-3 footer__widget footer__widget-posts">

            </div><!-- /.col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-3 footer__widget footer__widget-instagram">

            </div><!-- /.col-lg-3 -->
            <div class="col-sm-12 col-md-6 col-lg-3 footer__widget footer__widget-newsletter">
              <h6 class="footer__widget-title">Receba nossas novidades</h6>
              <div class="footer__widget-content">
                <form class="widget__newsletter-form" method="POST" action="#>
                  @csrf
                  <div class="form-group">
                    <input type="email" required name="email" class="form-control" placeholder="Digite seu e-mail">

                  <button type="submit"  class="form__submit"><i class="fa fa-long-arrow-right"></i></button>
                  </div>
                </form>
                <p>Aproveite e nos siga nas redes sociais.</p>
                <div class="social__icons">
                            <a target="_blank" href="https://www.facebook.com/essencialgeradores/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/essencialenergia/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=5511976168834&text=Oi%20Essencial"><i class="fa fa-whatsapp"></i></a>
                </div><!-- /.social-icons -->
              </div>
            </div><!-- /.col-lg-3 -->
          </div>
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <div class="footer__copyright">
                <span>&copy; 2023 Essencial Energia</span>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
    </footer><!-- /.Footer -->

    <button id="scrollTopBtn"><i class="arrow_up"></i></button>

    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Faça sua busca">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.module-search-container -->


  </div><!-- /.wrapper -->

  <script src="https://apiessencial.com.br/vercel/assets/js/jquery-3.3.1.min.js"></script>
  <script src="https://apiessencial.com.br/vercel/assets/js/plugins.js"></script>
  <script src="https://apiessencial.com.br/vercel/assets/js/main.js"></script>




    </body>
    </html>
