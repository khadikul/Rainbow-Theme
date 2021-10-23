<?php get_header() ?>

<div class="hero-section">
   <h2><?php bloginfo( 'description' ) ?></h2>
</div>


      <!-- About Area Start -->
         <div class="container mt-5 mb-4">
           <div class="row">
              <div class="col-xl-8 col-md-9 col-sm-12">
                  <?php if(have_posts(  )) : while(have_posts()) : the_post(); ?>
                     <div class="row">
                        <!-- <div class="col-md-7"> -->
                           <div class="about mt-4">

                             <div class="post-thumbanil">
                                 <?php the_post_thumbnail(); ?>
                              </div>

                              <div class="page-title mt-3">
                                 <h4><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h4>
                              </div>

                              <div class="post-dtls">
                                 <i class="far fa-clock"></i><span class="h6 mr-1"><?php the_date( ) ?> - </span>

                                 <i class="far fa-folder"></i><span class="h6 mr-1 "><?php the_category(); ?> - </span>

                                 <i class="far fa-user"></i><span class="h6 mr-1"><a href=""> <?php the_author() ?> </a> - </span>
                                 <i class="far fa-comment"></i><span class="h6 mr-1"><a href="<?php the_permalink(); ?>"> <?php comments_number(); ?> </a></span>
                                 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                              </div>

                              <p><?php the_excerpt( ); ?></p>

                              <div class="my-4 pb-4">
                                 <a class="button" href="<?php the_permalink( ); ?>">Continue Read</a>
                              </div>
                           </div>
                        <!-- </div> -->
                     </div>
                  <?php endwhile; ?>
                  <?php endif; ?>
              </div>
              <div class="col-xl-4 col-md-3 col-sm-12">
                 <?php get_sidebar(); ?>
              </div>
           </div>
         </div>

<?php get_footer(); ?>