<?php
get_header();
?>


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







<?php
		
get_footer();
