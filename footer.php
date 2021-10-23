<?php $rainbow = get_option('rainbow'); ?>
<!-- Footer Area start -->
<footer class="footer-area pt-50 pb-50">
   <div class="container">
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="single-footer footer-logo">
               <img style="width: <?php echo $rainbow['footer-logo-width'] ?>" src="<?php echo $rainbow['footer-logo']['url'] ?>" alt="Logo">
               <p><?php echo $rainbow['footer-text'] ?></p>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <?php dynamic_sidebar( 'footer-1' ) ?>
         </div>
         <div class="col-lg-4 col-md-6">
            <?php dynamic_sidebar( 'footer-2' ) ?>
         </div>
         <div class="col-lg-3 col-md-6">
            <?php dynamic_sidebar( 'footer-3' ) ?>
         </div>
      </div>
      <div class="row copyright">
         <div class="col-md-6">
            <p>&copy;<?php echo $rainbow['copyright-text'] ?></p>
         </div>
         <div class="col-md-6 text-right">
            <ul>
            <?php 
               $footer_icon_group = $rainbow['copyright-social-icon'];
               foreach($footer_icon_group as $footer_social_icon):
            ?>
					<li><a href=""><i class="<?php echo $footer_social_icon['footer-social-icon'] ?>"></i></a></li>

				<?php endforeach; ?>
            </ul>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->
</body>
</html>