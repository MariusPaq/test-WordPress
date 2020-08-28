<?php
get_header();
global $wp_query;
?>
<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">
      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h1>

        <?php if ( have_posts() ) { ?>

            <?php while ( have_posts() ) { the_post(); ?>

              <div class="resultsFind">
                <h3><?php the_title();  ?></h3>
                <?php  the_post_thumbnail('medium') ?>
                <?php echo substr(get_the_excerpt(), 0,200); ?>
                <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Lire la suite</a></div>
              </div>

            <?php } ?>

           <?php echo paginate_links(); ?>

        <?php } ?>

    </div>

<?php include 'footer.php' ?>
