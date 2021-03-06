<!-- SUB POST DIVISIONS -->

<div class="subpost_wrap2">
    <div class="subpost_wrap">
        <div class="subpost_left">
            <?php while (have_posts()) : the_post(); ?>
            <div class="subpost">

                <?php $width = 62;
                      $height = 62;

                      $classtext = '';
                      $titletext = get_the_title();

                      $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
                      $thumb = $thumbnail["thumb"];  ?>

                <?php if($thumb != '') { ?>
                    <?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
                <?php } ?>

                <div class="sub_article">
                    <h3><a href="<?php the_permalink(); ?>"><?php truncate_title(40); ?></a></h3>
                    <?php truncate_post(210); ?>
                </div>
            </div>
            <!-- subpost -->
            <?php endwhile; ?>
<?php if (get_option('coldstone_pagenavi') == 'on') { ?>
<div style="clear: both;"></div>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
else { ?>
<p class="pagination">
    <?php next_posts_link(esc_html__('&laquo; Previous Entries','ColdStone')) ?>
    <?php previous_posts_link(esc_html__('Next Entries &raquo;','ColdStone')) ?>
</p>
<?php } ?>
<?php } ?>
        </div>
        <!-- /subpost_left -->
        <div class="life_wrap">

            <div style="clear: both;"></div>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Homepage Sidebar") ) : ?>
            <?php endif; ?>
            <?php if (get_option('coldstone_tabs') == 'on') { ?>
            <div class="jsside">
                <?php get_template_part('js-side'); ?>
            </div>
            <?php }; ?>
            <!-- /jssside -->
        </div>
        <!-- /life_wrap -->
        <div style="clear: both;"></div>
    </div>
    <div style="clear: both;"></div>
</div>
<!-- /subpost_wrap -->
<img src="<?php bloginfo('template_directory'); ?>/img/pearl-<?php echo esc_attr(get_option( 'coldstone_color_scheme' )); ?>.jpg" style="float: left;" alt="<?php the_title(); ?>" />