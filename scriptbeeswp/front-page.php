<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description')?>">
    <title><?php bloginfo('name')?> |
          <?php is_front_page() ? bloginfo('description'): wp_title();?>
       
     </title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url')?>/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head();?>
    <style>
    	.showcase{
    		background: url(<?php echo get_theme_mod('showcase_img',get_bloginfo('template_url').'/assets/img/showcase.jpg');?>) no-repeat center center;
    	}
    </style>
  </head>

  <body>

    <div class="blog-masthead">
     <div class="container">
        <nav class="blog-nav" role="navigation">
          <?php
                wp_nav_menu( array(
                              'menu'              => 'primary',
                              'theme_location'    => 'primary',
                              'depth'             => 2,
                              'container'         => 'div',
                              'container_class'   => 'collapse navbar-collapse',
                              'container_id'      => 'bs-example-navbar-collapse-1',
                              'menu_class'        => 'nav navbar-nav',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker()
                      ) );
                          ?>
             
          </nav>
      </div>
    </div>

	<section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading','Custom Bootstrap Wordpress Theme')?></h1>
        <p><?php echo get_theme_mod('showcase_text','Build responsive, mobile-first projects on the web with the world s most popular front-end component library') ;?> </p>
        <a href="<?php echo get_theme_mod('btn_url','http://text.com');?>" class="btn btn-primary btn-lg"> <?php echo get_theme_mod('btn_text','Get Started');?></a>
      </div>
    </section>
    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
           <?php if(is_active_sidebar('box1')):?>
           	<?php dynamic_sidebar('box1');?>
           <?php endif; ?>
          </div>
          <div class="col-md-4">
          	<?php if(is_active_sidebar('box2')):?>
           	<?php dynamic_sidebar('box2');?>
           <?php endif; ?>
           </div> 
          <div class="col-md-4">
            <?php if(is_active_sidebar('box3')):?>
           	<?php dynamic_sidebar('box3');?>
           <?php endif; ?>
          </div>
        </div>
      </div>
    </section>


 <footer class="blog-footer">
      <p>&copy; <?php echo date('Y');?> - <?php bloginfo('name');?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer();?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>