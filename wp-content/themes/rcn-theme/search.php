<?php get_header(); ?>
<div class="search-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <?php get_search_form(); ?>
        <?php echo "Search results for: <span> " . get_search_query() . "</span>" ?>


        <?php
        if (have_posts()) : ?>

          <?php
          /* Start the Loop */
          while (have_posts()) : the_post();
            $result_desc =  mb_strimwidth(get_the_content(), 0, 183, "..."); ?>
            <div class="col-md-12 result-card-col">
              <div class="result-card">
                <a href="<?php the_permalink(); ?>">

                  <div class="result-img">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail();
                    } else { ?>
                      <img src="<?php echo bloginfo('template_directory'); ?>/img/placeholder.png" alt="placeholder-img">
                    <?php } ?>
                  </div>

                  <div class="result-content">
                    <div class="result-type">
                      <?php
                      $post_type = get_post_type_object(get_post_type());
                      echo _e($post_type->labels->singular_name);
                      ?>
                    </div>
                    <div class="result-title">
                      <?php the_title(); ?>
                    </div>
                    <div class="result-desc">
                      <?php echo $result_desc; ?>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          <?php
          endwhile;
        else :
          ?>
          <div class="col-md-12">
            <h2 class="no-result result-title font-18 light font-2"><?php printf(esc_html__('No Results', 'kodeks'), '<span>' . get_search_query() . '</span>'); ?>
            </h2>
          </div>
        <?php endif; ?>




      </div>
      <div class="col-lg-4">

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>