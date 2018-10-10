<?php if(!is_front_page()) : ?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <?php if(is_active_sidebar('sidebar')) :?>
        <?php dynamic_sidebar('sidebar');?>
      <?php endif;?>
    </div><!-- /.blog-sidebar -->
<?php endif;?>
  </div><!-- /.row -->

</div><!-- /.container -->

 <footer class="blog-footer">
      <p>&copy; <?php echo date('Y');?> - <?php bloginfo('name');?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer();?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_url');?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/assets/js/bootstrap.min.js"></script>
  </body>
</html>