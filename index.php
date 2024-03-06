<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site - Nicole Luise</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration:none;
            list-style: none;
        }
        body{
            font-family:'Poppins',sans-serif;
            
        }
        :root{
            --verde-escuro: #14424b;
            --verde: #2f9364;
            --laranja: #ff7c37;
            --cinza-1: #a1a1a1;
            --cinza-2: #868585;
        }
        .background-verde{
            background:var(--verde-escuro);
        }
        .container{
            max-width: 1440px;
            padding: 0 5%;
            margin: 0 auto;
        }
        nav{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        .logo{
            font-size: 30px;
            font-weight: bold;
            color: #fff;
        }
       
        .ul{
            display: flex;
        }
        .ul li{
            margin: 0 35px;
            font-size: 15px;
        }
        .ul li a{
           color: #fff;
        }
        main .container{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .main-text{
            width: 50%;
            color: #fff;
        }
        .main-text h1{
            font-size: 4.0rem;
        }
        .main-text div{
            display: flex;
            align-items: center; 
            margin-top: 20px;
        }
        .main-img{
            jUstify-content:center;
        }
        .resultados{
            background: #fa8607;
        }
        .resultados{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .resultados .resultados-text{
            color: #fff;
            font-size: 1.6rem;
            font-weight: 600;
            

        }
        .resultados .resultados-numeros{
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;

        }
        .resultados .resultados-numeros p{
            text-align: center;
            margin: 0 30px;
            font-size: 20px;
        }
        .resultados .resultados-numeros p span{
            font-size: 30px;
            font-weight: 600;
        }

        section,
        footer{
            padding: 2.7rem 0;
        }
        .diferenciais .container{

            display:flex;
            justify-content: space-between;
            margin: 30px auto;
        }
        .diferenciais .card .titulo{
            margin: 10px 0;
            font-weight: 600;
        }
        .diferenciais .card {
            width: 30%;
            cursor: pointer;
            padding: 30px;
            border-radius: 15px;
            transition: 0.3s;

        
        }
        .diferenciais .card:hover{
            background-color: orange;
            box-shadow:0px 10px 67px 8px #e6e6e6;
        }
        footer span{
           justify-content: center;
        }

    </style>
</head>
<body>
<div class="background-verde">
    <header>
        <div class="container">
            <nav>
            <div class="logo">
               NLstudio
            </div> 
            <ul class="ul">
                <li><a href="#home">Home</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><a href="inicio.php">SICA</a></li>
            </ul> 
            
             </nav>        
        </div>
    </header>
    <main>
        <div class="container" id="home">
            <div class="main-text">
                <h1>O Mundo está nas suas mãos</h1>
                <h2>Inovador & Tecnológico</h2>
                <div class="main-img">
                    <img src="download(2).jpg" alt="">

                </div>

            </div>
        </div>
    </main>
</div>  
<section class="resultados">
    <div class="container">
        <div class="resultados-text">
            Ajudar pessoas e grandes empresas com tecnologia e conforto.
        </div>
        <div class="resultados-numeros">
            <p>
                <span> +50 mil</span><br>
            clientes
        </p>
        <p>
            <span> +21 mil</span><br>
            funcionários
        </p>
        <p>
            <span> +40 mil</span><br>
            projetos
        </p>
        </div>
    </div>

</section >

<section class="diferenciais">
    <div class="container">
        <div class="card">
            <h3 class="titulo">
                Empresa profissional
            </h3>
            <p>Trabalhamos á mais de 20 anos com excelencia. Com visões inovadoras sobre o futuro e a tecnologia</p>
        </div>
        <div class="card">
            <h3 class="titulo">
                Consultoria 24horas
            </h3>
            <p>prestamos uma assistencia de 24 horas, para felicidade e tranquilidade do cliente.</p>
        </div>
        <div class="card">
            <h3 class="titulo">
                Servimos em todo Brsil!
            </h3>
            <p>Damos assistencia em toda região do pais</p>
        </div>
    </div>
</section>

<footer><hr><span>Todos os direiros reservardos á Nicole Luise <br> Tel:(71)9999999 <br> E-mail:nicoleluise04@gmail.com</span></footer>

<div class="container">
    <div class="row">
        <div class="col">
<?php
                $paginaParaCarregar = $_GET["page"] ?? "boasvindas";
                
                include("config.php");
                switch ($paginaParaCarregar) {
                    case "atuarnoBanco":
                        include("atuarnoBanco.php");
                        break;   
                    case "verfuncionario":
                        include("verfuncionario.php");
                        break; 
                    case 'edicao':
                        include("edicao.php");
                        break;  
                    default:
                        include('exclusao.php'); 
                }
            ?>

        </div>
    </div>
</div>


</body>
</html>

