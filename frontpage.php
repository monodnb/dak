<?php
/**
* Template name: Frontpage
*
* @package bushido
*/

get_header(); ?>
<div class="row">
    <?php get_template_part( 'frontpage-parts/frontpage', 'main' ); ?>
    <?php get_template_part( 'frontpage-parts/frontpage', 'aside' ); ?>
</div>

<section id="promise" class="row">
    <div class="row">
        <div class="divider"><span class="divider-text">De ce sa cumperi de la noi?</span></div>
    </div>
    <div class="promises row">
        <div class="promise col s6 m4 l2">
            <img src="<?php echo get_template_directory_uri() . '/img/icons/list_checked.svg'?>" alt="">
            <span>Oferta produse</span>
            <p>Gasesti orice, in materie de articole sportive.</p>
        </div>
        <div class="promise col s6 m4 l2">
            <img src="<?php echo get_template_directory_uri() . '/img/icons/savings.svg'?>" alt="">
            <span>Transport gratuit</span>
            <p>Pentru comenzi cu valoare mai mare de 299 lei.</p>
        </div>
        <div class="promise col s6 m4 l2">
            <img src="<?php echo get_template_directory_uri() . '/img/icons/delivery_on_time.svg'?>" alt="">
            <span>Livrare rapida</span>
            <p>In 24h oriunde in tara, in zilele lucratoare.</p>
        </div>
        <div class="promise col s6 m4 l2">
            <img src="<?php echo get_template_directory_uri() . '/img/icons/box_open.svg'?>" alt="">
            <span>Verificare colet</span>
            <p>Poti solicita deschiderea coletului la livrare</p>
        </div>
        <div class="promise col s6 m4 l2">
            <img src="<?php echo get_template_directory_uri() . '/img/icons/moneyback.svg'?>" alt="">
            <span>Drept de retur</span>
            <p>Poti returna in 10 de zile, orice produs cumparat.</p>
        </div>
        <div class="promise col s6 m4 l2">
            <img src="<?php echo get_template_directory_uri() . '/img/icons/support.svg'?>" alt="">
            <span>Suport 24h</span>
            <p>Iti stam la dispozitie 24/7. Online sau la telefon</p>
        </div>
    </div>
</section>


<?php get_footer(); ?>