<?php 

/*
Template Name: Наша історія;
*/
?>

<?php get_header(); ?>

<div class="abouts">
            <div class="container">
                <h1 class="title">Наша історія</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field("title_block_history") ?>
                        </div>
                        <div class="aboutus__text">
                            <?php  the_field("text_block_history") ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field("history_img") ?>" alt="мир детства">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field("history_img_2") ?>" alt="мир детства">
                    </div>
                    <div class="col-lg-6">
                        <div class="subtitle">
                     <?php  the_field("title_block_history_2")?>
                        </div>
                        <div class="aboutus__text">
                           <?php the_field("text_block_history_2")?>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="subtitle">
                        <?php the_field("title_block_history_3")?>
                        </div>
                        <div class="aboutus__text">
                          <?php the_field("text_block_history_3") ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="aboutus__img" src="<?php the_field("history_img_3") ?>" alt="мир детства">
                    </div>
                </div>
            </div>
        </div>
 


<?php get_footer(); ?>