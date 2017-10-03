<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name'); ?> | 
          <?php if(is_front_page()): ?>
            <?php bloginfo('description'); ?>
          <?php else: ?>
            <?php wp_title(''); ?>
          <?php endif; ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-flex.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/font-awesome.min.css">
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load({
              test: Modernizr.flexbox,
              nope : 'http://cdn.ink.sapo.pt/3.1.10/css/ink-legacy.min.css'
            });
        </script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/holder.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/ink-all.min.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/autoload.js"></script>

        <style>

            body {
                background: #ededed;
            }

            .panel {
                border-radius: 2px;
                -webkit-box-shadow: #dddddd 0 1px 1px 0;
                -moz-box-shadow: #dddddd 0 1px 1px 0;
                box-shadow: #dddddd 0 1px 1px 0;
                padding: 1em;
                border: 1px solid #BBB;
                background-color: #FFF;
            }

        </style>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
<body>

  <header class="ink-grid">
    <div class="vertical-space">
      <div class="panel">
        <h1><?php bloginfo('name'); ?> <small><?php bloginfo('description'); ?></small> </h1>
        <nav class="ink-navigation">
          <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'menu_class' => 'menu horizontal black'
            ]);
          ?>
        </nav>
      </div>
    </div>
  </header>