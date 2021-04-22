<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Dreamer Vacations - <?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/ed8bc00db2.js" crossorigin="anonymous"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/main.js"></script> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
  

</head>

<body>
    <nav class="navbar container is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="http://www.dreamervacations.tannerjfronk.com/">
                <img class="brand-image" src="<?php echo get_template_directory_uri(); ?>/images/logo2.png" alt="Dreamer Vacations Logo"/>
                &nbsp;Dreamer Vacations LLC
            </a>
            <button class="button navbar-burger" data-target="primary-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
        </div>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 0,
            'container'         => false,
            // 'items_wrap'     => 'div',
            'menu_class'        => 'navbar-menu',
            'menu_id'           => 'primary-menu',
            'after'             => "</div>",
            'walker'            => new Navwalker())
        );
        ?>
              <div class="navbar-end">
              <div class="navbar-item">
                  <div class="tile is-mobile">
                    <input class="input mr-2 my-2" type="text" placeholder="Search...">
                    <button class="button is-dark mt-2">Search</button>
                    </div>
              </div>
              </div>
    </nav>
