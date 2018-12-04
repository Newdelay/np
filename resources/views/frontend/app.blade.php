<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Woox - Crypto</title>
    <link rel="stylesheet" type="text/css" href="css/plugins.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/theme-styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/blocks.min.css">
    <link rel="stylesheet" type="text/css" href="css/widgets.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i,900," rel="stylesheet">

    @yield("css")
</head>

<body class="crumina-grid">


<div id="hellopreloader">
    <div class="preloader">
        <svg width="135" height="140" fill="#fff">
            <rect width="15" height="120" y="10" rx="6">
                <animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="120;110;100;90;80;70;60;50;40;140;120"/>
                <animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="10;15;20;25;30;35;40;45;50;0;10"/>
            </rect>
            <rect width="15" height="120" x="30" y="10" rx="6">
                <animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="120;110;100;90;80;70;60;50;40;140;120"/>
                <animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="10;15;20;25;30;35;40;45;50;0;10"/>
            </rect>
            <rect width="15" height="140" x="60" rx="6">
                <animate attributeName="height" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="120;110;100;90;80;70;60;50;40;140;120"/>
                <animate attributeName="y" begin="0s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="10;15;20;25;30;35;40;45;50;0;10"/>
            </rect>
            <rect width="15" height="120" x="90" y="10" rx="6">
                <animate attributeName="height" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="120;110;100;90;80;70;60;50;40;140;120"/>
                <animate attributeName="y" begin="0.25s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="10;15;20;25;30;35;40;45;50;0;10"/>
            </rect>
            <rect width="15" height="120" x="120" y="10" rx="6">
                <animate attributeName="height" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="120;110;100;90;80;70;60;50;40;140;120"/>
                <animate attributeName="y" begin="0.5s" calcMode="linear" dur="1s" repeatCount="indefinite"
                         values="10;15;20;25;30;35;40;45;50;0;10"/>
            </rect>
        </svg>

        <div class="text">Loading ...</div>
    </div>
</div>


