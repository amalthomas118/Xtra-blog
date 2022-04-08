<?php
/*
Template Name: About Xtra
*/
?>


<?php get_header();?>

<!--  -->
<?php $image = get_field('image');?>
<?php $about = get_field('about');?>
<?php $info = get_field('heading');?>
<?php $box1 = get_field('box1');?>
<?php $box2 = get_field('box2');?>
<?php $box3 = get_field('box3');?>


<div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row tm-row tm-mb-40">
                <div class="col-12">                    
                    <div class="mb-4">
                        <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title"><?php the_field('heading'); ?></h2>
                        <p>
                        <?php echo $about['para_1']; ?>
                        </p>
                        <p>
                        <?php echo $about['para_2'];?>
                        </p>                            
                    </div>                    
                </div>
            </div>
            <div class="row tm-row tm-mb-120">
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo $box1['box_title'];?></h2>
                        <p class="mb-0 tm-line-height-short">
                        <?php echo $box1['box_para'];?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fas fa-users-cog fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo $box2['box_title'];?></h2>
                        <p class="mb-0 tm-line-height-short">
                        <?php echo $box2['box_para'];?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title"><?php echo $box3['box_title'];?></h2>
                        <p class="mb-0 tm-line-height-short">
                        <?php echo $box3['box_para'];?>
                        </p>
                    </div>
                </div>
            </div>   
            
        
            <?php $team1 = get_field('team1');?>
            <?php $team2 = get_field('team2');?>
            <?php $team3 = get_field('team3');?>
            <?php $team4 = get_field('team4');?>



            <div class="row tm-row tm-mb-60">
                <div class="col-12">
                    <hr class="tm-hr-primary  tm-mb-55">
                </div>                
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="<?php echo esc_url( $team1['pic']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team1['name']; ?></h2>
                            <h3 class="tm-h3 mb-3"><?php echo $team1['position']; ?></h3>
                            <p class="mb-0 tm-line-height-short">
                            <?php echo $team1['descrip']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="<?php echo esc_url( $team2['pic']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team2['name']; ?></h2>
                            <h3 class="tm-h3 mb-3"><?php echo $team2['position']; ?></h3>
                            <p class="mb-0 tm-line-height-short">
                            <?php echo $team2['descrip']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="<?php echo esc_url( $team3['pic']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team3['name']; ?></h2>
                            <h3 class="tm-h3 mb-3"><?php echo $team3['position']; ?></h3>
                            <p class="mb-0 tm-line-height-short">
                            <?php echo $team3['descrip']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="<?php echo esc_url( $team4['pic']['url'] ); ?>" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $team4['name']; ?></h2>
                            <h3 class="tm-h3 mb-3"><?php echo $team4['position']; ?></h3>
                            <p class="mb-0 tm-line-height-short">
                            <?php echo $team4['descrip']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

<?php get_footer();?>