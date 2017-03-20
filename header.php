<?php
/**
 * @package Make
 */
?><!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js IE9 IE" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<script>
		!function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
			arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
			d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
			insertBefore(d,q)}(window,document,'script','_gs');

			_gs('GSN-179149-K');
		</script>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<script src="//use.typekit.net/fzw6ben.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		<script src="http://chatel.pm/enseignement_fichiers/2015/dndi/tp2_form.js">
  		</script>
		<?php wp_head(); ?>
	</head>

	<body <?php if (is_page( 'a-propos')) { body_class('has-left-sidebar'); } else { body_class(); } ?>>
		<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-556793-1', 'auto');
		ga('send', 'pageview');
		</script>
		<div id="site-wrapper" class="site-wrapper">

			<?php ttfmake_maybe_show_site_region( 'header' ); ?>

			<div id="site-content" class="site-content">
				<div class="container">
