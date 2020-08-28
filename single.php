<?php get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <article class="post">
      <?php the_post_thumbnail(); ?>
      <p><?php the_date(); ?> par <?php the_author(); ?></p>
      <h1 id="titleSingle"><?php the_title(); ?></h1>
      <div class="post__content">
        <?php the_content(); ?>
      </div>
      <div class="lineGray"></div>
      <div class="comSection">
        <p><?php comments_number(); ?> pour "<?php the_title(); ?>"</p>
        <h2><?php comment_author_link(); ?></h2>
        <p><?php comment_date(); ?> <?php comment_time(); ?></p>
      </div>






    </article>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
