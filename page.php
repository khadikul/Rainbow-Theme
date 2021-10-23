<?php $rainbow = get_option('rainbow'); ?>
<?php get_header() ?>


<?php if($rainbow['title-hide'] == 1): ?>
<div class="hero-section">
   <h2><?php the_title( ); ?></h2>
</div>

<?php endif; ?>
      <!-- About Area Start -->
         <div class="container mt-2">
           <?php if(have_posts(  )) : while(have_posts()) : the_post(); ?>

                  <?php if($rainbow['title-hide'] == 1): ?>
                     <div class="page-title">
                        <h4><?php the_title(); ?></h4>
                     </div>
                  <?php endif; ?>
                     <p><?php the_content( ); ?></p>

               </div>
            <?php endwhile; ?>
            <?php endif; ?>
         </div>
<?php get_footer(); ?>