<header class="header" id="site-header">
    <div class="container">
        <div class="header-content-wrapper">
            <a href="/" class="site-logo">
                <img src="img/logo-primary.png" alt="Woox">
                <svg class="woox-icon" viewBox="0 0 481.448 101.996">
                    <path d="M152.514 14.926c0 2.1-1.339 4.593-2.1 7.081L126.3 89.366c-2.487 7.654-8.229 11.673-14.543 11.673-6.889 0-12.056-4.019-15.309-11.673L76.162 43.822 55.877 89.366c-3.253 7.654-8.994 11.673-15.309 11.673-6.7 0-12.056-4.019-14.543-11.673L2.1 22.007C1.148 19.519 0 17.031 0 14.926A14.213 14.213 0 0 1 14.352.574c5.358 0 11.1 3.062 12.821 8.037l15.5 49.18L62.575 9.76C65.063 3.827 69.655.574 76.162.574c6.7 0 11.29 3.253 13.778 9.186l19.71 48.031 15.692-49.18c1.531-4.593 7.271-8.037 12.821-8.037a14.212 14.212 0 0 1 14.351 14.352zM263.69 51.285c0 34.253-29.853 50.711-51.667 50.711-22.006 0-51.859-16.458-51.859-50.711C160.164 17.223 190.016 0 212.022 0c21.815 0 51.668 17.223 51.668 51.285zm-73.292 0c0 14.352 9.568 24.3 21.624 24.3 11.864 0 21.624-9.951 21.624-24.3 0-14.926-9.759-24.877-21.624-24.877-12.055 0-21.622 9.951-21.622 24.877zm190.974 0c0 34.253-29.853 50.715-51.672 50.715-22.006 0-51.858-16.458-51.858-50.711C277.845 17.223 307.7 0 329.7 0c21.819 0 51.672 17.223 51.672 51.285zm-73.291 0c0 14.352 9.567 24.3 21.623 24.3 11.865 0 21.624-9.951 21.624-24.3 0-14.926-9.759-24.877-21.624-24.877-12.056 0-21.623 9.951-21.623 24.877zm173.367 36.932c0 7.271-6.7 13.4-13.97 13.4-4.4 0-7.846-2.3-10.716-5.55l-21.05-24.686-21.05 24.686c-2.87 3.253-6.123 5.55-10.716 5.55-7.08 0-13.97-6.124-13.97-13.4a12.074 12.074 0 0 1 3.254-8.229l25.45-28.9-25.45-28.9a12.348 12.348 0 0 1-3.062-8.037c0-7.463 6.89-13.586 13.97-13.586a13.062 13.062 0 0 1 10.716 5.549L435.712 30.8l20.859-24.676c2.87-3.444 6.315-5.549 10.907-5.549 6.89 0 13.778 6.124 13.778 13.586a12.352 12.352 0 0 1-3.062 8.037l-25.451 28.9 25.451 28.9a11.252 11.252 0 0 1 3.254 8.219z"
                          data-name="Слой 2"/>
                </svg>
            </a>

            <nav id="primary-menu" class="primary-menu">


                <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                    <span class="mob-menu--title">Menu</span>
                    <span id="menu-icon-wrapper" class="menu-icon-wrapper">
						<svg width="1000px" height="1000px">
							<path id="pathD"
                                  d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
							<path id="pathE" d="M 300 500 L 700 500"></path>
							<path id="pathF"
                                  d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
						</svg>
					</span>
                </a>

                <ul class="primary-menu-menu">
                    <li>
                        <a href="/#home">{{ trans('menu.home') }}</a>
                    </li>
                    <li>
                        <a href="/#exchange">{{ trans('menu.cryptoExchange') }}</a>
                    </li>
                    <li class="">
                        <a href="/#about">{{ trans('menu.about') }}</a>
                    </li>
                    <li class="">
                        <a href="/#pricing">{{ trans('menu.pricing') }}</a>
                    </li>
                    <li class="">
                        <a href="/#contact">{{ trans('menu.contact') }}</a>
                    </li>
                    <li class="">
                        <a href="{{ route('login') }}">{{ trans('menu.login') }}</a>
                    </li>
                    <li class="">
                        <a href="{{ route('register') }}">{{ trans('menu.register') }}</a>
                    </li>
                </ul>

            </nav>

            <select class="woox--select language-switcher lang-header" data-minimum-results-for-search="Infinity"
                    data-dropdown-css-class="language-switcher-dropdown"  onchange="location = this.data('id');">
                <option @php echo Session::get("locale")=='en' ? 'selected':'' @endphp data-id="/lang/en" value="English">English</option>
                <option @php echo Session::get("locale")=='tr' ? 'selected':'' @endphp data-id="/lang/tr" value="Turkish">Türkçe</option>
            </select>

        </div>
    </div>
</header>


<div class="main-content-wrapper" id="home">

    @yield("content")
