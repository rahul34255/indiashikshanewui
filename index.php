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
 * @package new
 */

get_header();
?>
<section id ="banner">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<p class="promo-title ps-5">Searching College <br>To Getting Job</p>
	<div class="left ps-5">
    <button class="main-btn mt-5 mb-5">Start Your Career Today<i href="login.php" class="fas fa-graduation-cap ps-3"></i></button>
     
    
    
    <form class="d-flex search-form mt-5 mb-5">
              <input class="form-control ms-auto" type="search" placeholder="<?php echo esc_attr_x( 'Search Your College...', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      <input type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form></i></button>
            </div>
        </div>
      
			<div class="col-md-6 text-center">
				<img src="https://indiashiksha.com/wp-content/uploads/2024/06/bg1home.png" class="img-fluid sk">
          </div>
        </div>
      </div>
  </section>

	 <!-- section-2 counter -->
	 <section id="counter">
    <section class="counter-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count1"></span>+
            </h2>
            <p>COURSES</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count2"></span>+
            </h2>
            <p>COLLEGES</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count3"></span>+
            </h2>
            <p>JOBS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count4"></span>+
            </h2>
            <p>SCHEMES</p>
          </div>
        </div>
      </div>
    </section>
  </section>



	<!--Explore college-->
  <section class="explore">
<div class="container ">
 
<div class="height text-center ">
	<h1><span>Explore Colleges</span></h1>
    
     <div class="lines">
      <div class="diamond"></div>
    </div>
    <h5>Find The Best Colleges Through Streams</h5>
  </div>
  
 <div class="row">
    
	<div class="col-lg-3 mt-3 ">
     <div href="#" class="item pb-5" >
      <span class="icon feature_box_col_six "><i class="fa fa-cogs fa-3x pb-3"></i></span>
        <h5>Engineering</h5>
        <h6>10 colleges</h6>
        </div>
    </div>
	
    <div class="col-lg-3 mt-3 ">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-user-md fa-3x pb-3"></i></span>
         <h5>Medical</h5>
         <h6>10 colleges</h6>
         </div>
     </div>
     
	 <div class="col-lg-3 mt-3 ">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-scale-unbalanced-flip fa-3x pb-3"></i></span>
         <h5>Law</h5>
         <h6>10 colleges</h6>
         </div>
     </div>
	 
     <div class="col-lg-3 mt-3 ">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-line-chart fa-3x pb-3"></i></span>
         <h5>Management</h5>
         <h6>10 colleges</h6>
         </div>
     </div>
	 
     <div class="col-lg-3 mt-2 ">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-flask fa-3x pb-3"></i></span>
         <h5>Science</h5>
         <h6>10 colleges</h6>
         </div>
     </div>
	 
     <div class="col-lg-3 mt-2 ">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-inr fa-3x pb-3"></i></span>
         <h5>Commerce</h5>
         <h6>10 colleges</h6>
         </div>
     </div>
	 
     <div class="col-lg-3 mt-2">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-book fa-3x pb-3"></i></span>
         <h5>Arts</h5>
         <h6>10 colleges</h6>
         </div>
     </div>
	 
     <div class="col-lg-3 mt-2">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-book-open-reader fa-3x pb-3"></i></span>
         <h5>Exams</h5>
         <h6>10 colleges</h6>
         </div>
             </div>
	 
     <div class="col-lg-3 mt-2 ">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-book-open fa-3x pb-3"></i></span>
         <h5>Notes</h5>
         <h6>10 colleges</h6>
         </div>
             </div>
			 
     <div class="col-lg-3 mt-2">
      <div class="item pb-5"><span class="icon feature_box_col_six "><i class="fa fa-note-sticky fa-3x pb-3"></i></span>
         <h5>Schemes</h5>
         <h6>10 colleges</h6>
         </div>
             </div>
			 
     <div class="col-lg-3 mt-2">
      <div class="item pb-5 "><span class="icon feature_box_col_six "><i class="fa 
        fa-award fa-3x pb-3"></i></span>
         <h5>Result</h5>
         <h6>10 colleges</h6>
         </div>
        </div>
		
     <div class="col-lg-3 mt-2 ">
      <div class="item pb-5"><span class="icon feature_box_col_six ">
        <i class="fa fa-briefcase fa-3x pb-3"> </i></span>
         <h5>Jobs</h5>
         <h6>10 colleges</h6>
         </div>
         </div>
  
</div>
</div>
</section>

	

	 <!--Latest post-->
	 <section class="latest">
