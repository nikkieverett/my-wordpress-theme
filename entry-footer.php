<footer class="entry-footer">
  <span class="cat-links">
    <!-- <?php _e( 'Categories','blankslate' ); ?> -->
    <?php the_category( ', ' ); ?>
  </span>
  <span class="tag-links">
    <?php the_tags(); ?>
  </span>
  <span class="footer-comments">
    <?php if ( comments_open() ) {
      echo '<span class="comments-link"><a href="' . get_comments_link() . '">' . sprintf( __( 'Comments', 'blankslate' ) ) . '</a></span>';
      }
    ?>
  </span>
</footer>
