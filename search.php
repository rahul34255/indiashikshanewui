<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package new
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">

        <?php if (have_posts()) : ?>

          <header class="page-header">
            <h1 class="page-title">
              <?php
              /* translators: %s: search query. */
              printf(esc_html__('Search Results for: %s', 'new'), '<span>' . get_search_query() . '</span>');
              ?>
            </h1>
          </header><!-- .page-header -->

          <?php
          /* Start the Loop */
          while (have_posts()) :
            the_post();

            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part('template-parts/content', 'search');

          endwhile;

          the_posts_navigation();

        else :

          get_template_part('template-parts/content', 'none');

        endif;
        ?>

      <!-- Side widgets -->
				<div class="col-lg-4">
					<!-- Search widget -->
					<div class="card mb-4">
						<div class="card-header">Search</div>
						<div class="card-body">
							<div class="input-group">
								<input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
								<button class="btn btn-primary" id="button-search" type="button">Go!</button>
							</div>
						</div>
					</div>
					<!-- Categories widget -->
					<div class="card mb-4">
						<div class="card-header">Categories</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-6">
									<ul class="list-unstyled mb-0">
										<li><a href="#!">Web Design</a></li>
										<li><a href="#!">HTML</a></li>
										<li><a href="#!">Freebies</a></li>
									</ul>
								</div>
								<div class="col-sm-6">
									<ul class="list-unstyled mb-0">
										<li><a href="#!">JavaScript</a></li>
										<li><a href="#!">CSS</a></li>
										<li><a href="#!">Tutorials</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

</main><!-- #main -->

<?php
get_footer();
?>
