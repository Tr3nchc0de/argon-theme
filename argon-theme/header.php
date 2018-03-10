<?php
/**
 * The header for Wordpack Theme
 *
 * This is the template that displays all of the <head> section and everything
 *
 * @link http://heinemann-reuter.de
 *
 * @package Wordpack Theme
 * @subpackage Wordpack Theme Child
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lungenfachärztliche Gemeinschaftspraxis in Regensburg: Dr. Heinemann &amp; Dr. Reuter">
    <link rel="icon" type="image/png" href="wp-content/themes/wp-theme/public/img/brand/favicon.png" />
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>


    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>



</head>



<body data-menu="vertical-menu" class="vertical-layout vertical-menu">
<section id="top">
  <div class="container-fluid alarm p-0 fixed-top">
    <div class="">

      <h5 class="text-center">New Template - Molecule 1.0 - Out Now!<a href="#" class="ml-4 p-1 pl-3 pr-3 btn btn-white">see more</a></h5>
      <button type="button" class="btn-brand alarm-close">&times;</button>


    </div>

  <nav class="navbar navbar-toggleable-md navbar-light bg-inverse dotted-bottom container-fluid justify-content-end">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="/wp-content/themes/wp-theme/public/img/brand/brand.png" class="brand-logo"></a>

     <div id="bs4navbar" class="navbar-collapse mr-auto justify-content-end collapse" aria-expanded="false">
       <ul id="menu-header-menu" class="navbar-nav mr-right justify-content-end">
         <li><a href="<?php echo get_site_url(); ?>" class=" nav-link">Start<span class="glyphicon glyphicon-chevron-down pull-right"></span></a></li>
         <li><a href="/themes" class=" nav-link">Themes<span class=""></span></a></li>
         <li><a href="/about" class=" nav-link">About<span class=""></span></a></li>

    		 <li class="dropdown mega-dropdown">
    				<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Services <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
    				<ul class="dropdown-menu mega-dropdown-menu">
              <div class="row wps-list p-4">
    					 <li class="col-sm-3">

                 <a href="">
                 <div class="wps-box-overlay-2">
                   <div class="wps-box-desc-2">

                   </div>
                 </div>
                 <img class="d-block img-fluid img-overlay" src="/wp-content/themes/wp-theme/public/img/screens/screen-1.jpg" alt="Second slide">

               </a>



    					</li>
    					<li class="col-sm-4">
    						<ul class="list-a">
    							<h4>Templates</h4>
    							<li><a href="/">Feature 1</a></li>
    							<li><a href="/">Feature 2</a></li>
    							<li><a href="/">Feature 3</a></li>
    							<li><a href="/">Feature 4</a></li>




    						</ul>
    					</li>
    					<li class="col-sm-4">
    						<ul class="list-a">
                  <h4>Theme Design</a></h4>
                  <li><a href="/">Feature 1</a></li>
                  <li><a href="/">Feature 2</a></li>
                  <li><a href="/">Feature 3</a></li>
                  <li><a href="/">Feature 4</a></li>


                </ul>

    					</li>

    				</ul>
    			</li>




          <li><a href="/contact" class=" nav-link">Contact<span class=""></span></a></li>
          <li><a href="/login" class=" nav-link">Login<span class=""></span></a></li>

          <li><button href="/links" class=" nav-link btn btn-second p-2 mr-5 ml-3 pl-4 pr-4">Join Us Today<span class=""></span></button></li>

    		</ul>
        </div><!-- /.nav-collapse -->
    	</div><!-- /.nav-collapse -->
    </nav>

</section>

</body>
