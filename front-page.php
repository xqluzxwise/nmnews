<?php
/**
 * The Homepage for Namaskar News
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Namaskar_News
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<!--<div class="col s12">
						<div class="card">
							<div class="card-image">
								<img src="http://lorempixel.com/1280/95/abstract">
							</div>
						</div>
					</div>-->
					<!--<div class="col s12 l3">
						<?php
						// if ( is_active_sidebar( 'home-left-sidebar' ) ) :
						// 	dynamic_sidebar( 'home-left-sidebar' );
						// endif;
						?>
					</div>-->
					<div class="col s12 m8">
						<?php
						if ( is_active_sidebar( 'home-newsfeed-sidebar' ) ) :
							dynamic_sidebar( 'home-newsfeed-sidebar' );
						endif;
						?>
					</div>
					<div class="col s12 m4">
					<?php
					if ( is_active_sidebar( 'home-right-sidebar' ) ) :
						dynamic_sidebar( 'home-right-sidebar' );
					endif;
					?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
