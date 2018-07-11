<?php if(have_rows('index_featured')) : ?>
  <?php while(have_rows('index_featured')) : the_row(); ?>

      <div class="row lg-col-33 md-col-33 sm-col-100 index-featured">
        <div>
          <div>
            <a href="<?php the_sub_field('index_featured_link_1'); ?>">
              <?php
                $image = get_sub_field('index_featured_img_1');
                $size = 'full';

                if($image){
                  echo wp_get_attachment_image($image, $size);
                }
              ?>

              <h2><?php the_sub_field('index_featured_heading_1'); ?></h2>
              <p><?php the_sub_field('index_featured_text_1'); ?></p>
            </a>
          </div>
        </div>
        <div>
          <div>
            <a href="<?php the_sub_field('index_featured_link_2'); ?>">
              <?php
                $image = get_sub_field('index_featured_img_2');
                $size = 'full';

                if($image){
                  echo wp_get_attachment_image($image, $size);
                }
              ?>

              <h2><?php the_sub_field('index_featured_heading_2'); ?></h2>
              <p><?php the_sub_field('index_featured_text_2'); ?></p>
            </a>
          </div>
        </div>
        <div>
          <div>
            <a href="<?php the_sub_field('index_featured_link_3'); ?>">
              <?php
                $image = get_sub_field('index_featured_img_3');
                $size = 'full';

                if($image){
                  echo wp_get_attachment_image($image, $size);
                }
              ?>

              <h2><?php the_sub_field('index_featured_heading_3'); ?></h2>
              <p><?php the_sub_field('index_featured_text_3'); ?></p>
            </a>
          </div>
        </div>
      </div>
  <?php endwhile; ?>
<?php endif; ?>
