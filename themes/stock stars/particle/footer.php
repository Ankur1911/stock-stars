<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>INFORMATION</h3>
          <ul>
            <li><a href="#">Free tutorials</a></li>
            <li><a href="#">Live stock prices</a></li>
            <li><a href="#">Advice from our experts</a></li>
            <!-- <li><a href="#">Bitcoin Calculator</a></li> -->
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Experts Services</h3>
          <ul>
            <!-- <li><a href="#">Knowledge of stock market </a></li> -->
            <li><a href="#">Tips for trading</a></li>
            <li><a href="#">calls for equity</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Quick Links</h3>
          <ul>
            <!-- <li><a href="#">Partners</a></li> -->
            <li><a href="./team.php">Our Team</a></li>
            <li><a href="./team.php">About</a></li>
            <li><a href="./faq.php">FAQ’s</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Follow Us</h3>
          <ul>
              <li>
                  <a href="">
                      Facebook
                  </a>
              </li>
              <li>
                  <a href="">
                      Twitter
                  </a>
              </li>
              <li>
                  <a href="">
                      Linkedin
                  </a>
              </li>
              
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <?php 
  $year=date("Y");
  
  echo '<div class="footer-bottom">      
     <h5>Copyright '.$year.'. All rights reserved.</h5> 
    
  </div>'; 
  ?>
</footer>