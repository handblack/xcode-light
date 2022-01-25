
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/core.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/bootstrap-5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/bootstrap-5.1.3/css/bootstrap-docs.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/highlight/styles/default.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <script data-ad-client="ca-pub-1819647184319476" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="navbar navbar-expand-md navbar-dark bd-navbar">
        <nav class="container-xxl flex-wrap  flex-md-nowrap" aria-label="Main navigation">
            <a class="navbar-brand p-0 me-2" href="/" aria-label="Bootstrap">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" width="32">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                </svg>
            </button>

            <div class="collapse navbar-collapse" id="bdNavbar">
            <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                <li class="nav-item col-6 col-md-auto">
                <a class="nav-link p-2 active" aria-current="page" href="/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');"><strong>X</strong>CODE</a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                <a class="nav-link p-2" href="/docs/5.1/getting-started/introduction/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Docs');">Docs</a>
                </li>
                 
            </ul>

            <hr class="d-md-none text-white-50">

            <ul class="navbar-nav flex-row flex-wrap ms-md-auto"> 
                <li class="nav-item col-6 col-md-auto ">
                    <form action="/" method="get">
                        <div class="input-group input-group-sm mb-3 my-2 my-md-0 ms-md-3 ">
                            <input type="text" class="form-control" name="s" id="search" value="<?php the_search_query(); ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            <div class="input-group-prepend">
                                <button class="btn btn-default btn-outline-default btn-flat" style="border:1px solid #dcdcdc;background-color:#dcdcdc">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
               

            </ul>
  

             
            </div>
        </nav>
    </header>
