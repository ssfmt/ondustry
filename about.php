<?php 
    include_once 'header.php'; 
    include_once 'nav.php';
?>

    <div class="page-head"> 
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title"></h1>               
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC;">
        <div class="container">   
            <div class="row">
                
                <div class="blog-asside-right col-md-3">
                    <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                        <div class="panel-heading">
                            <h3 class="panel-title">ONDUSTRY</h3>
                        </div>
                        <div class="panel-body text-widget">
                            <p>O SEU AGENTE DIGITAL
                            </p>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu wow  fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">PESQUISA</h3>
                        </div>
                        <div class="panel-body">
                            <form role="search">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-smal">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                        

                    <div class="panel sidebar-menu wow  fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tags</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="tag-cloud">
                                <li><a href="#"><i class="fa fa-tags"></i> sobre</a> 
                                </li>
                                <li><a href="#"><i class="fa fa-tags"></i> ondustry</a> 
                                </li>
                                <li><a href="#"><i class="fa fa-tags"></i> plataforma</a> 
                                </li>
                                <li><a href="#"><i class="fa fa-tags"></i> agente</a> 
                                </li>
                                <li><a href="#"><i class="fa fa-tags"></i> empresas</a> 
                                </li>
                                <li><a href="#"><i class="fa fa-tags"></i> marcas</a> 
                                </li>
                                <li><a href="#"><i class="fa fa-tags"></i> produtos</a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="blog-lst col-md-9">
                    <section class="post">
                        <div class="text-center padding-b-50">
                            <h2 class="wow fadeInLeft animated">Sobre n??s</h2>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                
                            </div>
                            <div class="col-sm-6 right" >
                               
                            </div>
                        </div>
                        <div class="image wow fadeInLeft animated">
                            <a href="single.html">
                                <img src="assets/img/accordion.jpg" class="img-responsive" alt="Example blog post alt">
                            </a>
                        </div>
                        <p class="intro">ONDUSTRY ?? a plataforma destinada a empresas e marcas para ajudar na transi????o de modelo para produ????o em grande escala de um novo produto.
                        </p>
                        <h3>Principais Features</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Plataforma para marcas e prestadores de servi??os, com duas op????es de registo e visualiza????o - para marcas e para prestadores de servi??os - para que esteja o mais adaptada poss??vel ??s suas necessidades.</li>
                            <li class="list-group-item">Cria????o de oportunidades de neg??cio por parte das marcas.</li>
                            <li class="list-group-item">Listagem facilmente acess??vel de todas as oportunidades dispon??veis em cada setor.</li>
                            <li class="list-group-item">Submiss??o guiada de propostas por parte dos prestadores de servi??os.</li>
                            <li class="list-group-item">Servi??o de apoio permanente aos utilizadores, para que se sinta acompanhado em todas as fases do seu novo neg??cio.</li>
                            <br>
                            <div class="text-center">
                                <p style="font-size: 2.5rem;">Junte-se a n??s e encontre o seu pr??ximo parceiro de neg??cios!</p>
                                <button class="navbar-btn nav-button wow login" onclick=" window.open('login.php','_self')" data-wow-delay="0.45s">Login</button>
                                <button class="navbar-btn nav-button wow" onclick=" window.open('register.php','_self')" data-wow-delay="0.48s">Registo</button>
                            </div>
                            
                        </ul>
                       
                    </section>   

                </div> 

            </div>
    </div>


<?php
    include_once 'footer.php';
?>