
  
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
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