<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:600" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <?php style(); ?>
</head>
<body>
  <div class="main">
  <h1>FooDog</h1>
  <div class="menu">
    <ul>
      <?php wp_list_categories(array('title_li' => '', 'exclude' => 5,)); ?>
    </ul>
  </div>
