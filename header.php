
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?> ">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/core.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/highlight/styles/default.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

    <!-- Vertical navbar -->
    <div class="vertical-nav bg-dark" id="sidebar" style="border-right:1px solid #dcdcdc;">
  		<div class="py-4 px-3 mb-4 bg-dark mt-4">
      		<div class="media-body">
                <a href="<?php echo home_url( '/' ); ?>">
                    <h4 class="font-weight-white text-muted mb-0">XCODE<span style="font-weight:300;"> :: blog</span></h4>
                    <p class="font-weight-grey text-muted mb-0">root@localhost #</p>
                </a>
      		</div>
            <form action="/" method="get">
                <div class="input-group mb-3 pt-2">
                    <input type="text" class="form-control"  name="s" id="search" placeholder="Buscar.." aria-label="Recipient's username" aria-describedby="basic-addon2" value="<?php the_search_query(); ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
  		</div>

        <!--
  		<p class="text-white font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>

  		<ul class="nav flex-column bg-dark mb-0">
    		<li class="nav-item">
      			<a href="#" class="nav-link text-light font-italic bg-dark">
                	<i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                		Home
            	</a>
    		</li>
    		<li class="nav-item">
      			<a href="#" class="nav-link text-light font-italic">
                	<i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                	About
            	</a>
    		</li>
    		<li class="nav-item">
      			<a href="#" class="nav-link text-light font-italic">
                	<i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                	Services
            	</a>
    		</li>
    		
  		</ul>
        -->
        <!--
  		<p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>

        <ul class="nav flex-column bg-dark mb-0">
            <li class="nav-item">
                <a href="#" class="nav-link text-light font-italic">
                <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Area charts
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light font-italic">
                <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                    Bar charts
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light font-italic">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                    Pie charts
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light font-italic">
                <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                    Line charts
                </a>
            </li>
        </ul>
        -->
	</div>
<!-- End vertical navbar -->


 