</div>
<footer id="site-footer" class="footer ">

    <canvas id="can"></canvas>
    <div class="container" id="contact">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12">
                <div class="widget w-info">
                    <a href="/" class="site-logo">
                        <img src="img/logo-primary.png" alt="Woox">
                        <svg class="woox-icon" viewBox="0 0 481.448 101.996">
                            <path d="M152.514 14.926c0 2.1-1.339 4.593-2.1 7.081L126.3 89.366c-2.487 7.654-8.229 11.673-14.543 11.673-6.889 0-12.056-4.019-15.309-11.673L76.162 43.822 55.877 89.366c-3.253 7.654-8.994 11.673-15.309 11.673-6.7 0-12.056-4.019-14.543-11.673L2.1 22.007C1.148 19.519 0 17.031 0 14.926A14.213 14.213 0 0 1 14.352.574c5.358 0 11.1 3.062 12.821 8.037l15.5 49.18L62.575 9.76C65.063 3.827 69.655.574 76.162.574c6.7 0 11.29 3.253 13.778 9.186l19.71 48.031 15.692-49.18c1.531-4.593 7.271-8.037 12.821-8.037a14.212 14.212 0 0 1 14.351 14.352zM263.69 51.285c0 34.253-29.853 50.711-51.667 50.711-22.006 0-51.859-16.458-51.859-50.711C160.164 17.223 190.016 0 212.022 0c21.815 0 51.668 17.223 51.668 51.285zm-73.292 0c0 14.352 9.568 24.3 21.624 24.3 11.864 0 21.624-9.951 21.624-24.3 0-14.926-9.759-24.877-21.624-24.877-12.055 0-21.622 9.951-21.622 24.877zm190.974 0c0 34.253-29.853 50.715-51.672 50.715-22.006 0-51.858-16.458-51.858-50.711C277.845 17.223 307.7 0 329.7 0c21.819 0 51.672 17.223 51.672 51.285zm-73.291 0c0 14.352 9.567 24.3 21.623 24.3 11.865 0 21.624-9.951 21.624-24.3 0-14.926-9.759-24.877-21.624-24.877-12.056 0-21.623 9.951-21.623 24.877zm173.367 36.932c0 7.271-6.7 13.4-13.97 13.4-4.4 0-7.846-2.3-10.716-5.55l-21.05-24.686-21.05 24.686c-2.87 3.253-6.123 5.55-10.716 5.55-7.08 0-13.97-6.124-13.97-13.4a12.074 12.074 0 0 1 3.254-8.229l25.45-28.9-25.45-28.9a12.348 12.348 0 0 1-3.062-8.037c0-7.463 6.89-13.586 13.97-13.586a13.062 13.062 0 0 1 10.716 5.549L435.712 30.8l20.859-24.676c2.87-3.444 6.315-5.549 10.907-5.549 6.89 0 13.778 6.124 13.778 13.586a12.352 12.352 0 0 1-3.062 8.037l-25.451 28.9 25.451 28.9a11.252 11.252 0 0 1 3.254 8.219z"
                                  data-name="Слой 2"/>
                        </svg>
                    </a>
                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                        formas humanitatis. Vitae purus faucibus ornare suspendisse sed nisi lacus sed viverra vulputate
                        sapien nec sagittis aliquam bibendum.</p>
                </div>

                <div class="widget w-contacts">
                    <ul class="socials socials--white">
                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-twitter woox-icon"></i>
                            </a>
                        </li>

                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-dribbble woox-icon"></i>
                            </a>
                        </li>

                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-instagram woox-icon"></i>
                            </a>
                        </li>

                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in woox-icon"></i>
                            </a>
                        </li>

                        <li class="social-item">
                            <a href="#">
                                <i class="fab fa-facebook-square woox-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0 col-xs-12">

                    <span>© All right reserved 2018.</span>
                    <span><a href="index.html">The Woox</a> - ICO and Cryptocurrency Website PSD Template.</span>

                    <div class="logo-design">
                        <img src="img/logo-fire.png" alt="ThemeFire">
                        <div class="design-wrap">
                            <div class="sup-title">designed by</div>
                            <a href="https://themeforest.net/user/themefire/portfolio" class="logo-title">themefire</a>
                        </div>
                    </div>

                    <div class="logo-design logo-design-crumina">
                        <img src="img/crumina-logo.png" alt="Crumina">
                        <div class="design-wrap">
                            <div class="sup-title">developed by</div>
                            <a href="https://crumina.net/" class="logo-title">Crumina</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <a class="back-to-top" href="#">
        <svg class="woox-icon icon-top-arrow">
            <use xlink:href="svg-icons/sprites/icons.svg#icon-top-arrow"></use>
        </svg>
    </a>
</footer>


<script src="js/method-assign.js"></script>


<script src="js/jquery-3.3.1.min.js"></script>

<script src="js/map-shortcode.js"></script>

<script src="js/js-plugins/crum-mega-menu.js"></script>
<script src="js/theme-plugins.js"></script>
<script src="js/js-plugins/isotope.pkgd.min.js"></script>
<script src="js/js-plugins/ajax-pagination.js"></script>
<script src="js/js-plugins/swiper.min.js"></script>
<script src="js/js-plugins/material.min.js"></script>
<script src="js/js-plugins/orbitlist.js"></script>

<script src="js/js-plugins/bootstrap-datepicker.js"></script>

<script defer src="fonts/fontawesome-all.js"></script>

<script src="js/main.js"></script>

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="js/toastr.min.js"></script>


<script>

    $('.lang-header').change(function(){
        values = $(this).children('option:selected').data('id');
        window.location = values;
    });


</script>
@yield("js")
{!! Toastr::message() !!}


</body>

</html>