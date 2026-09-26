<?php get_header(); ?>
<main><section class="light" style="padding:140px 20px"><div class="container">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div></section></main>
<?php get_footer(); ?>