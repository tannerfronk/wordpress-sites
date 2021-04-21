<? get_header(); ?>
<div class="searchPage">
<h1>Search Results</h1>
<?php while ( have_posts() ) : the_post(); ?>    
	<?php the_title('<h2 class="searchTitle">', '</h2>'); ?>
    <?php the_excerpt(); ?>
<?php endwhile; ?>
</div>

<? get_footer(); ?>