<div class="container ">
<div class="height1 text-center ">
    <h1><span>Latest News</span></h1>
     <div class="lines">
       <div class="diamond"></div>
    </div>
    <h5>Get The Latest News About The Colleges,Exams And Results</h5>
    </div>
  <div class="row ">
    <?php
    // args
    $my_args = array(
      'post_type' => 'post',
      'posts_per_page' => 8,
      // 'category_name' => 'blog'
    );
    //query
    $my_query = new WP_Query ($my_args);
    ?>

    <?php if($my_query->have_posts()): while($my_query-> have_posts()) : $my_query->the_post(); ?>
    <div class="col-lg-3 mt-3">
      <div class="card  h-100 mb-5 shadow-sm">
        <div class="inner">
        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid card-img-top')) ?>
      </div>
      <p><?php echo get_the_date(); ?>       <?php the_category( ' ' ); ?></p>
     
        <div class="card-body">
          <div class="card-title">
          <h5> 
          <?php the_title();?>
          </h5>
          </div>
          <div class="card-text">
            <?php  the_excerpt(); ?>
          </div>
          <div class="text-center">
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary rounded-0 mt-2 "
              >Read More</a>
          </div>
        </div>
      </div>
    </div>

    <?php endwhile; endif; ?>



    <?php wp_reset_query(); ?>
  
  <div class="text-center mt-5">
  <a href="#" class="btn btn-outline-primary rounded-0 "
            >Load More</a>
   </div>
  </div>
  </div>
</section>


	 <!--Featured Articles-->

   <section id="team" class="team section-bg">
  <div class="container ">
   <div class="section-title">
      <h1><span>Featured Articles</span></h1>
      <div class="lines">
        <div class="diamond"></div>
     </div>
     <h5>Get The Latest Featured Articles</h5>
    </div>
    <div class="row">
    <?php
    // args
    $my_args = array(
      'post_type' => 'post',
      'posts_per_page' => 4,
      // 'category_name' => 'blog'
    );
    //query
    $my_query = new WP_Query ($my_args);
    ?>

    <?php if($my_query->have_posts()): while($my_query-> have_posts()) : $my_query->the_post(); ?>
 
    <div class="col-lg-6">
      <div class="member d-flex align-items-start mt-3" >
        <div class="teampic"><?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid')) ?></div>
        <div class="member-info mt-3">
          <h4><?php the_title(); ?></h4>
          <?php  the_excerpt(); ?>
          <div class="text-center">
         <a href="<?php the_permalink(); ?>"class="btn btn-danger mt-3"> Read More </a> 
          
        </div>
      </div>
    </div>
    </div>
    
   
    
    <?php endwhile; endif; ?>



    <?php wp_reset_query(); ?>
    
<div class="text-center pt-5">
  <a href="#" class="btn btn-outline-primary rounded-0 "
            >Load More</a>
  </div>
  </div>
 
</div>
</section>


	
	 <!--Popular Articles -->
	 <section class="latest">
	 <div class="container ">
  <div class="height1 text-center ">
    <h1><span>Popular Articles</span></h1>
     <div class="lines">
       <div class="diamond"></div>
    </div>
    <h5>Get The Latest Articles Updates</h5>
    </div>
  <div class="row ">
    <?php
    // args
    $my_args = array(
      'post_type' => 'post',
      'posts_per_page' => 8,
      // 'category_name' => 'blog'
    );
    //query
    $my_query = new WP_Query ($my_args);
    ?>

    <?php if($my_query->have_posts()): while($my_query-> have_posts()) : $my_query->the_post(); ?>
    <div class="col-lg-3 mt-3">
      <div class="card mb-5 shadow-sm h-100">
        <div class="inner">
        <?php the_post_thumbnail('post-thumbnail', array('class' => ' card-img-top')) ?>
      </div>
      <p><?php echo get_the_date(); ?>       <?php the_category( ' ' ); ?></p>
        <div class="card-body">
          <div class="card-title">
          <h5> 
          <?php the_title(); ?>
          </h5>
          </div>
          <div class="card-text">
          <?php  the_excerpt(); ?>
          </div>
          <div class="text-center">
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary rounded-0 mt-2"
              >Read More</a>
          </div>
        </div>
      </div>
    </div>

    <?php endwhile; endif; ?>



    <?php wp_reset_query(); ?>
  
  <div class="text-center">
  <a href="#" class="btn btn-outline-primary rounded-0 mt-5 mb-5"
            >Load More</a>
   </div>
  </div>
  </div>
</section>
<!-- End -->





<?php
		
get_footer();
