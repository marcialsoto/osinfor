<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'sage'); ?>" required>
    <span class="input-group-btn">
      <button type="submit" class="search-submit btn btn-default"><i class="fa fa-angle-right"></i></span></button>
    </span>
  </div>
</form>
