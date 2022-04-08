<div class="row tm-row">
    <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
    <article class="col-12 col-md-6 tm-post">
        <hr class="tm-hr-primary">
        <a class="effect-lily tm-post-link tm-pt-60" href="<?php the_permalink() ?>">
            <div class="tm-post-link-inner">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">
            </div>
            <span class="position-absolute tm-new-badge">New</span>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
        </a>
        <p class="tm-pt-30">
            <?php the_content();  ?>
        </p>
        <div class="d-flex justify-content-between tm-pt-45">
            <span class="tm-color-primary"> <?php
                                                            $tags = get_the_tags();
                                                            foreach($tags as $tag):?>
                <a href="<?php echo get_tag_link($tag->term_id);?>">
                    <?php echo $tag->name;?>
                </a>
                <?php endforeach;?></span>
            <span class="tm-color-primary"><?php echo get_the_date();?></span>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <span>0 comments</span>
            <?php
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
?>
            <span>by <?php echo $fname;?> <?php echo $lname;?></span>
        </div>
    </article>
    <?php } // end while
            } // end if
            ?>


</div>