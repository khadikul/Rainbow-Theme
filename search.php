<?php get_header() ?>

<div class="hero-section">
   <h2>Your Keyword <span><?php echo '&quot;'.$s.'&quot;'; ?></span> Result Are Bellow</h2>
</div>


      <!-- About Area Start -->
         <div class="container mt-5 mb-4">
           <div class="row">
              <div class="col-xl-8 col-md-9 col-sm-12">
                  <?php if(have_posts(  )) : while(have_posts()) : the_post(); ?>
                     <div class="row">
                        <!-- <div class="col-md-7"> -->
                           <div class="about mt-4">

                           <div class="row">
                               <div class="col-xl-4 col-md-4 col-sm-12">
                                    <div class="search-thumnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                               </div>
                               <div class="col-xl-8 col-md-8 col-sm-12">

                                   <div class="page-title">
                                      <h4><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h4>
                                    </div>

                                    <p><?php the_excerpt( ); ?></p>

                                    <div class="my-4 pb-4">
                                         <a class="button" href="<?php the_permalink( ); ?>">Continue Read</a>
                                    </div>
                               </div>
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