
<footer>
  <div class="footer-cat">
    <?php wp_list_categories(array('exclude' => 5,)); ?>
  </div>
  <div class="footer-popular">

  </div>

  <div class="instagram">

  </div>
</footer>

</body>
</html>

<!-- 363a3f footer background
303336 footer footer back
aaaaaa categories
 -->

<?php $t = wpp_get_mostpopular(); ?>
<?php print_r($t); ?>
