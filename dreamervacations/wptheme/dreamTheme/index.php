<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>    

<div class="newsBody">
	<?php the_title( '<h1>', '</h1>'); ?>
    <?php the_content(); ?>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>