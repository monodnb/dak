<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package daksports
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dak' ); ?></a>

	<header id="header">
		<div id="toolbar" class="extended raised row">
            <div class="col centered s12 m12 l12 header" style="height:100%">
                <div class="top-row row">
                    <div class="col s12 m3 l3"></div>
                    <nav class="menu-wrapper col s12 m6 l6">
                        <button href="#home" class="flat active menu-item">Home</button>
                        <button href="#servicii" class="flat menu-item">Servicii</button>
                        <button href="#suport" class="flat menu-item">Suport</button>
                        <button href="#blog" class="flat menu-item">Blog</button>
                        <button href="#contact" class="flat menu-item">Contact</button>
                    </nav>
                    <div class="account-wrapper col s12 m3 l3">
                        <button href="#register" class="flat nocase">Inregistreaza-te</button>
                        <button href="#login" class="flat nocase">Intra in cont</button>
                    </div>
                </div>
                <div class="bottom-row row">
                    <div class="logo-wrapper col s12 m3 l3">
                        <img src="<?php echo get_template_directory_uri() . '/img/dak-logo-color.svg'?>" alt="mainlogo">
                    </div>
                    <div class="search-wrapper col s12 m3 l6">
                        <div class="search-bar">
                            <form action="">
                                <input type="text" placeholder="Cauta..." class="search-field">
                                <select type="text" class="select-list">
                                    <option value="toate" class="option">Toate categoriile</option>
                                    <option value="fitness" class="option">Fitness</option>
                                    <option value="aer-liber" class="option">Aer liber</option>
                                    <option value="sport" class="option">Sport</option>
                                    <option value="alergare" class="option">Alergare</option>
                                    <option value="accesorii" class="option">Accesorii</option>
                                    <option value="noi" class="option">Produse noi</option>
                                    <option value="promotii" class="option">Promotii</option>
                                </select>
                                <button type="submit" class="search-button"><i class="mdi-action-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="cart-wrapper col s12 m3 l3"></div>
                </div>
            </div>
        </div>
	</header><!-- #header -->

	<div id="content-area" class="row">
	    <div class="col centered s12 m12 l12">