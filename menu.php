<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: index.php');
    }

    
    if($_SESSION['tipo_user'] == 'professor(a)'){
        $user = 'Professor(a): ' . $_SESSION['nome'];
        $user2 = 'RA: ' . $_SESSION['ra'];
        $img = 'recursos/img/icons/professores.svg';
    } else{
        $user = 'Aluno(a): ' . $_SESSION['nome'];
        $user2 = 'RM: ' . $_SESSION['rm'];
        $img = 'recursos/img/icons/alunos.svg';
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="recursos/img/icons/casa.png" type="image/x-icon" width="100%">
    <title>Menu Iniciar</title>
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="recursos/css/all.min.css">
    <link rel="stylesheet" href="recursos/css/menu.css">
</head>

<body>

    <div class="sideall">
        <div id="sidebar2">
            <div class="toogle-btn caixa row d-flex justify-content-center align-content-center" onclick="show()">
                <center class="btn-toggle">
                    <i id="seta" class="far fa-arrow-alt-circle-left d-none"></i>
                    <i id="seta2" class="far fa-arrow-alt-circle-right"></i>
                </center>

            </div>

            <nav id="sidebar">
                <div class="sidebar-header">
                    <center>
                        <img src="<?php echo($img); ?>" class="fotoUser">
                    </center>
                </div>
                <ul class="list-unstyled components font-weight-bold">
                    <li class="nomeUser">
                        <?php echo($user);?>
                    </li>
                    <li class="loginUser">
                        <?php echo($user2);?><span class="sr-only">(current)</span>
                    </li>
                    <li class="itens-navbar">
                        <a href="#topo"><i class="fas fa-arrow-alt-circle-up"></i></i> Topo<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="itens-navbar btn-equipamentos">
                        <i class="fas fa-microscope"></i> Equipamentos<span class="sr-only">(current)</span>
                    </li>
                    <li class="itens-navbar btn-reagentes">
                        <i class="fas fa-flask"></i> Reagentes<span class="sr-only">(current)</span>
                    </li>
                    <li class="itens-navbar btn-vidrarias">
                        <i class="fas fa-vials"></i> Vidrarias<span class="sr-only">(current)</span>
                    </li>
                    <li class="itens-navbar btn-relatorios">
                        <i class="fas fa-clipboard-list"></i> Relatórios<span class="sr-only">(current)</span>
                    </li>
                    <li class="itens-navbar btn-sair">
                        <i class="fa fa-sign-out-alt"></i> Sair<span class="sr-only">(current)</span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="jumbotron banner d-flex align-items-center justify-content-center" id="topo">
        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="display-1 text-center font-weight-bold text-light">Laboratórios de Química</h1>
                <h4 class="text-center font-weight-bold text-light">Sistema para controle e manejo do estoque</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row tec-aa">
            <div class="col-12 col-sm-12 col-lg-5 offset-1 col-md-5">
                <h1 class="text-verde justify-content-center">Técnico em Açúcar e Álcool</h1>
                <p class="text-light text-justify">
                    Com este curso você pode trabalhar no setor de Energia Sucroalcooleira. Vai aprender sobre os processos de produção industrial que usam a cana de açúcar como fonte energética para diferentes finalidades. Pode trabalhar em indústrias químicas, petroquímicas,
                    de fertilizantes e em fazendas e laboratórios.
                </p>
                <h2 class="text-verde">Objetivos do Curso</h2>
                <p class="text-light text-justify">
                    Realizar análises físico-químicas, microbiológicas e instrumentais de matérias-primas, produtos e subproduto, operar e supervisionar processos da produção de açúcar e álcool (etanol) de acordo com procedimentos e normas técnicas, legislação de qualidade,
                    ambientais, de saúde e segurança.
                </p>
                <div class="row mt-5 text-black info-aa justify-content-center">
                    <div class="col-lg-6 col-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-2 col-sm-2">
                                <h3>
                                    <i class="far fa-calendar-alt calendario"></i>
                                </h3>
                            </div>
                            <div class="col-lg-10 duracao col-md-10 col-10 col-sm-10">
                                <h5 class="text-weight-bold text-light">
                                    Duração: 1,5 anos (3 semestres)
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-2 col-sm-2">
                                <h3>
                                <i class="far fa-clock relogio"></i></i>
                                </h3>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10 col-sm-10">
                                <h5 class="text-weight-bold text-light">
                                    Período: Noturno
                                </h5>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-black mt-3 text-center">Coordenadora: Giovanna Andressa</h5>
                </div>
            </div>
            <div class="col-12 col-sm-12 offset-1 col-lg-4 col-md-4">
                <img src="recursos/img/logoaa.svg" class="logo-aa">
            </div>
        </div>

        <div class="row tec-quimica">
            <div class="col-11 col-sm-11 col-lg-5 offset-1 col-md-5">
                <h1 class="text-azul">Técnico em Química</h1>
                <p class="text-light text-justify">
                    Neste curso você vai conhecer insumos, equipamentos e métodos usados pela indústria química. Vai atuar no desenvolvimento de produtos e materiais, além da área de vendas e assistência técnica. Também vai entender processos laboratoriais, de análises químicas,
                    físico-químicas e microbiológicas.
                </p>
                <h1 class="text-azul">Objetivos do Curso</h1>
                <p class="text-light text-justify">
                    Realizar amostragens, análises químicas, físico-químicas, instrumentais e microbiológicas, operar processos e atuar no desenvolvimento de produtos e serviços da área de Química e gestão técnica dos processos, zelando por padrões de qualidade e pela integridade
                    de pessoas, do meio ambiente e das instalações.
                </p>
                <div class="row mt-5 text-black info-qui justify-content-center">
                    <div class="col-lg-6 col-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-2 col-sm-2">
                                <h3>
                                    <i class="far fa-calendar-alt calendario"></i>
                                </h3>
                            </div>
                            <div class="col-lg-10 duracao col-md-10 col-10 col-sm-10">
                                <h5 class="text-weight-bold text-light">
                                    Duração: 3 anos (6 semestres)
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-2">
                                <h3>
                                    <i class="far fa-clock relogio"></i></i>
                                </h3>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10 col-sm-10">
                                <h5 class="text-weight-bold text-light">
                                    Período: Matutino
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 offset-1 col-lg-4 col-md-4">
                <img src="recursos/img/tecq.jpg" class="logo-qui">
            </div>
        </div>

        <div class="row cinco-s justify-content-center text-center">
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <h1 class="text-danger gradiente">Uso do 5'S a critério desse Sistema</h1>
                <p>
                    Clique no botão 
                    <a data-toggle="modal" class="links" href="#cinco-s">
                        <button class="btn btn-primary block">
                            Saber Mais
                        </button>
                    </a>
                </p>
                <img src="recursos/img/5s.png" class="logo-aa">
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <iframe id="gmap_canvas" class="maps" src="https://maps.google.com/maps?q=ETEC%20HELCY&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>

    </div>
    
    
    <footer class="rodape">
        <div class="container-fluid">
            <div class="row mt-3 text-center">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h4 class="text-center font-weight-bold text-light">
                        DESENVOLVIMENTOS DE SISTEMAS
                    </h4>
                    <ul class="list-unstyled">
                        <li>André Luiz Neves</li>
                        <li>Mário Guilherme de Andrade Rodrigues</li>
                        <li>Thiago Kalil Martineli Samara</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                    <h4 class="text-center font-weight-bold text-light">
                        AÇÚCAR E ÁLCOOL
                    </h4>
                    <ul class="list-unstyled text-center">
                        <li>Guilherme Silva Mussato Antunes</li>
                        <li>Yasmin Neves Caetano</li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-3">
                    <h4 class="text-center font-weight-bold text-light">
                        CONTATO
                    </h4>
                    <ul class="list-unstyled text-light">
                        <li>
                            <a href="https://www.facebook.com/acucar.alcoolcafelandia.7" class="links">
                                <i class="fab fa-facebook icon-rodape"></i>
                            </a>
                            <a href="https://github.com/MarioGuilherme/Laboratorios-Quimica" class="links">
                                <i class="fab fa-github icon-rodape"></i>
                            </a> <br>
                            <a href="https://www.instagram.com/ds.cafelandia/" class="links">
                                <i class="fab fa-instagram icon-rodape"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <h4 class="text-center font-weight-bold text-light rodape-devs">
                        SUPORTE/DESENVOLVEDORES
                    </h4>
                    <ul class="list-unstyled text-center text-light devs">
                        <a href="http://marioguilherme.epizy.com">
                            <li>
                                <i class="fas fa-laptop-code icone-dev" title="Front-End"></i>&nbsp;<i class="fas fa-database icone-dev" title="Back-End"></i> &nbsp; Mário Guilherme de A. Rodrigues
                            </li>
                        </a>
                        <a href="https://www.facebook.com/thiagokalil.martinelisamara">
                            <li class="mt-2">
                                <i class="fas fa-laptop-code icone-dev" title="Front-End"></i> &nbsp; Thiago Kalil Martineli Samara
                            </li>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100005763971999">
                            <li class="mt-2">
                                <i class="fas fa-laptop-code icone-dev" title="Front-End"></i> &nbsp; André Luiz Neves
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row text-center mb-2">
                <div class="col-12 col-md-12 col-lg-12 col-sm-12">
                    <h4 class="text-light">Todos os Direitos Reservados &copy;2019-2025</h4>
                </div>
            </div>
        </div>
    </footer>

    <!-- JANELAS MODAIS -->
    <div id="cinco-s" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content corpo-cinco-s">
                <div class="modal-header justify-content-center">
                    <h1 class="modal-title font-weight-bold" id="my-modal-title">Uso do 5'S</h1>
                </div>
                <div class="modal-body modal-1">
                    <div class="row">
                        <div class="col-12 col-md-12 text-justify">
                            <h1>
                                O que é?
                            </h1>
                            <p>
                                5S é um programa de gestão de qualidade empresarial desenvolvido no Japão que visa aperfeiçoar aspectos como organização, limpeza e padronização. A junção no número “5” com a letra “S” vem de cinco palavras japonesas que começam com S:
                            </p>
                            <ul>
                                <li> Seiri – Senso de utilização</li>
                                <li> Seiton – Senso de organização</li>
                                <li>Seiso – Senso de limpeza </li>
                                <li> Seiketsu – Senso de padronização </li>
                                <li> Shitsuke – Senso de disciplina. </li>
                            </ul>
                            <h1>
                                O seu uso nos Laboratórios
                            </h1>
                            <p>
                                O seu uso nos laboratórios internos e externos da escola ajudarão numa melhor organização dos itens armazenados nos armários, promovendo melhor disponibilidade desses itens de uma melhor visualização para que seja possível preparar uma aula prática futura
                                de determinado item.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">FECHAR</button>
                </div>
            </div>
        </div>
    </div>

    <script src="recursos/js/jquery-3.5.1.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="recursos/js/all.min.js"></script>
    <script src="src/usuario/controle/menu.js"></script>
</body>

</html>