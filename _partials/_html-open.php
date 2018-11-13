<!doctype html>
<html class="no-js" lang="de"><!-- adjust lang attr dynamically! -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <title><?php if (isset($config['title'])) echo $config['title']; ?></title>

    <meta name="description" content="<?php if (isset($config['description'])) echo $config['description']; ?>">
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="index, follow"/>
    <meta name="keywords" content="<?php if (isset($config['keywords'])) echo $config['keywords']; ?>"/>

    <link rel="stylesheet" href="http://users.slowpoke.kernarea.de/~selspass/000-kompetenzaufbau/static-page/dist/css/style.min.css"/>


</head>
<body <?php if (isset($config['bodyID'])) echo "id=\"" . $config['bodyID'] . "\""; ?> <?php if (isset($config['bodyClass'])) echo "class=\"" . $config['bodyClass'] . "\"" ?>>
