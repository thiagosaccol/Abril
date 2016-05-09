<?php $path = get_bloginfo('template_directory'); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?> <?php bloginfo('charset'); ?>" />
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width" />
        <meta name="robots" content="index, follow">
        <meta name="keywords" content=""/>
        <meta charset="utf-8">
        <title><?php echo ucfirst(get_the_title()); ?> | <?php bloginfo('name'); ?></title>
        <link href="<?php echo $path; ?>/img/icon.png" rel="shortcut icon" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php
        wp_head();

        wp_enqueue_style("font-dosis", $path . "<link href='https://fonts.googleapis.com/css?family=Dosis:700' rel='stylesheet' type='text/css'>");
        wp_enqueue_style("css-bootstrap", $path . "/css/bootstrap.min.css");
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo $path; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $path; ?>/js/js.js"></script>
    </head>
    <body>
        <input type="hidden" id="path" value="<?php echo $path; ?>" />
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-xs-12 center">
                        <a href="http://www.hsbc.com.br/1/2/br/para-voce/credito/emprestimos-e-financiamentos/financiamento-de-veiculos#/vantagens">
                            <img src="<?php echo $path; ?>/img/banner.jpg" alt="Quatro rodas" class="imgm1" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="page-menu">
                <div class="row">
                    <div class="col-md-2 text-left">
                        <div class="mid">
                            <div class="mo inl text-left">
                                <img src="<?php echo $path; ?>/img/icon/search-white.png" alt="Quatro rodas" class="poi" />
                            </div>
                            <a href="index.php" class="inl">
                                <img src="<?php echo $path; ?>/img/logo.png" alt="Quatro rodas" class="imgm1" />
                            </a>
                            <div class="mo inl text-right">
                                <button>
                                    <div class="icon-bar"></div>
                                    <div class="icon-bar"></div>
                                    <div class="icon-bar"></div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 center">
                        <div class="mid">
                            <ul class="inl">
                                <li><a href="">Carros</a></li>
                                <li><a href="">Testes</a></li>
                                <li><a href="">Notícias</a></li>
                                <li><a href="">Auto-serviço</a></li>
                                <li><a href="">Guia de compra</a></li>
                                <li><a href="">Tabela fipe</a></li>
                                <li><a href="">Assine</a></li>
                            </ul>
                            <style type="text/css">
                                .page-menu li:not(:last-child):after{background: url("<?php echo $path; ?>/img/arrow.png");}
                            </style>
                            <input type="text" placeholder="Pesquisar" class="mh" />
                            <input ico="search" type="button" class="mh" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-sub-menu">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <ul>
                            <?php
                            $array_sub_menu = array("+ Acessados", "Salão do automóvel", "Renegade", "Novo sandero", "Novo fox", "Novo ka", "Hb 20", "Duster", "Golf", "Corolla", "Civic", "Ia-Z1");
                            foreach ($array_sub_menu as $value) {
                                ?>
                                <li><a href=""><?php echo $value; ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                        <style type="text/css">
                            .page-sub-menu li:nth-of-type(1):after{background-image: url("<?php echo $path; ?>/img/sub-menu.png");}
                        </style>
                    </div>
                </div>
            </div>