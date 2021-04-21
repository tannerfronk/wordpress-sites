<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Cabot Cruises <?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/ed8bc00db2.js" crossorigin="anonymous"></script>
  <script type="application/ld+json">
      {
          "@context": "https://schema.org/",
          "@type": "TravelAgency",
          "name":"Cabot Cruises",
          "description": "Cabot Cruises is a travel agency providing the best cruise deals on our online travel website",
          "openingHours": "Mo-Fr 09:00-16:00",
          "telephone": "+18005551234",
          "address": {
            "@type": "PostalAddress",
              "streetAddress": "2002 W 12600 S",
              "addressLocality": "Herriman",
              "addressRegion": "UT"
            },
            "image": "https://cabotcruises-tannerfronk.netlify.app/<?php echo get_template_directory_uri(); ?>/images/cruiselogo1.png",
            "priceRange": "$500 to $10000"
      }
  </script>
  <script src="https://www.google.com/recaptcha/api.js?render=6Ld48XEaAAAAAHXd5EkIyj6YMg2qgjJWnKmdKKbN"></script>
  <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Ld48XEaAAAAAHXd5EkIyj6YMg2qgjJWnKmdKKbN', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
</head>

<body>
<header>
    <div class="headerContent">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/cruiselogo1.png" alt="Cabol Cruise Logo"
        srcset="<?php echo get_template_directory_uri(); ?>/images/cruiselogo1.png 1x, <?php echo get_template_directory_uri(); ?>/images/cruiselogo2.png 2x, <?php echo get_template_directory_uri(); ?>/images/cruiselogo3.png 3x"/>
        <a class="phoneNum" href="tel:1-800-555-1234">1-800-555-1234</a>
    </div>
</header>
<nav class="clearfix">
   <button id="hamburgerBtn">
       <span><i class="fas fa-bars"></i> Open</span>
       <span><i class="fas fa-window-close"></i> Close</span>
  </button>
    <div class="navBar">

        <?php wp_nav_menu(array('menu_id' => 'primaryNav')); ?>

        <div class="searchBar">
            <form method="get" action="/">
                <input class="search" name="s" type="search" placeholder="search...">
                <button class="searchBtn" type="submit" value=""><i class="fa fa-search"></i></button>
            </form>
        </div>

    </div>

</nav>
<main class="center">