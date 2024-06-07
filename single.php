<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package new
 */

get_header();
?>

<div id="primary">
	<main id="main" class="site-main mt-5" role="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<!-- Post content -->
					<article>
						<!-- Post header -->
						<header class="mb-4">
							<!-- Post title -->
							<h1 class="fw-bolder mb-1"><?php the_title(); ?></h1>
							<!-- Post meta content -->
							<div class="text-muted fst-italic mb-2">Posted on <?php the_date(); ?> by <?php the_author(); ?></div>
							<!-- Post categories -->
							<?php
							$categories = get_the_category();
							if ($categories) {
								foreach ($categories as $category) {
									echo '<a class="badge bg-secondary text-decoration-none link-light" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
								}
							}
							?>
						</header>
						<!-- Preview image figure -->
						<figure class="mb-4">
							<?php the_post_thumbnail('large', array('class' => 'img-fluid rounded', 'alt' => '')); ?>
						</figure>
						<!-- Post content -->
						<section class="mb-5">
							<?php the_content(); ?>
						</section>
					</article>
					<!-- Comments section -->
					
				</div>
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
				</div>
			</div>
		</div>
	</main>
</div>

<?php

get_footer();
