<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:600" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <?php style(); ?>
</head>
<body>
  <div class="main">
  <h1><a href="<?php echo home_url(); ?>">FooDog</a></h1>
  <div class="menu">
    <ul>
      <?php wp_list_categories(array('title_li' => '', 'exclude' => 5,)); ?>
    </ul>
  </div>
