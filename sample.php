<?php 
$posts = get_sub_field('choose_a_solution');
?>

<?php if ($posts) { ?>
    <div class="hide-for-large">
        <div class="grid-container">
            <?php foreach ($posts as $post) { ?>
                <div class="featured-selection-background grid-x margin-bottom-2">
                    <div class="featured-selection-image-container cell medium-5">
                        <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php echo the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('inline-small'); ?>" class="featured-selection-image"></a>
                        <?php } else { ?>
                            <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_field( 'header_image_fallback', 'option' )['sizes']['inline-medium']; ?>" class="featured-selection-image"></a>
                        <?php }; ?>
                    </div>
                    <div class="featured-selection-copy cell medium-7 padding-2">
                        <h3 class="featured-selection-name">
                            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="featured-selection-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="featured-selection-read-more">
                            <a href="<?php echo the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
    <div class="featured-selections show-for-large">
	    <div class="featured-selections-block">
		    <?php $i = 0; ?>
		    <?php foreach ($posts as $post) { ?>
            <?php 
            $i++; 
            ?>
            <div class="featured-selection-container">
                <div class="featured-selection grid-x <?php echo $i % 2 === 0 ? 'image-on-left' : 'image-on-right'; ?>">
                    <div class="featured-selection-background cell medium-8 large-6">
                        <div class="featured-selection-copy">
                            <div class="grid-container outer-copy-container">
                                <div class="grid-x <?php echo $i % 2 === 0 ? 'align-right' : 'align-left'; ?> align-middle inner-copy-container">
                                    <div class="cell medium-7 large-5">
                                        <h3 class="featured-selection-name">
                                            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="featured-selection-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="featured-selection-read-more">
                                            <a class="align-middle" href="<?php echo the_permalink(); ?>">Read More </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-selection-image-container cell medium-4 large-6">
                        <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php echo the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('inline-small'); ?>" class="featured-selection-image"></a>
                        <?php } else { ?>
                            <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_field( 'header_image_fallback', 'option' )['sizes']['inline-small']; ?>" class="featured-selection-image"></a>
                        <?php }; ?>
                    </div>
                </div> 
            </div>
        <?php }; ?>
    </div>

<?php }; ?>