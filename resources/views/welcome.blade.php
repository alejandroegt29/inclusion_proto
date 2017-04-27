<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/animate.css">
         <link href="bootstrap/css/responsive-menu.css" rel="stylesheet">

    <!-- Unessential CSS - Just here to make this sample page prettier -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/styles.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
       <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jssor.slider-22.2.16.mini.js" type="text/javascript"></script>
         <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider loading skin oval css */

        .jssorl-oval img {
            animation-name: jssorl-oval;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-oval {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
        .salto{
            padding-top:200px;
        }
    </style>
    
<!--menuuuu-->

    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="../lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="../lib/html5shiv/html5shiv.js"></script>-->

    <!-- Load jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../lib/jquery-legacy/jquery.js"><\/script>')</script>

    <!-- Load Responsive Menu -->
    <script src="bootstrap/js/responsive-menu.js" type="text/javascript"></script>

    <!-- Setup Responsive Menu -->
    <script>
        jQuery(function ($) {
            var menu = $('.rm-nav').rMenu({
                // Optional Settings
                /**
                 * Minimum width for expanded layout in pixels - String
                 * The media query in css file should be changed to match this
                 * Must be in pixels and include px units if not using Modernizr.
                 * @default '769px'
                 */
                minWidth: '960px',
                /**
                 * The opening and closing speed of the menus in milliseconds
                 * @default 400
                 */
                //transitionSpeed: 400,
                /**
                 * The jQuery easing function - used with jQuery transitions
                 * @default 'swing'
                 * @options 'swing', 'linear'
                 */
                //jqueryEasing: 'swing',
                /**
                 * The CSS3 transitions easing function - used with CSS3 transitions
                 * @default 'ease'
                 */
                //css3Easing: 'ease',
                /**
                 * Use button as toggle link - instead of text
                 * @default true
                 */
                //toggleBtnBool: true,
                /**
                 * The Toggle Link selector
                 * @default '.rm-toggle'
                 */
                //toggleSel: '.rm-toggle',
                /**
                 * The menu/sub-menu selector
                 * @default 'ul'
                 */
                //menuSel: 'ul',
                /**
                 * The menu items selector
                 * @default 'li'
                 */
                //menuItemsSel: 'li',
                /**
                 * Use CSS3 animation/transitions Boolean
                 * @default true
                 * Do not use animation/transitions: false
                 */
                //animateBool: false,
                /**
                 * Force GPU Acceleration Boolean
                 * @default false
                 * Do not force: false
                 */
                //accelerateBool: true,
                /**
                 * the setup complete callback function
                 * @default 'false'
                 */
                //setupCallback: false,
                /**
                 * the tabindex start value - integer
                 * @default 1
                 */
                //tabindexStart: 5,
                /**
                 * Use development mode - outputs information to console
                 * @default false
                 */
                //developmentMode: false
            });
        });
    </script>

<header class="navbar-fixed-top">
        <div class="wrapper">
    <div class="brand">
        <p><a href="#" class="logo">RM</a></p>
    </div>

    <!-- START Responsive Menu HTML -->
    <div class="rm-container">
        <a class="rm-toggle rm-button rm-nojs" href="#">Menu</a>

        <nav class="rm-nav rm-nojs rm-lighten">
            <ul>
                <li><a href="#">Nuestro Sitio po</a>
                    <ul>
                        <li><a href="#">Sub Item 1</a></li>
                        <li><a href="#">Sub Item 2</a></li>
                        <li><a href="#">Sub Item 3</a>
                            <ul>
                                <li><a href="#">Sub Sub Item 1</a></li>
                                <li><a href="#">Sub Sub Item 2</a></li>
                                <li><a href="#">Sub Sub Item 3</a></li>
                                <li><a href="#">Sub Sub Item 4</a></li>
                                <li><a href="#">Sub Sub Item 5</a></li>
                                <li><a href="#">Sub Sub Item 6</a></li>
                                <li><a href="#">Sub Sub Item 7</a></li>
                            </ul></li>
                        <li><a href="#">Sub Item 4¡</a></li>
                        <li><a href="#">Sub Item 5</a></li>
                        <li><a href="#">Sub Item 6</a>
                            <ul>
                                <li><a href="#">Sub Sub Item 1</a></li>
                                <li><a href="#">Sub Sub Item 2</a></li>
                                <li><a href="#">Sub Sub Item 3</a></li>
                                <li><a href="#">Sub Sub Item 4</a></li>
                                <li><a href="#">Sub Sub Item 5</a></li>
                                <li><a href="#">Sub Sub Item 6</a></li>
                                <li><a href="#">Sub Sub Item 7</a></li>
                            </ul></li>
                        <li><a href="#">Sub Item 7</a></li>
                        <li><a href="#">Sub Item 8</a></li>
                        <li><a href="#">Sub Item 9</a></li>
                    </ul></li>
                <li><a href="#">Productos</a>
                    <ul>
                        <li><a href="#">Sub Item 1</a></li>
                        <li><a href="#">Sub Item 2</a></li>
                        <li><a href="#">Sub Item 3</a>
                            <ul>
                                <li><a href="#">Sub Sub Item 1</a></li>
                                <li><a href="#">Sub Sub Item 2</a></li>
                                <li><a href="#">Sub Sub Item 3</a></li>
                                <li><a href="#">Sub Sub Item 4</a></li>
                                <li><a href="#">Sub Sub Item 5</a></li>
                                <li><a href="#">Sub Sub Item 6</a></li>
                                <li><a href="#">Sub Sub Item 7</a></li>
                            </ul></li>
                        <li><a href="#">Sub Item 4</a></li>
                        <li><a href="#">Sub Item 5</a></li>
                    </ul></li>
                <li><a href="#">Vendedores</a></li>
                <li><a href="#">Eventos</a>
                    <ul>
                        <li><a href="#">Sub Item 1</a></li>
                        <li><a href="#">Sub Item 2</a></li>
                        <li><a href="#">Sub Item 3</a>
                            <ul>
                                <li><a href="#">Sub Sub Item 1</a></li>
                                <li><a href="#">Sub Sub Item 2</a></li>
                                <li><a href="#">Sub Sub Item 3</a></li>
                            </ul></li>
                    </ul></li>
                <li><a href="#">Log in</a>
                    <ul>
                        <li><a href="#">Sub Item 1</a></li>
                        <li><a href="#">Sub Item 2</a>
                            <ul>
                                <li><a href="#">Sub Sub Item 1</a></li>
                                <li><a href="#">Sub Sub Item 2</a></li>
                                <li><a href="#">Sub Sub Item 3</a></li>
                            </ul></li>
                    </ul></li>
            </ul>
        </nav>
    </div><!-- .rm-container -->
    <!-- End Responsive Menu HTML -->
        </div><!-- .wrapper -->
</header>
<br><br><br>

    <div class="salto" id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1100px;height:370px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="img/oval.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1100px;height:370px;overflow:hidden;">
            <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
            <div>
                <img data-u="image" src="img/ARTESANOS--768x405.jpg" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div class="animated bounceInLeft"xxx style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;">
                    <strong>Ofrecemos productos hechos a mano</strong></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;"></div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>
                </div>
            </div>
            <div>
                <img data-u="image" src="http://2.bp.blogspot.com/-0I3KeJ4FIVQ/Vbt79EwSdAI/AAAAAAAAGEs/2pw2CZClFV0/s1600/DSCN3838.JPG" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;">
                    <strong>Tenemos muchas categorias</strong></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;"></div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>
                </div>
            </div>
            <div>
                <img data-u="image" src="http://www.incluyeme.com/wp-content/uploads/2016/10/hotel-discapacidad-3.jpg" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#ffffff;line-height:40px;"><strong>Conoce a los protagonistas</strong></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:38px;">i</div>
                </div>
                <div style="position:absolute;top:370px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(255,255,255,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>
                </div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    
    @include('buscador')
    
    </body>
</html>
