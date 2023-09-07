 
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Single Movie</h3>
        </div>
      </div>
    </div>
</div>

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="<?php echo the_post_thumbnail_url(); ?>">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4> <?php echo get_the_title(); ?></h4>
          <p><?php echo get_the_content(); ?></p>
          <ul>
            <li>
                <span>Release date:</span>
                <?php
                    $release_year = get_post_meta( get_the_ID(), "_release_year",true );
                    echo $release_year;
                ?>
            </li>
            <li>
                <span>Genre:</span>
                <?php
                $genre = get_the_terms( get_the_ID() ,  'movie_genre' );
                foreach ( $genre as $term ) {
                  $term_name = esc_html( $term->name );
                  echo '<a href="#">' . $term_name . '</a> ';
                }
                ?>
            </li>
            <li>
                <span>Trailer:</span>
                <?php
                  $release_year = get_post_meta( get_the_ID(), "_movie_trailer",true );
                ?>
                <a href = "<?php echo $release_year;?>">click here</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>









