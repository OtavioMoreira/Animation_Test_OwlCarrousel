<!DOCTYPE HTML>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Tool used to test the animals of the Owl Carrousel"/>
    <meta name="author" content="Lead Force LTDA">

    <meta name="referrer" content="origin">

    <meta name="copyright" content="&copy; <?php echo date('Y') ?> Otávio Moreira"/>

    <meta name="referrer" content="origin">
    <title>Owl Carrousel for Testing</title>

    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/owl-carousel/css/owl.theme.green.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" type="text/css" href="assets/css/default.css?v=<?php echo time(); ?>">
</head>

<body class="credit">
<main>
    <section>
        <ul id="owl-page-sync1" class="owl owl-carousel owl-theme text-center no-style-list">
            <li class="item" item="home">
                <div class="container">
                    <div class="row">
                        <h3>Owl Tester</h3>

                        <div class="profile" itemscope itemtype="http://schema.org/Person">
                            <div class="align">
                                <img src="assets/img/teste.png" width="150" height="150" alt="Otávio Moreira"
                                     itemprop="image">
                            </div>

                            <h1 class="name" itemprop="name"><span>Otávio</span><span>Moreira</span></h1>
                        </div>

                        <div class="about-me">
                            <h2>Front-End Developer</h2>
                        </div>
                    </div>
                </div>
            </li>

            <li class="item" item="animation">
                <div class="container">
                    <div class="col-md-8 no-pad-right">
                        <h3 class="text-center">Animations</h3>

                        <div class="relative-position">
                            <div class="owl effect-carrousel owl-carousel owl-theme">
                                <div class="item text-left dark-blue">
                                    <h4>1</h4>
                                </div>

                                <div class="item text-left blue">
                                    <h4>2</h4>
                                </div>

                                <div class="item text-left light-blue">
                                    <h4>3</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row ajust">
                            <div class="col-xs-6 col-md-4">
                                <label for="" class="animated-name">AnimateOut</label>
                                <select class="form-control" id="animateOut">
                                    <optgroup label="Attention Seekers">
                                        <option value="bounce">bounce</option>
                                        <option value="flash">flash</option>
                                        <option value="pulse">pulse</option>
                                        <option value="rubberBand">rubberBand</option>
                                        <option value="shake">shake</option>
                                        <option value="swing">swing</option>
                                        <option value="tada">tada</option>
                                        <option value="wobble">wobble</option>
                                        <option value="jello">jello</option>
                                    </optgroup>

                                    <optgroup label="Bouncing Entrances">
                                        <option value="bounceIn">bounceIn</option>
                                        <option value="bounceInDown">bounceInDown</option>
                                        <option value="bounceInLeft">bounceInLeft</option>
                                        <option value="bounceInRight">bounceInRight</option>
                                        <option value="bounceInUp">bounceInUp</option>
                                    </optgroup>

                                    <optgroup label="Bouncing Exits">
                                        <option value="bounceOut">bounceOut</option>
                                        <option value="bounceOutDown">bounceOutDown</option>
                                        <option value="bounceOutLeft">bounceOutLeft</option>
                                        <option value="bounceOutRight">bounceOutRight</option>
                                        <option value="bounceOutUp">bounceOutUp</option>
                                    </optgroup>

                                    <optgroup label="Fading Entrances">
                                        <option value="fadeIn">fadeIn</option>
                                        <option value="fadeInDown">fadeInDown</option>
                                        <option value="fadeInDownBig">fadeInDownBig</option>
                                        <option value="fadeInLeft">fadeInLeft</option>
                                        <option value="fadeInLeftBig">fadeInLeftBig</option>
                                        <option value="fadeInRight">fadeInRight</option>
                                        <option value="fadeInRightBig">fadeInRightBig</option>
                                        <option value="fadeInUp">fadeInUp</option>
                                        <option value="fadeInUpBig">fadeInUpBig</option>
                                    </optgroup>

                                    <optgroup label="Fading Exits">
                                        <option value="fadeOut">fadeOut</option>
                                        <option value="fadeOutDown">fadeOutDown</option>
                                        <option value="fadeOutDownBig">fadeOutDownBig</option>
                                        <option value="fadeOutLeft">fadeOutLeft</option>
                                        <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                        <option value="fadeOutRight">fadeOutRight</option>
                                        <option value="fadeOutRightBig">fadeOutRightBig</option>
                                        <option value="fadeOutUp">fadeOutUp</option>
                                        <option value="fadeOutUpBig">fadeOutUpBig</option>
                                    </optgroup>

                                    <optgroup label="Flippers">
                                        <option value="flip">flip</option>
                                        <option value="flipInX">flipInX</option>
                                        <option value="flipInY">flipInY</option>
                                        <option value="flipOutX">flipOutX</option>
                                        <option value="flipOutY">flipOutY</option>
                                    </optgroup>

                                    <optgroup label="Lightspeed">
                                        <option value="lightSpeedIn">lightSpeedIn</option>
                                        <option value="lightSpeedOut">lightSpeedOut</option>
                                    </optgroup>

                                    <optgroup label="Rotating Entrances">
                                        <option value="rotateIn">rotateIn</option>
                                        <option value="rotateInDownLeft">rotateInDownLeft</option>
                                        <option value="rotateInDownRight">rotateInDownRight</option>
                                        <option value="rotateInUpLeft">rotateInUpLeft</option>
                                        <option value="rotateInUpRight">rotateInUpRight</option>
                                    </optgroup>

                                    <optgroup label="Rotating Exits">
                                        <option value="rotateOut">rotateOut</option>
                                        <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                        <option value="rotateOutDownRight">rotateOutDownRight</option>
                                        <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                        <option value="rotateOutUpRight">rotateOutUpRight</option>
                                    </optgroup>

                                    <optgroup label="Sliding Entrances">
                                        <option value="slideInUp">slideInUp</option>
                                        <option value="slideInDown">slideInDown</option>
                                        <option value="slideInLeft">slideInLeft</option>
                                        <option value="slideInRight">slideInRight</option>

                                    </optgroup>
                                    <optgroup label="Sliding Exits">
                                        <option value="slideOutUp">slideOutUp</option>
                                        <option value="slideOutDown">slideOutDown</option>
                                        <option value="slideOutLeft">slideOutLeft</option>
                                        <option value="slideOutRight">slideOutRight</option>

                                    </optgroup>

                                    <optgroup label="Zoom Entrances">
                                        <option value="zoomIn">zoomIn</option>
                                        <option value="zoomInDown">zoomInDown</option>
                                        <option value="zoomInLeft">zoomInLeft</option>
                                        <option value="zoomInRight">zoomInRight</option>
                                        <option value="zoomInUp">zoomInUp</option>
                                    </optgroup>

                                    <optgroup label="Zoom Exits">
                                        <option value="zoomOut">zoomOut</option>
                                        <option value="zoomOutDown">zoomOutDown</option>
                                        <option value="zoomOutLeft">zoomOutLeft</option>
                                        <option value="zoomOutRight">zoomOutRight</option>
                                        <option value="zoomOutUp">zoomOutUp</option>
                                    </optgroup>

                                    <optgroup label="Specials">
                                        <option value="hinge">hinge</option>
                                        <option value="rollIn">rollIn</option>
                                        <option value="rollOut">rollOut</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-xs-6 col-md-4">
                                <label for="" class="animated-name">AnimateIn</label>
                                <select class="form-control" id="animateIn">
                                    <optgroup label="Attention Seekers">
                                        <option value="bounce">bounce</option>
                                        <option value="flash">flash</option>
                                        <option value="pulse">pulse</option>
                                        <option value="rubberBand">rubberBand</option>
                                        <option value="shake">shake</option>
                                        <option value="swing">swing</option>
                                        <option value="tada">tada</option>
                                        <option value="wobble">wobble</option>
                                        <option value="jello">jello</option>
                                    </optgroup>

                                    <optgroup label="Bouncing Entrances">
                                        <option value="bounceIn">bounceIn</option>
                                        <option value="bounceInDown">bounceInDown</option>
                                        <option value="bounceInLeft">bounceInLeft</option>
                                        <option value="bounceInRight">bounceInRight</option>
                                        <option value="bounceInUp">bounceInUp</option>
                                    </optgroup>

                                    <optgroup label="Bouncing Exits">
                                        <option value="bounceOut">bounceOut</option>
                                        <option value="bounceOutDown">bounceOutDown</option>
                                        <option value="bounceOutLeft">bounceOutLeft</option>
                                        <option value="bounceOutRight">bounceOutRight</option>
                                        <option value="bounceOutUp">bounceOutUp</option>
                                    </optgroup>

                                    <optgroup label="Fading Entrances">
                                        <option value="fadeIn">fadeIn</option>
                                        <option value="fadeInDown">fadeInDown</option>
                                        <option value="fadeInDownBig">fadeInDownBig</option>
                                        <option value="fadeInLeft">fadeInLeft</option>
                                        <option value="fadeInLeftBig">fadeInLeftBig</option>
                                        <option value="fadeInRight">fadeInRight</option>
                                        <option value="fadeInRightBig">fadeInRightBig</option>
                                        <option value="fadeInUp">fadeInUp</option>
                                        <option value="fadeInUpBig">fadeInUpBig</option>
                                    </optgroup>

                                    <optgroup label="Fading Exits">
                                        <option value="fadeOut">fadeOut</option>
                                        <option value="fadeOutDown">fadeOutDown</option>
                                        <option value="fadeOutDownBig">fadeOutDownBig</option>
                                        <option value="fadeOutLeft">fadeOutLeft</option>
                                        <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                                        <option value="fadeOutRight">fadeOutRight</option>
                                        <option value="fadeOutRightBig">fadeOutRightBig</option>
                                        <option value="fadeOutUp">fadeOutUp</option>
                                        <option value="fadeOutUpBig">fadeOutUpBig</option>
                                    </optgroup>

                                    <optgroup label="Flippers">
                                        <option value="flip">flip</option>
                                        <option value="flipInX">flipInX</option>
                                        <option value="flipInY">flipInY</option>
                                        <option value="flipOutX">flipOutX</option>
                                        <option value="flipOutY">flipOutY</option>
                                    </optgroup>

                                    <optgroup label="Lightspeed">
                                        <option value="lightSpeedIn">lightSpeedIn</option>
                                        <option value="lightSpeedOut">lightSpeedOut</option>
                                    </optgroup>

                                    <optgroup label="Rotating Entrances">
                                        <option value="rotateIn">rotateIn</option>
                                        <option value="rotateInDownLeft">rotateInDownLeft</option>
                                        <option value="rotateInDownRight">rotateInDownRight</option>
                                        <option value="rotateInUpLeft">rotateInUpLeft</option>
                                        <option value="rotateInUpRight">rotateInUpRight</option>
                                    </optgroup>

                                    <optgroup label="Rotating Exits">
                                        <option value="rotateOut">rotateOut</option>
                                        <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                                        <option value="rotateOutDownRight">rotateOutDownRight</option>
                                        <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                                        <option value="rotateOutUpRight">rotateOutUpRight</option>
                                    </optgroup>

                                    <optgroup label="Sliding Entrances">
                                        <option value="slideInUp">slideInUp</option>
                                        <option value="slideInDown">slideInDown</option>
                                        <option value="slideInLeft">slideInLeft</option>
                                        <option value="slideInRight">slideInRight</option>

                                    </optgroup>
                                    <optgroup label="Sliding Exits">
                                        <option value="slideOutUp">slideOutUp</option>
                                        <option value="slideOutDown">slideOutDown</option>
                                        <option value="slideOutLeft">slideOutLeft</option>
                                        <option value="slideOutRight">slideOutRight</option>

                                    </optgroup>

                                    <optgroup label="Zoom Entrances">
                                        <option value="zoomIn">zoomIn</option>
                                        <option value="zoomInDown">zoomInDown</option>
                                        <option value="zoomInLeft">zoomInLeft</option>
                                        <option value="zoomInRight">zoomInRight</option>
                                        <option value="zoomInUp">zoomInUp</option>
                                    </optgroup>

                                    <optgroup label="Zoom Exits">
                                        <option value="zoomOut">zoomOut</option>
                                        <option value="zoomOutDown">zoomOutDown</option>
                                        <option value="zoomOutLeft">zoomOutLeft</option>
                                        <option value="zoomOutRight">zoomOutRight</option>
                                        <option value="zoomOutUp">zoomOutUp</option>
                                    </optgroup>

                                    <optgroup label="Specials">
                                        <option value="hinge">hinge</option>
                                        <option value="rollIn">rollIn</option>
                                        <option value="rollOut">rollOut</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <label for="" class="animated-name opacity">AnimateOut</label>
                                <button class="btn btn-animate">Animate</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3 class="text-center">Code</h3>

                        <div class="code text-left">
                            <div class="tolltip">
                                <div class="box">
                                    Js
                                </div>

                                <div class="box effect">
                                    Copy
                                </div>
                            </div>

                            <p class="text-code">
                                <span class="cifrao">$</span>(<span class="string">'.owl-carrousel'</span>).<span
                                    class="virgula">owlCarousel</span>({<br>

                                <span class="spacing">
                                    <span class="option">animateOut</span>: <span class="string"
                                                                                  animateOut></span>,<br>
                                    <span class="option">animateIn</span>: <span class="string"
                                                                                 animateIn></span>,<br>
                                    <span class="option">items</span>: <span class="result">1</span>,<br>
                                    <span class="option">margin</span>: <span class="result">30</span>,<br>
                                    <span class="option">dots</span>: <span class="result">true</span>,<br>
                                    <span class="option">nav</span>: <span class="result">true</span>,<br>
                                    <span class="option">stagePadding</span>: <span class="result">30</span>,<br>
                                    <span class="option">smartSpeed</span>: <span class="result">450</span><br>
                                </span>
                                });
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section id="menu-projects" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="owl-page-sync2" class="owl-carousel owl-theme text-center links no-style-list">
                        <li class="text item active" data-item="home">Home</li>
                        <li class="text item" data-item="animation">Animation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="links">
                    <li><a class="text" href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Contato</a>
                    </li>
                    <li><a class="text" target="_blank"
                           href="https://www.facebook.com/otavio.mellomoreira?ref=br_rs">Facebook</a>
                    </li>
                    <li><a class="text" target="_blank" href="https://github.com/OtavioMoreira">GitHub</a></li>
                    <li><a class="text" target="_blank"
                           href="https://www.linkedin.com/pub/ot%C3%A1vio-moreira/b3/a84/4a6">Linkedin</a></li>
                </ul>
            </div>

            <div class="col-md-12">
                <p class="text-center" id="copyright" property="dc:rights">&copy; Copyright
                    <span property="dc:dateCopyrighted"><?php echo date('Y') ?></span>
                    <span property="dc:publisher">Otávio Moreira</span>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Contact</h4>
            </div>
            <div class="modal-body relative-position">
                <form id="send-email" action="javascript:send_email();" class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input class="form-control" type="text" name="name" required>
                    </div>

                    <div class="col-md-2">
                        <label for="">State</label>
                        <input class="form-control" type="text" name="state">
                    </div>

                    <div class="col-md-4">
                        <label for="">City</label>
                        <input class="form-control" type="text" name="city">
                    </div>

                    <div class="col-md-8">
                        <label for="">E-mail</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>

                    <div class="col-md-4">
                        <label for="">Office</label>
                        <input class="form-control" type="text" name="office">
                    </div>

                    <div class="col-md-12">
                        <label for="">Message</label>
                        <textarea class="form-control" name="message" cols="30" rows="10" required></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default transition-all" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>

                <div class="form-sucess text-center">
                    <div class="loader">
                        <span>{</span><span>}</span>
                    </div>

                    <div class="sucess">
                        <i class="fa fa-check-circle" aria-hidden="true"></i>

                        <h2>Message sent successfully!</h2>
                    </div>

                    <div class="error">
                        <i class="fa fa-grav" aria-hidden="true"></i>

                        <h2>Your try for space, try again!</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/default.js?v=<?php echo time(); ?>"></script>

</body>

</html>

