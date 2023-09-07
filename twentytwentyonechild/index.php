<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
  <header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
  </header><!-- .page-header -->
<?php endif; ?>
<?php
if ( have_posts() ) {
    $args = array(
        'post_type' => 'movie', // Replace with your custom post type slug
        'posts_per_page' => -1, // Retrieve all posts of the custom post type
    );
    $custom_query = new WP_Query($args);
    if ($custom_query->have_posts()) {
        while ($custom_query->have_posts()) {
            $custom_query->the_post();
            // print_r( $custom_query );
            // Your code to display each custom post
            // Example: echo the_title();
        }
        // Reset the post data to avoid conflicts with the main query
        wp_reset_postdata();
    }
  // Load posts loop.
  // while ( have_posts() ) {
  //  // the_post();
  //  get_template_part( 'template-parts/content/content', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) );
  // }
  // Previous/next page navigation.
  twenty_twenty_one_the_posts_navigation();
} else {
  // If no content, include the "No posts found" template.
  get_template_part( 'template-parts/content/content-none' );
}
?>
<!-- working start -->
<div class="main-banner">
<div class="container">
  <div class="row">
    <div class="col-lg-6 align-self-center">
      <div class="caption header-text">
        <h6>Welcome to free movies</h6>
        <h2>BEST Movie SITE EVER!</h2>
        <div class="search-input">
          <form id="search" action="#">
            <input type="text" placeholder="search your movie" id='searchText' name="searchKeyword" onkeypress="handle" />
            <button role="button">Search Now</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-2">
      <div class="right-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-image.jpg" alt="">
        <span class="price">$22</span>
        <span class="offer">-40%</span>
      </div>
    </div>
  </div>
</div>
</div>
<!-- working end -->
<div class="features">
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-6">
      <a href="#">
        <div class="item">
          <div class="image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/featured-01.png" alt="" style="max-width: 44px;">
          </div>
          <h4>Free Storage</h4>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6">
      <a href="#">
        <div class="item">
          <div class="image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/featured-02.png" alt="" style="max-width: 44px;">
          </div>
          <h4>User More</h4>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6">
      <a href="#">
        <div class="item">
          <div class="image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/featured-03.png" alt="" style="max-width: 44px;">
          </div>
          <h4>Reply Ready</h4>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6">
      <a href="#">
        <div class="item">
          <div class="image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/featured-04.png" alt="" style="max-width: 44px;">
          </div>
          <h4>Easy Layout</h4>
        </div>
      </a>
    </div>
  </div>
</div>
</div>
<div class="section most-played">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="section-heading">
        <h6>TOP GAMES</h6>
        <h2>Most Played</h2>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="main-button">
        <a href="shop.html">View All</a>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6">
      <div class="item">
        <div class="thumb">
          <a href="product-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-game-01.jpg" alt=""></a>
        </div>
        <div class="down-content">
            <span class="category">Adventure</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.html">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6">
      <div class="item">
        <div class="thumb">
          <a href="product-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-game-02.jpg" alt=""></a>
        </div>
        <div class="down-content">
            <span class="category">Adventure</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.html">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6">
      <div class="item">
        <div class="thumb">
          <a href="product-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-game-03.jpg" alt=""></a>
        </div>
        <div class="down-content">
            <span class="category">Adventure</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.html">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6">
      <div class="item">
        <div class="thumb">
          <a href="product-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-game-04.jpg" alt=""></a>
        </div>
        <div class="down-content">
            <span class="category">Adventure</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.html">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6">
      <div class="item">
        <div class="thumb">
          <a href="product-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-game-05.jpg" alt=""></a>
        </div>
        <div class="down-content">
            <span class="category">Adventure</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.html">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-6">
      <div class="item">
        <div class="thumb">
          <a href="product-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-game-06.jpg" alt=""></a>
        </div>
        <div class="down-content">
            <span class="category">Adventure</span>
            <h4>Assasin Creed</h4>
            <a href="product-details.html">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="section categories">
 
<div class="section cta">
<div class="container">
  <div class="row">
    <div class="col-lg-5">
      <div class="shop">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h6>Our Shop</h6>
              <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
            </div>
            <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
            <div class="main-button">
              <a href="shop.html">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 offset-lg-2 align-self-end">
      <div class="subscribe">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h6>NEWSLETTER</h6>
              <h2>Get Up To $100 Off Just Buy <em>Subscribe</em> Newsletter!</h2>
            </div>
            <div class="search-input">
              <form id="subscribe" action="#">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                <button type="submit">Subscribe Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer();