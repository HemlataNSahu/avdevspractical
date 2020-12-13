<?php 

get_header();
?>
<!-- First section -->
<section class="section">
  <div class="banner-img" ></div>

  <div class="container">
    <div class="row ">
      <div class="col-md-7 ">
       <div class="banner-height">
        <h2>World news</h2>
        <hr>
        <h3>Amazing places in America to visit</h3>
        <p>For some reason - the country, this city, this neighbourhood, this particuler street - is the place you are living a majority of your life</p>
        <input type="" class="btn btn-primary" name="explore" value="Explore">
      </div>
    </div>
      <div class="col-md-5">
        <div class="side-text">
          <?php 
/* $args = array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 2
);
$posts = new WP_Query( $args );
if ( $posts -> have_posts() ) {
    while ( $posts -> have_posts() ) {
     
    ?>
          <div class="news-list">
            <h2><?php echo get_the_title();?></h2>
            <hr>
            <h4><?php 
    $categories = get_the_category( $posts->ID );
    echo $categories;
?></h4>
            <p class="black">Article title</p>
            <p><?php echo get_the_content(); ?></p>
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_excerpt(); ?></span>
          </div>
          <?php }
}*/
//wp_reset_query();

$args = array( 'post_type' => 'news', 'posts_per_page' => 2 );
    $loop = new WP_Query( $args );
    
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="news-list">
            <h2><?php echo get_the_title();?></h2>
            <hr>
            <h4><?php 
    
    $term_list = get_the_terms($loop->ID, 'news_category');
    echo $term_list[0]->name;
?></h4>
            <p class="black"><?php echo get_the_excerpt(); ?></p>
            <?php echo get_the_content(); ?>
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2min</span>
          </div>
   <?php
    endwhile;
      ?>
          <!-- <div class="news-list">
            <h2>More news</h2>
            <hr>
            <h4>Travel</h4>
            <p class="black">Article title</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2min<n>/spa
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Trending section -->
<section class="section lightgray">
  <div class="container">
    <div class="row mb20 mt20">
      <div class="col-md-12 ">
        <h2 class="mb20">Trending</h2>
      </div>
      <?php $args = array( 'post_type' => 'trending', 'posts_per_page' => 3 );
    $loop = new WP_Query( $args );
    
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-md-4 col-sm-6 mt-10">
            <div class="trending">
               <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>"> 
              
              <div class="trending-content">
                <p class="black"><?php echo get_the_title();?></p>
                  <p><?php echo get_the_content(); ?></p>
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_excerpt(); ?></span>
              </div>
            </div>
        </div>
         <?php
    endwhile;
      ?>
      
        </div>
      </div>
    </div>
  </section>

<section class="section lightgray">
  <div class="container">
    <div class="row mb20 mt20">
      <div class="col-md-12 ">
        <h2 class="mb20">Happening now</h2>
      </div>
     
        <div class="col-md-8">
           <?php $args = array( 'post_type' => 'happening', 'posts_per_page' => 2,'order'=>'ASC' );
    $loop = new WP_Query( $args );
    $count = 0;
    while ( $loop->have_posts() ) : $loop->the_post(); 
    if ( $count < 2 ) {
       # code...
      ?>
            <div class="happening mb20">            
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>"> 
              <div class="large-content">
                <p class="black"><?php echo get_the_title();?></p>
                  <p><?php echo get_the_content(); ?></p>
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_excerpt(); ?></span>
              </div>
            </div>
        <?php }
        $count++;
    endwhile;
      ?>
            
        </div>
       

        <div class="col-md-4">
           <?php $args = array( 'post_type' => 'happening', 'posts_per_page' => 3,'order'=>'des' );
    $loop = new WP_Query( $args );
    $count = 0;
    while ( $loop->have_posts() ) : $loop->the_post(); 
    if ( $count < 3 ) { ?>
            <div class="happening mb30">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>"> 
              <div class="happening-content">
                <p class="black"><?php echo get_the_title();?></p>
                 
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_excerpt(); ?></span>
              </div>
            </div>
            <?php }
        $count++;
    endwhile;
      ?>
      <!--       <div class="happening mb30">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/happening4.png">
              <div class="happening-content">
                <p class="black mt10">Small Article title</p>
                 
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i>  4h ago by days</span>
              </div>
            </div>
            <div class="happening mb20">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/happening5.png">
              <div class="happening-content">
                <p class="black mt10">Small Article title</p>
          
            <span class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2min</span>
              </div>
            </div> -->
        </div>
        </div>
      </div>
    </div>
  </section>


<?php 
get_footer();
?>