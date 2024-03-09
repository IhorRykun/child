<?php 

/*
Template Name: Наш тім
*/

?>

<?php
get_header();
?>

<div class="specialists">
            <div class="container">
                <h1 class="title"><?php the_field("team_title") ?></h1>
                <div class="row">
                            <img class="specialists__img" src="<?php the_field("team_img") ?> " alt="наша команда">
                    
                </div>
            </div>
        </div>

<?php
get_footer();
?>