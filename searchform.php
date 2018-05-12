<form action="<?php echo home_url(); ?>" method="get">
                  <div class="flag">
                    <div class="flag__body">
                      <label>
                        <span class='icon-search'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/icon-search.png" alt=""></span>
                        <input type="text" name="s" class="input input--primary input--full" placeholder="<?php _e('search the help center','themestreet'); ?>">
                        <input type="hidden" name="post_type" value="faq">
                      </label>
                    </div>
                    <div class="flag__img pr0">
                      <button class="btn btn--primary"><?php _e('GO','themestreet'); ?></button>
                    </div>
                  </div>
                </form>