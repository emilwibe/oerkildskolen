<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'order' => 'DESC',
        'orderby' => 'date'
    );

    $news = new WP_query($args);
?>
<?php if($news->have_posts()) : ?>

    <div class="newsbox">
        <ul>
    <?php while($news->have_posts()) : $news->the_post(); ?>

            <li><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>

        </ul>
    </div><!--/.newsbox-->
<?php endif; ?>