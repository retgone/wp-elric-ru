<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/content-intro.php'); ?>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<?php include(TEMPLATEPATH . '/multi-post.php'); ?>
		<?php endwhile; ?>
		
		<ul>
			<li><?php next_posts_link('&laquo; Older Entries') ?></li>
			<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
		</ul>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>
<?php include(TEMPLATEPATH . '/content-outro.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>