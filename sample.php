<?php 
$posts = get_sub_field('choose_a_solution');
?>

<?php if ($posts) { ?>
    <div class="grid-container hide-for-large">
        <?php foreach ($posts as $post) { ?>
            <div class="featured__selection__background grid-x margin-bottom-2">
                <div class="featured__selection__image__container cell medium-5">
                    <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php echo the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('inline-small'); ?>" class="featured__selection__image"></a>
                    <?php } else { ?>
                        <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_field( 'header_image_fallback', 'option' )['sizes']['inline-medium']; ?>" class="featured__selection__image"></a>
                    <?php }; ?>
                </div>
                <div class="featured__selection__copy cell medium-7 padding-2">
                    <h3 class="featured__selection__name">
                        <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="featured__selection__excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="featured__selection__read__more">
                        <a href="<?php echo the_permalink(); ?>">Read More <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        <?php }; ?>
    </div>
    <div class="featured__selections show-for-large">
	    <div class="featured__selections__block">
		    <?php $i = 0; ?>
		    <?php foreach ($posts as $post) { ?>
            <?php 
            $i++; 
            ?>
            <div class="featured__selection__container">
                <div class="featured__selection grid-x <?php echo $i % 2 === 0 ? 'featured__selection__image--left' : 'featured__selection__image--right'; ?>">
                    <div class="featured__selection__background cell medium-8 large-6">
                        <div class="featured__selection__copy">
                            <div class="grid-container featured__selection__content__container">
                                <div class="grid-x <?php echo $i % 2 === 0 ? 'align-right' : 'align-left'; ?> align-middle featured__selection__content">
                                    <div class="cell medium-7 large-5">
                                        <h3 class="featured__selection__name">
                                            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="featured__selection__excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <div class="featured__selection__read__more">
                                            <a class="align-middle" href="<?php echo the_permalink(); ?>">Read More </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured__selection__image__container cell medium-4 large-6">
                        <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php echo the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('inline-small'); ?>" class="featured__selection__image"></a>
                        <?php } else { ?>
                            <a href="<?php echo the_permalink(); ?>"><img src="<?php echo get_field( 'header_image_fallback', 'option' )['sizes']['inline-small']; ?>" class="featured__selection__image"></a>
                        <?php }; ?>
                    </div>
                </div> 
            </div>
        <?php }; ?>
    </div>

<?php }; ?>
