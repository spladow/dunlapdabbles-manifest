</div>

<div id="footer">

  <!-- Footer Links -->
  
  <h5>Elsewhere</h5>
  <ul class="elsewhere">
    <li><a href="http://twitter.com/spladow">Twitter</li>
    <li><a href="http://rdio.com/people/spladow">Rdio</li>
    <li><a href="http://www.goodreads.com/user/show/1867779-thomas-dunlap">GoodReads</li>
    <li class="last-child"><a href="http://reading.am/spladow">Reading.am</li>
	
  </ul>

  <!-- Search Field -->
  
  <div class="footerContent">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <div id="search">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
      </div>
    </form>
    
    
    <p>&copy; DunlapDabbles. Powered by <a href="http://wordpress.org/">WordPress</a> and <a href="http://jimbarraud.com/manifest/">Manifest</a></p>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>