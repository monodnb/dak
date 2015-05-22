<?php
/**
* Template name: Product
*
* @package bushido
*/

get_header(); ?>


<section id="product-wrapper" class="row">

    <div class="col s12 m8 l8 product-gallery resting">
        <div class="col s2 m2 l2 image-list">
            <img src="<?php echo get_template_directory_uri() . '/img/example-prod/02.jpg'?>" alt="" class="image-selection">
            <img src="<?php echo get_template_directory_uri() . '/img/example-prod/01.jpg'?>" alt="" class="image-selection displayed">
            <img src="<?php echo get_template_directory_uri() . '/img/example-prod/03.jpg'?>" alt="" class="image-selection">
            <img src="<?php echo get_template_directory_uri() . '/img/example-prod/04.jpg'?>" alt="" class="image-selection">
            <img src="<?php echo get_template_directory_uri() . '/img/example-prod/05.jpg'?>" alt="" class="image-selection">
        </div>
        <div class="col s10 m10 l10 image-display">
            <img src="<?php echo get_template_directory_uri() . '/img/example-prod/01.jpg'?>" alt="" class="image-active">
        </div>
    </div>
    <div class="col s12 m4 l4 buy-options resting">
        <div class="primary-text">
            <h1 class="product-title">Tricou</h1>
            <h2 class="product-subtitle">Nike FCB Squad SS PM TOP 2</h2>
            <p class="product-stock">In stoc</p>
        </div>
        <div class="product-price-tag">
            <p class="product-price">239,99 lei</p>
            <p class="product-old-price">259,99 lei</p>
        </div>
        <div class="product-rating-area">
            <i class="mdi-toggle-star"></i>
            <i class="mdi-toggle-star"></i>
            <i class="mdi-toggle-star"></i>
            <i class="mdi-toggle-star-half"></i>
            <i class="mdi-toggle-star-outline"></i>
            <a href="#description-wrapper">3 review-uri</a>
        </div>
        <div class="divider nomargin center-inset"></div>
        <div class="product-add-to-cart">
            <form action="">
                <select name="" id="">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
                <input type="number" value="1">
                <button type="submit" class="colored flat">Comanda</button>
            </form>
        </div>
    </div>

</section>

<section id="description-wrapper" class="row">
    <div class="col s12 m12 l12 product-description">
        <ul class="lines-list resting spaced">
            <li class="single-line list-header">
               <div class="avatar"></div>
                <div class="supporting-text">
                    <span class="list-title">Descriere produs</span>
                </div>
            </li>
            <li>
                <p>Iti place fotbalul? Il practici? Esti fan FC Barca? Daca indeplinesti oricare din aceste trei conditii, tocmai ai gasit tricoul tau preferat.<br>
Material: 100% Poliester.<br>
Culoare: albastru cu elemente de design rosii si galbene (culorile echipei FC Barcelona).<br>
Dri Fit: o tehnologie folosita in confectionarea materialului tricoului care elimina foarte usor transpiratia si te ajuta sa te mentii uscat si confortabil. Acest lucru este posibil datorita materialului inovativ cu perforatii pe partea din spate, sub axila si in laterala a tricoului care lasa pielea sa respire cat mai bine in timpul purtarii.
Fata tricoului este lucioasa, dintr-un material special cu pori foarte mici care iti vor asigura confortul termic de care ai nevoie pe terenul de fotbal.<br>
Manecile tricoului sunt singurele portiuni opace 100%, din poliester lucios.
Pe spatele tricoului vei gasi inscriptionat imediat sub emblema brandului tau favorit Nike, numele echipei tale favorite de fotbal: Barca.
Acest tricou este special creat pentru terenul de fotbal, insa un fan adevarat ca tine si-l va dori cu siguranta, chiar daca nu practici fotbal de performanta.<br>
Daca esti un atlet profesionist, atunci acesta este tricoul ideal pentru tine - tehnologiile folosite in crearea lui bifeaza cele mai inalte standarde calitative, completand echipamentul tau si ajutandu-te sa obtii performantele dorite.</p>
            </li>
        </ul>
    </div>
</section>

