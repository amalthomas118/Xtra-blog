<?php if( have_posts() ): while( have_posts() ): the_post();?>
<div class="row tm-row">
    <div class="col-12">
        <hr class="tm-hr-primary tm-mb-55">
        <!-- Video player 1422x800 -->
        <video width="954" height="535" controls class="tm-mb-40">
            <source src="/video/wheat-field.mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>


<?php
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
?>
<div class="row tm-row">
    <div class="col-lg-8 tm-post-col">
        <div class="tm-post-full">
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title();?></h2>
                <p class="tm-mb-40">Posted by <?php echo $fname;?> <?php echo $lname;?></p>

                <p> <?php the_content();?></p>
                <!-- Code to take tags -->
                <span class="d-block text-right tm-color-primary">

                    <?php
$tags = get_the_tags();
foreach($tags as $tag):?>

                    <a href="<?php echo get_tag_link($tag->term_id);?>">
                        <?php echo $tag->name;?>
                    </a>
                    <?php endforeach;?>

                </span>
            </div>
            <!--<?php //comment_form();?> -->
        </div>
    </div>
</div>
    <?php endwhile; else: endif;?>