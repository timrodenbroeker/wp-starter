<?php get_header(); ?>

	<main id="content">
        <div class="container-narrow" style="margin-bottom: 100px;">
		    <?php the_content(); ?>
			<?php
			if ( is_user_logged_in() ) {
				// User is logged in, display the edit link
				echo '<a href="' . get_edit_post_link() . '">edit</a>';
			}
			?>

        </div>
	</main>

<?php get_footer();
