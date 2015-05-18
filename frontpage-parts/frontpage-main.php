<?php
/**
* Frontpage main content
*
* @package bushido
*/
?>
<main class="col s12 m12 l10">
    <div class="row">
        <section class="col s12 m4 l4">
            <?php get_template_part( 'frontpage-parts/main/main', 'categories' ); ?>
        </section>
        <section class="col s12 m8 l8">
            <?php get_template_part( 'frontpage-parts/main/main', 'slider' ); ?>
        </section>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <?php get_template_part( 'frontpage-parts/main/main', 'ads' ); ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <?php get_template_part( 'frontpage-parts/main/main', 'bestsellers' ); ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <?php get_template_part( 'frontpage-parts/main/main', 'latest' ); ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <?php get_template_part( 'frontpage-parts/main/main', 'popular' ); ?>
        </div>
    </div>
</main>