<!-- Post Start -->
<article class="is-post is-post-excerpt" class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <header>
        <h2 class="entry-title"><a title="<?php printf( esc_attr__( 'Permalink to %s', 'striped' ), the_title_attribute( 'echo=0' ) ); ?>" href="<?php the_permalink(); ?>" rel="bookmark">
                <?php the_title(); ?>
            </a></h2>
        <!-- <span class="byline">A free, fully responsive HTML5 site template by HTML5 UP</span> -->
    </header>
    <div class="info">
			<span class="date">
			<span class="day"><?php the_time('j'); ?></span>
			<span class="month"><?php the_time('M'); ?></span>
			<span class="year"><?php the_time('Y'); ?></span>
<!-- <span class="month">Jan<span>uary</span></span> <span class="day">14</span><span class="year">, 2013</span> -->
 
			</span>

    </div>
    <a href="<?php the_permalink(); ?>" class="image image-full"><?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }  ?></a>
    <?php the_content(); ?>
</article>
<!-- Post End -->