<php>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ernani Portifolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d19b8e1807.js" crossorigin="anonymous"></script>
</head>

    <style>
        .FotoPerfil{
            height:100px;
            width:auto;
            max-width:100px;
            border-radius:50%;
        }


        .corPrimaria {
            background-color: burlywood;
        }

        .corSecundaria {
            background-color: #2c3e50;
        }

        p {
            font-family: lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
            color: black !important;
        }

        .incones {
            padding-left: 5px;
        }
        
        .titulosBrancos {
            text-decoration: underline;
            text-underline-position: below;
            padding-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color: white;
        }

        .titulosVerde {
            text-decoration: underline;
            text-underline-position: below;
            padding-bottom: 20px;
            text-transform: uppercase;
            font-weight: 700;
            color: #18bc9c;
        }
        .contatoWhatsapp{
            color: green;
        }
        

        .textoBranco {
            color: white !important;
        }
        .aumentoIcone {
        font-size:20px;
        text-align: center;
        }

        .jumbotron {
            margin-bottom: 0px;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
<body>
    <nav class="corSecundaria navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand textoBranco" href="#">Ernani Silveira</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Projetos">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Sobre-Mim">Sobre mim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Visão">Visão</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link textoBranco" href="#Contato">Contato</a>

            </ul>
        </div>
    </nav>
    <section class="jumbotron text-center corPrimaria">
        <div class="container">
            <img-responsive class="FotoPerfil" src="afropython.jpeg" alt="">
            <h1 class="jumbotron-heading  ">Ernani Silveira</h1>
            <p class="lead  textoBranco">Estudante de ciência da computação</p>
            <p>
                <a href="#Contato" class="btn btn-dark my-2">Contato</a>
            </p>
            <a href="https://github.com/ErnaniSilveira16"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/ernani-silveira-6a4647161"><i class="fab fa-linkedin"></i></a>
            <a  href="mailto:ernanisilveira19@gmail.com"><i  class="fas fa-envelope-open-text "></i></a>
        </div>
    </section>
    <div class="album py-5 bg-light" id="Projetos">
        <div class="container-fluid">
            <h2 class="jumbotron-heading text-center titulosVerde">Projetos</h2>

            <div class="row ">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Miniatura [100% x225]" style="height: 225px; width: 100%; display: block;" src="js.png"
                            data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text text-center"> Curso de JavaScript na skylab</p>
                            <ul>
                                <li>JavaScript</li>
                                <li>CSS</li>
                                <li>Html</li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="https://github.com/ErnaniSilveira16/JavaScript"><center> <button type="button"
                                            class="btn btn-sm btn-outline-success ">Ver Projeto</button></center></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Miniatura [100% x225]" style="height: 225px; width: 100%; display: block;"
                            src="Testes.png" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text text-center">Em Breve curso de Testes</p>
                            <ul>
                                <li>Conceito de Testes</li>
                                <li>TDD com JavaScript</li>
                                <li>Indisponivel</li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="www.google.com.br"> <button type="button"
                                            class="btn btn-sm btn-outline-success ">Ver Projeto</button></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Miniatura [100% x225]" style="height: 225px; width: 100%; display: block;"
                            src="CICD.jpg" data-holder-rendered="true">
                        <div class="card-body">
                            <p class="card-text text-center">Embreve curso de CI/CD</p>
                            <ul>
                                <li>CI</li>
                                <li>CD</li>
                                <li>Indisponivel</li>

                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="www.google.com.br"> <button type="button"
                                            class="btn btn-sm btn-outline-success ">Ver Projeto</button></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Sobre Mim-->
                <section class="jumbotron text-center corPrimaria" id="Sobre-Mim">
                    <div class="container-fluid">
                        <h2 class="jumbotron-heading titulosBrancos">Sobre Mim</h2>
                        <p class="lead">Olá! Meu nome é Ernani, atualmente graduando do terceiro semestre de Ciência da
                            Computação
                            na faculdade São Francisco de Assis - UNIFIN. Com um "mindset" progressista mergulho no
                            mundo do T.I,
                            conhecendo novas linguagens de programação, estudando inglês, buscando conhecimento e
                            oportunidades profissionais!
                        </p>
                    </div>
                </section>
                <!--Visão-->
                <section class="jumbotron text-center " id="Visão">
                    <div class="container-fluid">
                        <h2 class="jumbotron-heading ">Visão</h2>
                        <p class="lead">Visão de carreira para o futuro é buscar
                             constantemente aprendizagem pessoal e profissionalmente, realizar 
                             projetos que causa impacto positivo na empresa.
                        </p>

                    </div>
                </section>
                <!-- Contato-->
                <section class="container-fluid corPrimaria" id="Contato">
                    <div class="text-center">
                        <h3 class="text-center titulosBrancos">Contato</h3>
                       <a  href="https://github.com/ErnaniSilveira16"><i class="fab fa-github aumentoIcone"></i></a></h4>
                       <a  href="https://www.linkedin.com/in/ernani-silveira-6a4647161"><i  class="fab fa-linkedin aumentoIcone"></i></a>
                       <a  href="mailto:ernanisilveira19@gmail.com"><i  class="fas fa-envelope-open-text aumentoIcone"></i></a>
                    </div>
                </section>
                <!-- footer-->
                <footer class="container-fluid corSecundaria">
                    <p class="text-center">Ernani Silveira</p>
                </footer>
</body>

</html>
</php>