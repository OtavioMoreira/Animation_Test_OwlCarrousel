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

    <?php /*
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bitter:400,400italic,700">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets/plugins/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="//assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//assets/plugins/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="//assets/plugins/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="//assets/plugins/owl-carousel/css/owl.theme.green.min.css">
    <link rel="stylesheet" type="text/css" href="//assets/plugins/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="//assets/css/default.css">
 */ ?>
</head>

<body class="credit">
<main>
    <section id="owl-page-sync1" class="owl owl-carousel owl-theme text-center">
        <article class="item" item="home">
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
                        <a target="_blank" href="http://www.matera.com/br/2016/02/04/o-que-e-um-front-end-developer/">
                            <h2>Front-End Developer</h2>
                        </a>
                    </div>
                </div>
            </div>
        </article>

        <article class="item" item="animation">
            Animation
        </article>
    </section>

    <section id="menu-projects" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul id="owl-page-sync2" class="owl owl-carousel owl-theme text-center links">
                        <li class="text" data-item="animation">Home</li>
                        <li class="text" data-item="animation">Animation</li>
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
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/default.js"></script>

</body>

</html>

