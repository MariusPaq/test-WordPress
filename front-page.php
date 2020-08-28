<?php include 'header.php' ?>

  <div id="wrap">

    <?php
     if ( has_nav_menu( 'menu' ) ) : ?>
     <?php
     wp_nav_menu ( array (
     'theme_location' => 'menu' ,
     'menu_class' => 'my-menu',
     ) ); ?>
     <?php endif;
     ?>



     <?php the_post_thumbnail(); ?><!-- ? jidnzdcibudsuiz -->



      <section id="content">
                  <?php if(have_posts()) : ?>
                     <div id="loop">
                         <?php while(have_posts()) : the_post(); ?>
                             <article>
                                 <p id="dateArt"><?php the_date(); ?> par <?php the_author(); ?></p>
                                 <h1><?php the_title(); ?></h1>

                                 <?php if(is_singular()) : ?>
                                     <?php the_content(); ?>
                                 <?php else : ?>
                                     <?php the_excerpt(); ?>

                                 <?php endif; ?>
                                 <a href="<?php the_permalink(); ?>">Lire la suite</a>
                             </article>
                             <div class="lineGray"></div>
                         <?php endwhile; ?>
                     </div>

                     <div id="pagination">
                 <?php echo paginate_links(); ?>
               </div>
            <?php else : ?>
               <p>Aucun résultat</p>
            <?php endif; ?>
      </section>

  </div>

<?php include 'footer.php' ?>
