<?php get_header( ); ?>
<div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- /End Preloader -->

  <!-- Start Error Area -->
  <div class="error-area">
    <div class="d-table">
      <div class="d-table-cell">
        <div class="container">
          <div class="error-content">
            <h1>404</h1>
            <h2>Oops! Page Not Found!</h2>
            <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
            <div>
                <a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back To Home</a>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Error Area -->
<?php get_footer(); ?>