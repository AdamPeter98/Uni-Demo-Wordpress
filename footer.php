<footer class="site-footer">

<div class="site-footer__inner container container--narrow">

  <div class="group">

    <div class="site-footer__col-one">
    <h1 class="school-logo-text float-left"><a href="<?php echo site_url()?>"><span style="color:grey"><strong>UBB</strong></span><span style="color:red"> FSEGA</span> </a></h1>
      
    </div>

    <div class="site-footer__col-two-three-group">
      <div class="site-footer__col-two">
        <h3 class="headline headline--small">Explore</h3>
        <nav class="nav-list">
          <ul>
          
            <?php wp_nav_menu(array(
              'theme_location' =>'footerLocation1'
            ));?>
          </ul>
        </nav>
      </div>

      <div class="site-footer__col-three">
        <h3 class="headline headline--small">Learn</h3>
        <nav class="nav-list">
          <ul>
            
            <?php wp_nav_menu(array(
              'theme_location' =>'footerLocation2'
            ));?>
          </ul>
        </nav>
      </div>
    </div>

    <div class="site-footer__col-four">
      <h3 class="headline headline--small">Connect With Us</h3>
        <ul class="ic">
       
             <li><a href="#" ><i class="fa fa-facebook"> Facebook</i> </a></li>
              
              <li><a href="#"><i class="fa fa-youtube" > Youtube</i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"> Linkedin</i></a></li>
              <li><a href="#" ><i class="fa fa-instagram" > Instagram</i></a></li>
            </ul>
        </ul>
    </div>
  </div>

</div>
</footer>
<div class="search-overlay">
      <div class="search-overlay__top">
        <div class="container">
         <button class="sc-btn"> <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i></button>
          <input type="text" class="search-term" placeholder="Search" id="search-term">
        </div>
        <i class="fa fa-window-close search-overlay__close" aria-hidden="true"></i>
      </div>      

</div>
<?php wp_footer()?>
    </body>
</html>