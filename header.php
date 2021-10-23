<?php $rainbow = get_option('rainbow'); ?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>

      .header-top{
         background-color:<?php echo $rainbow['header-top-bg-color'] ?>;
         padding:<?php echo $rainbow['header-top-padding'] ?>;
      }

      .header{
         background-color:<?php echo $rainbow['header-bg-color'] ?>!important;
         padding: <?php echo $rainbow['header-padding'] ?>!important;
      }

      .header a{
         color:<?php echo $rainbow['header-menu-color'] ?>;
         font-size: <?php echo $rainbow['header-menu-font-size'] ?>;
      }

      .header a:hover{
         color:<?php echo $rainbow['header-menu-hover-color'] ?>!important;
      }

      .header.sticky{
        background-color: <?php echo $rainbow['sticky-header-bg-color'] ?>!important;
      }

      .header.sticky a, .header.header-fixed.sticky a{
        color:<?php echo $rainbow['sticky-header-manu-color'] ?>;
        text-transform: inherit;
      }

      .footer-area p{
        color: <?php echo $rainbow['footer-paragrhap-color'] ?>;
        font-size: <?php echo $rainbow['footer-paragrhap-size'] ?>;
        line-height: <?php echo $rainbow['footer-paragrhap-line-height'] ?>;
        margin: <?php echo $rainbow['footer-paragrhap-margin'] ?>;
        padding: <?php echo $rainbow['footer-paragrhap-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-paragrhap-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-paragrhap-text-align'] ?>;
      }

      .footer-area h1{
        color: <?php echo $rainbow['footer-heading-1-color'] ?>;
        font-size: <?php echo $rainbow['footer-heading-1-size'] ?>;
        line-height: <?php echo $rainbow['footer-heading-1-line-height'] ?>;
        margin: <?php echo $rainbow['footer-heading-1-margin'] ?>;
        padding: <?php echo $rainbow['footer-heading-1-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-heading-1-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-heading-1-text-align'] ?>;
      }

      .footer-area h2{
        color: <?php echo $rainbow['footer-heading-2-color'] ?>;
        font-size: <?php echo $rainbow['footer-heading-2-size'] ?>;
        line-height: <?php echo $rainbow['footer-heading-2-line-height'] ?>;
        margin: <?php echo $rainbow['footer-heading-2-margin'] ?>;
        padding: <?php echo $rainbow['footer-heading-2-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-heading-2-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-heading-2-text-align'] ?>;
      }

      .footer-area h2{
        color: <?php echo $rainbow['footer-heading-3-color'] ?>;
        font-size: <?php echo $rainbow['footer-heading-3-size'] ?>;
        line-height: <?php echo $rainbow['footer-heading-3-line-height'] ?>;
        margin: <?php echo $rainbow['footer-heading-3-margin'] ?>;
        padding: <?php echo $rainbow['footer-heading-3-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-heading-3-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-heading-3-text-align'] ?>;
      }

      .footer-area h2{
        color: <?php echo $rainbow['footer-heading-4-color'] ?>;
        font-size: <?php echo $rainbow['footer-heading-4-size'] ?>;
        line-height: <?php echo $rainbow['footer-heading-4-line-height'] ?>;
        margin: <?php echo $rainbow['footer-heading-4-margin'] ?>;
        padding: <?php echo $rainbow['footer-heading-4-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-heading-4-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-heading-4-text-align'] ?>;
      }
      
      .footer-area h2{
        color: <?php echo $rainbow['footer-heading-5-color'] ?>;
        font-size: <?php echo $rainbow['footer-heading-5-size'] ?>;
        line-height: <?php echo $rainbow['footer-heading-5-line-height'] ?>;
        margin: <?php echo $rainbow['footer-heading-5-margin'] ?>;
        padding: <?php echo $rainbow['footer-heading-5-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-heading-3-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-heading-5-text-align'] ?>;
      }
      
      .footer-area h2{
        color: <?php echo $rainbow['footer-heading-6-color'] ?>;
        font-size: <?php echo $rainbow['footer-heading-6-size'] ?>;
        line-height: <?php echo $rainbow['footer-heading-6-line-height'] ?>;
        margin: <?php echo $rainbow['footer-heading-6-margin'] ?>;
        padding: <?php echo $rainbow['footer-heading-6-padding'] ?>;
        text-transform: <?php echo $rainbow['footer-heading-6-transfrome'] ?>;
        text-align: <?php echo $rainbow['footer-heading-6-text-align'] ?>;
      }

      .copyright p{
         color: <?php echo $rainbow['copyright-text-color'] ?>!important;
         font-size: <?php echo $rainbow['copyright-text-size'] ?>!important;
      }



   </style>
   <?php wp_head() ?>
</head>
<body <?php body_class(  ); ?>>
<?php wp_body_open(  ); ?>
<?php if($rainbow['header-top-hide'] == 1): ?>
	   <section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="header-left">
							<a href=""><i class="fa fa-envelope"></i> info@agency.com</a>
							<a href=""><i class="fa fa-phone"></i> 23457689</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="header-social">
                     <?php 
                        $icon_group = $rainbow['icon-group'];
                        foreach($icon_group as $top_header_social_icon):
                     ?>
							   <a href=""><i class="<?php echo $top_header_social_icon['social-icon'] ?>"></i></a>

							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
	   </section>
<?php endif; ?>
      <!-- Header Area Start -->
      <header class="header <?php if($rainbow['header-sticky']): ?>header-fixed<?php endif; ?> ">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-lg navbar-light">

                     <?php if($rainbow['header-logo']['url']) : ?>

                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style=" width:<?php echo $rainbow['header-logo-width'] ?>" src="<?php echo $rainbow['header-logo']['url'] ?>" /></a>

                     <?php 
                     
                      else :
                        
                     ?>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ?></a>

                     <?php endif; ?>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse ml-auto mainmenu',
                                'container_id'    => 'navbarNav',
                                'menu_class'      => 'navbar-nav ml-auto',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                  </nav>
               </div>
            </div>
         </div>
      </header>
<?php wp_footer() ?>