<div class="row" id="similar-products">
    <ul class="grid-list resting gs2 gm4 lm4">
        <li class="list-header">
            <div class="avatar"></div>
            <div class="supporting-text">
                <span class="list-title">Produse similare</span>
            </div>
            <div class="action">
                <i class="mdi-navigation-chevron-left"></i>
                <i class="mdi-navigation-chevron-right"></i>
            </div>
        </li>
        <li class="cell">
                <div class="tile">
                    <div class="rich-media">
                        <img src="<?php echo get_template_directory_uri() . '/img/produse/nofear-goggles.jpg'?>" alt="">
                    </div>
                    <div class="primary-text">
                        <h1 class="tile-title">Ochelari Motocross</h1>
                        <h2 class="tile-subtitle">Nofear</h2>
                    </div>
                    <div class="price-tag">
                        <p class="price">143.54 lei</p>
                        <p class="old-price"></p>
                    </div>
                    <div class="rating-area">
                        <i class="mdi-toggle-star"></i>
                        <i class="mdi-toggle-star"></i>
                        <i class="mdi-toggle-star"></i>
                        <i class="mdi-toggle-star-half"></i>
                        <i class="mdi-toggle-star-outline"></i>
                    </div>
                    <div class="divider nomargin center-inset"></div>
                    <div class="supplemental-actions">
                        <div class="action-area">
                            <button class="colored resting">Comanda</button>
                        </div>
                    </div>
                </div>
            </li>
        <li class="cell">
            <div class="tile">
                <div class="rich-media">
                    <img src="<?php echo get_template_directory_uri() . '/img/produse/puma-rugby-shoes.jpg'?>" alt="">
                </div>
                <div class="tile-info"><img src="<?php echo get_template_directory_uri() . '/img/icons/hot_items.svg'?>" alt=""></div>
                <div class="primary-text">
                    <h1 class="tile-title">Ghete rugby</h1>
                    <h2 class="tile-subtitle">Puma H8</h2>
                </div>
                <div class="price-tag">
                    <p class="price">179.52 lei</p>
                    <p class="old-price">199 lei</p>
                </div>
                <div class="rating-area">
                    <i class="mdi-toggle-star"></i>
                    <i class="mdi-toggle-star"></i>
                    <i class="mdi-toggle-star-half"></i>
                    <i class="mdi-toggle-star-outline"></i>
                    <i class="mdi-toggle-star-outline"></i>
                </div>
                <div class="divider nomargin center-inset"></div>
                <div class="supplemental-actions">
                    <div class="action-area">
                        <button class="colored resting">Comanda</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="cell">
            <div class="tile">
                <div class="rich-media">
                    <img src="<?php echo get_template_directory_uri() . '/img/produse/bicicleta-ghost.jpg'?>" alt="">
                </div>
                <div class="primary-text">
                    <h1 class="tile-title">Bicicleta</h1>
                    <h2 class="tile-subtitle">Ghost AMR LT 2</h2>
                </div>
                <div class="price-tag">
                    <p class="price">6990 lei</p>
                    <p class="old-price"></p>
                </div>
                <div class="rating-area">
                    <i class="mdi-toggle-star"></i>
                    <i class="mdi-toggle-star"></i>
                    <i class="mdi-toggle-star"></i>
                    <i class="mdi-toggle-star"></i>
                    <i class="mdi-toggle-star-outline"></i>
                </div>
                <div class="divider nomargin center-inset"></div>
                <div class="supplemental-actions">
                    <div class="action-area">
                        <button class="colored resting">Comanda</button>
                    </div>
                </div>
            </div>
        </li>
        <li class="cell">
                <div class="tile">
                    <div class="rich-media">
                        <img src="<?php echo get_template_directory_uri() . '/img/produse/ceas-suunto.png'?>" alt="">
                    </div>
                    <div class="tile-info"><img src="<?php echo get_template_directory_uri() . '/img/icons/hot_items.svg'?>" alt=""></div>
                    <div class="primary-text">
                        <h1 class="tile-title">Ceas</h1>
                        <h2 class="tile-subtitle">Suunto Ambit 3</h2>
                    </div>
                    <div class="price-tag">
                        <p class="price">1796 lei</p>
                        <p class="old-price"></p>
                    </div>
                    <div class="rating-area">
                        <i class="mdi-toggle-star"></i>
                        <i class="mdi-toggle-star"></i>
                        <i class="mdi-toggle-star"></i>
                        <i class="mdi-toggle-star-half"></i>
                        <i class="mdi-toggle-star-outline"></i>
                    </div>
                    <div class="divider nomargin center-inset"></div>
                    <div class="supplemental-actions">
                        <div class="action-area">
                            <button class="colored resting">Comanda</button>
                        </div>
                    </div>
                </div>
            </li>
    </ul>
</div>

<?php get_footer(); ?>
