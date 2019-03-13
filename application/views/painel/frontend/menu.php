
  
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" >Notícias</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?php echo base_url('painel/ver_noticias'); ?>">Ver notícias</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('painel/inserir_noticias'); ?>">Inserir notícias</a>
                                        </li>
 

                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Cursos</a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?php echo base_url('index.html'); ?>">Ver cursos</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.html'); ?>">Inserir cursos</a>
                                        </li>
                                        </ul>
                                    </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Academias</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                    <li>
                                        <a href="<?php echo base_url('index.html'); ?>">Ver academias</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('index.html'); ?>">Inserir academias</a>
                                    </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Palestrantes</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?php echo base_url('index.html'); ?>">Ver palestrantes</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.html'); ?>">Inserir palestrantes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Caravanistas</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li>
                                            <a href="<?php echo base_url('index.html'); ?>">Ver caravanistas</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('index.html'); ?>">Inserir caravanistas</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active">
                        <a data-toggle="tab" href="#noticias">
                            <i class="fa fa-newspaper-o"></i> Notícias</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#cursos">
                            <i class="fa fa-book"></i> Cursos</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#academias">
                            <i class="fa fa-graduation-cap"></i> Academias</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#palestrantes">
                            <i class="fa fa-video-camera"></i> Palestrantes</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#caravanistas">
                            <i class="fa fa-car"></i> Caravanistas</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">

                        <div id="noticias" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('painel/ver_noticias'); ?>">Ver notícias</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('painel/inserir_noticias'); ?>">Inserir notícias</a>
                                </li>
                            </ul>
                        </div>

                        <div id="cursos" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Ver cursos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Inserir cursos</a>
                                </li>
                            </ul>
                        </div>

                        <div id="academias" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Ver academias</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Inserir academias</a>
                                </li>
                            </ul>
                        </div>

                        <div id="palestrantes" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Ver palestrantes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Inserir palestrantes</a>
                                </li>
                            </ul>
                        </div>

                        <div id="caravanistas" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Ver caravanistas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.html'); ?>">Inserir caravanistas</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->