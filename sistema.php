<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: entrar.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <title>Pagína principal</title>
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
                                <li class='active'><a href="sair.php">Sair</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
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
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contato</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> Brasília, DF</p>
                        <ul>
                            <li><span>GitHub:</span><a href="https://github.com/Lucasmonnteiro">https://github.com/Lucasmonnteiro</a></li>
                            <li><span>Email:</span><a href="#">lucmont00@gmail.com</a></li>
                            <li><span>GitHub:</span><a href="https://github.com/jessealves1">https://github.com/jessealves1</a></li>
                            <li><span>Email:</span><a href="#">jessealvesbrasil23@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>