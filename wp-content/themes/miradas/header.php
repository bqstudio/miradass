<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $favicon = get_field('favicon','option');	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url']; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body>

<?php wp_body_open(); ?>
<div class="popup-fade"></div>

<div id="page" class="site">
	<header class="header">
		<div class="container">
			<div class="header__top">
				<div class="header__top__left"> 		
					<?php get_template_part('modules/components/site-logo'); ?>
				</div>
				<div class="header__top__right">
					<div tabindex="0" data-block="menu" class="js-open-block responsive__btn" title="Open Menu">
						<span></span><span></span><span></span><span></span>
					</div>
					<?php get_template_part('modules/components/menu'); ?>
					<?php echo ($buttom_suscribe = get_field('buttom_suscribe','options'))? '<div class="buttom_suscribe">'.$buttom_suscribe.'</div>':''; ?>
					<?php if ($popup_id = get_field('popup_id','options')): ?> 
						<div class="popup">
							<div class="close_popup"></div>
							<div class="container">
								<div class="formBox" ><?php echo do_shortcode('[gravityform id="'.$popup_id.'" title="false" description="false" ajax="true"]'); ?></div>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
