<?php

ini_set("display_errors",true);
ini_set("error_reporting",E_ALL);

# zentrale funktionsbibliothek laden
include_once(dirname(__FILE__).'/_inc/functions.php');

# konfiguration für diese seite vornehmen
setConfigIfEmpty("title","projekt – ");
setConfigIfEmpty("description","Beschreibung");
setConfigIfEmpty("keywords","");
setConfigIfEmpty("bodyID","door");
?>

<?php renderPartial('_html-open'); ?>
<?php renderPartial('header'); ?>

<h1>Hier kommt content</h1>

<?php renderPartial('footer'); ?>
<?php renderPartial('_html-close'); ?>


