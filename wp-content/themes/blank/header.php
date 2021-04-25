<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

</div>

</body>
	<ul>
		<li><center><img src="http://localhost/ecomm/wp-content/uploads/2021/03/Rampa-Maharlika.jpg" width="120" height="70"></center></li>
		<li><center><h1>Rampa Maharlika</h1></center></li>
		<li><a href="home-template.php" style="margin-left: 720px;">Home</a></li>
		<li><a href="about-template.php">About</a></li>
		<li><a href="contact-template.php">Contact</a></li>
	</ul>
</html>