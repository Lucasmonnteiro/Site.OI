<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Site Organização</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="inicio.php"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="inicio.php">Inicío</a></li>
                                <li><a href="cadastro.php">Cadastre-se</a></li>
                                <li><a href="entrar.php">Entrar</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner" id="top" style="background-image: url(img/homepage-banner-image-1920x700.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Descomplique sua rotina: onde a organização encontra a praticidade.</h2>
                        <div class="blue-button">
                            <a class="scroll-button" onclick="scrollDown()">Saiba mais!</a>
                            <script>
                                function scrollDown() {
                                    window.scrollBy({
                                        top: window.innerHeight,
                                        left: 0,
                                        behavior: 'smooth'
                                    });
                                }
                            </script>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>Do que se trata nossa plataforma?</h4>
                            <p>Nosso site de organização é uma solução abrangente e inovadora, projetada para otimizar a gestão de informações e projetos. Com ele, você pode estruturar suas atividades de maneira eficiente e lógica, transformando nossa plataforma em um hub central para todas as suas necessidades organizacionais. Descubra como nossa solução pode aumentar sua produtividade e trazer ordem ao caos, tanto no âmbito profissional quanto pessoal. Experimente hoje e veja a diferença!</p>
                            <div class="blue-button">
                                <a href="cadastro.php">Fazer parte!</a>
                            </div>

                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-2-720x480.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/footer_logo.png" alt="Venue Logo">
                        </div>
                        <p>Nosso site de organização oferece uma plataforma intuitiva e versátil, ideal para gerenciar suas tarefas, projetos e anotações. Simplifique sua rotina e aumente sua produtividade com nossa interface amigável e recursos inovadores. Experimente agora e transforme a maneira como você organiza sua vida pessoal e profissional!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Links Úteis</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="inicio.php"><i class="fa fa-stop"></i>Inicío</a></li>
                                    <li><a href="cadastro.php"><i class="fa fa-stop"></i>Cadastre-se</a></li>
                                    <li><a href="entrar.php"><i class="fa fa-stop"></i>Entrar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contato</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> Brasília, DF</p>
                        <ul>
                            <li><span>Aluno:Lucas Henrique</span></li>
                            <li><span>GitHub:</span><a href="https://github.com/Lucasmonnteiro">https://github.com/Lucasmonnteiro</a></li>
                            <li><span>Email:</span><a href="#">lucmont00@gmail.com</a></li>
                            <li><span>Aluno:Jessé alves</span></li>
                            <li><span>GitHub:</span><a href="https://github.com/jessealves1">https://github.com/jessealves1</a></li>
                            <li><span>Email:</span><a href="#">jessealvesbrasil23@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>