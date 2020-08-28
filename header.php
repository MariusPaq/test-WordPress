<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <?php wp_head(); ?>
</head>
<body>
    <header id="header">
        <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
        <h1><?php echo bloginfo('name'); ?></h1>
        <p id="propagande">Un site utilisant wordpress</p>
    </header>
    <div class="container">
      <nav id="navigation">
        <div id="nameMenu" class="row">
          <div class="col">

          </div>
          <div class="col">
            <h5 id="artRec">ARTICLE RECENTS</h5>
          </div>
          <div class="col">
            <h5 id="comRec">COMMENTAIRES RECENTS</h5>
          </div>
        </div>

         <?php wp_nav_menu(array('theme_location' => 'main')); ?>
      </nav>
