<?php
	# zentrale funktionsbibliothek laden
	include_once(dirname(__FILE__).'/../../_inc/functions.php');

	# konfiguration für diese seite vornehmen
	setConfig("title","Seite - ");
	setConfig("bodyID","ID");

?>
<?php renderPartial('_html-open'); ?>
<?php renderPartial('header'); ?>

<main class="main">
	<h1>Impressum</h1>
</main>

<?php renderPartial('sitemap'); ?>
<?php renderPartial('footer'); ?>
<?php renderPartial('_html-close'); ?>
