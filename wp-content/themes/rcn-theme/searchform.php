<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
  <div class="search-btn">
    <button type="submit" class="search-submit" value="<?php esc_html_e('Search', 'prototyze') ?>">
      <img src="<?php bloginfo('template_directory'); ?>/img/header-search.svg" alt="">
    </button>
  </div>
  <label>
    <input type="search" class="search-field" placeholder="<?php esc_html_e('Search', 'prototyze') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php esc_html_e('Search After...', 'prototyze') ?>"/>
  </label>

</form>