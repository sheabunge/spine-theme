<?php
/**
 * Project Name - Short Description
 *
 * Long Description
 * Can span several lines
 *
 * @package    demos.dev
 * @subpackage subfolder
 * @version    0.1
 * @author     paul <pauldewouters@gmail.com>
 * @copyright  Copyright (c) 2012, Paul de Wouters
 * @link       http://pauldewouters.com
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />

    <title><?php hybrid_document_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>
<body>

<?php get_template_part( 'menu', 'secondary' ); // Loads the menu-primary.php template. ?>
<div class="row">
    <div class="twelve columns">

			<div class="row">
					<div class="seven columns">
              <h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					</div>
					<div class="five columns">
              <h2 id="site-description"><small><?php bloginfo( 'description' ); ?></small></h2>
					</div>
			</div>

			<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

			<?php if ( get_header_image() ) echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="" />'; ?>

        <hr />
    </div>
</div>

<!-- End Nav -->


<!-- Main Page Content and Sidebar -->

<div class="row">