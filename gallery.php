<?php
/* Template Name:  Gallery*/
?>



<div class="container-fluid">
    <main class="tm-main">
        <div class="row tm-row">
            <?php
            if (have_rows('gallery')) :
                while (have_rows('gallery')) : the_row();
                    $image = get_sub_field('image');
                    $caption = get_sub_field('caption');
                    $link = get_sub_field('link');
            ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a class="effect-lily tm-post-link tm-pt-60" href="<?php the_permalink() ?>">
                            <div class="tm-post-link-inner">
                                <img src="<?php echo $image['url']; ?>" alt="Image" class="img-fluid">
                            </div>
                        </a>
                        <p class="tm-pt-30">
                            <?php echo $caption;  ?>
                        </p>
                        <a href="<?php echo $link; ?>">Visit</a>
                    </article>
            <?php endwhile;
            endif;
            ?>


        </div>
    </main>
</div>

